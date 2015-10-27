
/**
 * Created by Steffan on 25-8-14.
 */
angular.module('main').controller('carousel', function ($scope, $http, SoundService) {
    var url = '/slides';
    $scope.slides = [];
    $scope.slideInterval = 2000;

    $http.get(url).success(function(data)
    {
        data.forEach(function(item){
            $scope.slides.push({
                title: item.description,
                path: 'assets/sfx/' + item.flame.filepath,
                background: 'assets/img/slider/' + item.filepath
            });
        });
        console.log($scope.slides);
    });

    $scope.onPlay = function(filePath){
        console.log(filePath);
        SoundService.play(filePath);
    }
});
