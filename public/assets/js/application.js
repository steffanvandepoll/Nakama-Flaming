var app = angular.module('main', ['ui.bootstrap', 'ngTouch']);

app.config(function ($interpolateProvider) {

    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');

});

angular.module('main').controller('flame', function ($scope, $http, SoundService) {
    var flame_url = '/flames';
    var type_url = '/flametypes';

    $scope.flames = [];
    $scope.types = [];

    $http.get(flame_url).success(function(data)
    {
        data.forEach(function(item){
            $scope.flames.push({
                title: item.title,
                types: item.types,
                champions: item.champions,
                filepath: item.filepath,
                date: item.updated_at
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
        
        var path = "assets/sfx/" + filepath;

        SoundService.play(path);
    }

    $scope.onTypeSelection = function(type){
        type.enabled = !type.enabled;
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





