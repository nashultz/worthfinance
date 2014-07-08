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

app.factory("FlashService", function($rootScope) {
  return {
    show: function(message) {
      $rootScope.flash = message;
    },
    clear: function() {
      $rootScope.flash = "";
    }
  }
});

app.controller('LoginController', function($scope, $location, $http, FlashService) {
  $scope.login = function() {
    var login =  $http.post("/auth/login", $scope.credentials);
    login.error(function(response) {
      FlashService.show(response.flash);
    });
    login.success(FlashService.clear);
    login.success(function() {
      $location.path('/dashboard');
    });
  };
});

app.controller('DashboardController', function() {

});