var app = angular.module("app", ['ngRoute']);

app.config(function($routeProvider,$locationProvider) {
  $routeProvider.when('/login', {
    templateUrl:'views/login.php',
    controller: 'LoginController'
  });

  $routeProvider.when('/dashboard', {
    templateUrl:'views/dashboard.php',
    controller: 'DashboardController'
  });

  $routeProvider.otherwise({ redirectTo:'/login' });

  $locationProvider.html5Mode(true);
});

app.controller('LoginController', function($scope, $location, $http) {
  $scope.login = function() {
    return $http.post("/auth/login", $scope.credentials).success(function() {
      $location.path('/dashboard');
    });
  };
});

app.controller('DashboardController', function() {

});