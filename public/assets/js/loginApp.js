var loginApp = angular.module("loginApp", ['ngRoute']);

loginApp.config(function($routeProvider,$locationProvider) {
  
  $routeProvider.when('/auth/login', {
    templateUrl:'views/login.blade.php',
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

loginApp.controller('LoginController', function($scope, $location, $http, FlashService) {

  $scope.login = function() {
    var login =  $http.post("/auth/login", $scope.credentials);
    
    login.error(function(response) {
      FlashService.show(response.flash, 'danger');
    });

    // Clear Fash Message
    login.success(FlashService.clear);

    // Redirect Flash Message
    login.success(function() {
      $location.path('/dashboard'); // This doesn't redirect, it only changes url (notice by refreshing afterwards...);
      // People state to use $window.location = 'http://siteaddress'
      // $window.location.href = '/dashboard' // MIGHT
    });

  };

});