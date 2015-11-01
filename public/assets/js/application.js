var app = angular.module('main', ['ui.bootstrap', 'ngTouch']);

app.config(function ($interpolateProvider) {

    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');

});


angular.module('main').controller('login', function ($scope, $modal) {

    $scope.open = function(){
        $modal.open({
            templateUrl: 'login-modal.html',
            controller: 'LoginModalInstanceCtrl'
        });
    }
});

angular.module('main').controller('flame-management', function ($scope, $http, SoundService) {

    var champions_url = '/champions';
    var type_url = '/flametypes';
    var max_amount_of_champions = 6;

    $scope.champions = [];
    $scope.selected_champions = [];
    $scope.champion_ids = "";
    $scope.types = [];

    $scope.flame = null;
    $scope.filename = null;
    $scope.placeholder = null;
    $scope.enabledTypes = [];
    $scope.type_ids = "";

    $scope.errorMessages = [];

    $scope.hasSound = false;

    $scope.init = function(flame)
    {
        $scope.flame = flame;
        
        if(flame.champions != undefined){
            flame.champions.forEach(function(champion){
                $scope.selected_champions.push(champion);
            });
            $scope.updateChampionIdList();
        }

        if(flame.filepath != undefined){
            $scope.hasSound = true;
        }

        if(flame.title != undefined){
            $scope.title = flame.title;
        }

        if(flame.type_ids != undefined){
            flame.type_ids.split(",").forEach(function(type){
                $scope.enabledTypes.push(type);
            });
            $scope.type_ids = flame.type_ids;
        }
    };

    $http.get(champions_url).success(function(data)
    {
        data.forEach(function(item){
            $scope.champions.push({
                id: item.id,
                name: item.name,
                nickname: item.nickname,
                filename: item.filename
            });
        });
    });

    $http.get(type_url).success(function(data)
    {
        data.forEach(function(item){

            var enabled = false;

            $scope.enabledTypes.forEach(function(enabledType){
                if(enabledType == item.id){
                    enabled = true;
                }
            });

            $scope.types.push({
                id: item.id,
                types: item.type,
                icon: item.icon,
                description: item.description,
                color: item.color,
                enabled: enabled
            });
        });
    });

    $scope.onSelectChampion = function(champion){

        if($scope.selected_champions.length < 6 ){
            $scope.selected_champions.push(angular.copy(champion));
            $scope.updateChampionIdList();
        }
    }

    $scope.onRemoveSelectedChampion = function(champion){
         var index = $scope.selected_champions.indexOf(champion);
        $scope.selected_champions.splice(index, 1);
        $scope.updateChampionIdList();
    }

    $scope.filterByText = function(champion){

        if($scope.champion_text == undefined){
            return true;
        }

        if(champion.name.toLowerCase().indexOf($scope.champion_text.toLowerCase()) !== -1){
            return true;
        }

        return false;
    };

    $scope.onPlay = function(filepath){ 
        SoundService.play(filepath);
    }

    $scope.file_changed = function(element) {
        $scope.placeholder = element.files[0].name;
        $scope.$digest();
    };

    $scope.updateChampionIdList = function(){
        var ids = [];
         $scope.selected_champions.forEach(function(champion){ 
             ids.push(champion.id);
         });
        $scope.champion_ids = ids.join();
    }

    $scope.getStyle = function (type) {
        if(type.enabled){
              return {'background-color':type.color, 'color':'white'};
        }
        else{
              return {'background-color':'white', 'color':type.color};
        } 
    }

    $scope.onTypeSelection = function(type){
        type.enabled = !type.enabled;

        var ids = [];

        $scope.types.forEach(function(item){
            if(item.enabled){
                ids.push(item.id);
            }
        });

        $scope.type_ids = ids.join();
    }

    $scope.validate = function(event){

        $scope.errorMessages = [];

        if(!$scope.title || $scope.title == ""){
            $scope.errorMessages.push("Een titel is vereist...");
        }
        if(!$scope.type_ids || $scope.type_ids == ""){
            $scope.errorMessages.push("Selecteer minimaal 1 type.");
        }
        if(!$scope.champion_ids || $scope.champion_ids == ""){
            $scope.errorMessages.push("Selecteer minimaal 1 champion.");
        }

        if(!$scope.hasSound && !$scope.placeholder || !$scope.hasSound && $scope.placeholder == "" ){
            $scope.errorMessages.push("Voeg een geluidsfragment toe.");
        }

        if($scope.errorMessages.length != 0){
            event.preventDefault();
        }    
    }
});


angular.module('main').controller('flame', function ($scope, $http, SoundService, $modal) {
    var flame_url = '/flames';
    var type_url = '/flametypes';

    $scope.flames = [];
    $scope.types = [];
    $scope.selectedFlame = null;

    $http.get(flame_url).success(function(data)
    {
        data.forEach(function(item){
            $scope.flames.push({
                id : item.id,
                title: item.title,
                types: item.types,
                champions: item.champions,
                filepath: item.filepath,
                date: item.created_at
            });
        });
    });

    $http.get(type_url).success(function(data)
    {
        data.forEach(function(item){
            $scope.types.push({
                id: item.id,
                types: item.type,
                icon: item.icon,
                description: item.description,
                color: item.color,
                enabled: true
            });
        });
    });

    $scope.getStyle = function (type) {
        if(type.enabled){
              return {'background-color':type.color, 'color':'white'};
        }
        else{
              return {'background-color':'white', 'color':type.color};
        }
      
    }


    //events 
    $scope.onPlay = function(filepath){ 
        SoundService.play(filepath);
    }

    $scope.onTypeSelection = function(type){
        type.enabled = !type.enabled;
    }

    $scope.openRemoveModal = function(flame){
        $scope.selectedFlame = flame;

        $modal.open({
            templateUrl: 'remove-modal.html',
            controller: 'RemoveModalInstanceCtrl',
            resolve: {
                flame: function () {
                  return flame;
                }
            }
        });
    }

    $scope.filterByType = function(flame){
        var hasType = false;

        angular.forEach(flame.types, function (type){

            angular.forEach($scope.types, function(item){
                if(type.id === item.id && item.enabled == true){
                    hasType = true;
                }
            });
        });

        return hasType;
    };

}).service('SoundService', function($http) {
       var self = this;
        self.audio = null;
        self.play = function(path){
            if(self.audio != null){
                self.audio.pause();
            }

            self.audio = new Audio(path);
            self.audio.play();
        }

});

//modal controllers

angular.module('main').controller('RemoveModalInstanceCtrl', function ($scope, $modalInstance, flame) {

  $scope.flame = flame;

  $scope.cancel = function () {
    $modalInstance.dismiss('cancel');
  };
});

angular.module('main').controller('LoginModalInstanceCtrl', function ($scope, $modalInstance) {

  $scope.cancel = function () {
    $modalInstance.dismiss('cancel');
  };
});






