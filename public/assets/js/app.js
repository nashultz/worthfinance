var app = angular.module("app", ['ngRoute']);

app.config(['$routeProvider', function($routeProvider) {
  $routeProvider.when('/login', {
    templateUrl:'views/login.php',
    controller: 'LoginController'
  });

  $routeProvider.otherwise({ redirectTo:'/login' });
}]);

app.controller('LoginController', function($scope, $location, $http) {
  $scope.credentials = {
      username: '',
      password: ''
  };
  $scope.login = function($http) {
    return $http.post('/postLogin');
  };
});