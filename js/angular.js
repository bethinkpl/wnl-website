var lekApp = angular.module('lekApp', ['ui.router']);

lekApp.config(['$stateProvider', '$urlRouterProvider', '$locationProvider', function($stateProvider, $urlRouterProvider, $locationProvider){

    // For any unmatched url, send to /offer
    $urlRouterProvider.otherwise("/category/1")

    $stateProvider
        .state('category', {
            url: "/category/:id",
            templateUrl: pageUrl + "/wp-content/themes/wiecejnizlek/page-angular-templates/blog.html",
            controller: 'postsController',
        });
}]);

lekApp.controller('blogController', ['$scope', '$sce', '$http', '$stateParams', function($scope, $sce, $http, $stateParams) {
    $scope.$on('id_category', function (evnt, data) {
        $scope.id_category = data;
    });
    $http({
        method: 'GET',
        url: pageUrl + '/wp-json/wp/v2/categories'
    }).then(function successCallback(response) {
        $scope.categories = response.data;
    }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
    });

    $scope.limit = 6;
    $scope.increaseLimit = function() {
        $scope.limit += 6;
        $scope.$emit('limit', $scope.limit);
    }
}]);

lekApp.controller('postsController', ['$scope', '$sce', '$http', '$stateParams', function($scope, $sce, $http, $stateParams) {
    $scope.id_category = ($stateParams.id) ? $stateParams.id : 1;
    $scope.$emit('id_category', $scope.id_category);
    $scope.$on('limit', function (evnt, data) {
        $scope.limit = data;
    });

    $http({
        method: 'GET',
        url: pageUrl + '/wp-json/wp/v2/posts/?categories=' + $scope.id_category
    }).then(function successCallback(response) {
        $scope.posts = response.data;
    }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
    });

    $http({
        method: 'GET',
        url: pageUrl + '/wp-json/wp/v2/users'
    }).then(function successCallback(response) {
        $scope.authors = response.data;

        $scope.getNameAuthor = function(value) {
            var obj = $scope.authors.filter(x => x.id === value);
            return obj[0].name;
        }
    }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
    });

    $http({
        method: 'GET',
        url: pageUrl + '/wp-json/wp/v2/categories'
    }).then(function successCallback(response) {
        $scope.categories = response.data;

        $scope.getNameCategories = function(value) {
            var obj = $scope.categories.filter(x => x.id === value);
            return obj[0].name;
        }
    }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
    });
}]);
