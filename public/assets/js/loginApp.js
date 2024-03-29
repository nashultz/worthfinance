var loginApp = angular.module("loginApp", ['ngRoute']);

loginApp.config(function($routeProvider,$locationProvider) {
  
  $routeProvider.when('/auth/login', {
    templateUrl:'views/login/login.php',
    controller: 'LoginController'
  });

  $locationProvider.html5Mode(true);

});

loginApp.factory("FlashService", function($rootScope) {
  return {
    show: function(message, alert) {
      $rootScope.alert = alert;
      $rootScope.flash = message;
    },
    clear: function() {
      $rootScope.flash = "";
    }
  }
});

loginApp.controller('LoginController', function($scope, $window, $http, FlashService) {

  $scope.login = function() {
    var login =  $http.post("/auth/login", $scope.credentials);
    
    login.error(function(response) {
      FlashService.show(response.flash, 'danger');
    });

    // Clear Fash Message
    login.success(FlashService.clear);

    // Redirect Flash Message
    login.success(function() {
      $window.location.href = '/#/dashboard';
    });

  };

});