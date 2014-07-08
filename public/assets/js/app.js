var app = angular.module("app", ['ngRoute']);

app.config(function($routeProvider,$locationProvider) {
  $routeProvider.when('/login', {
    templateUrl:'views/login.php',
    controller: 'LoginController'
  });

  $routeProvider.otherwise({ redirectTo:'/login' });

  $locationProvider.html5Mode(true);
});

app.controller('LoginController', function($scope, $location, $http) {
  $scope.login = function(credentials) {
    return $http.post("/postLogin", credentials);
  };
});