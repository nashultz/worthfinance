var worthApp = angular.module("worthApp", ['ngRoute']);

worthApp.config(function($routeProvider,$locationProvider) {
  $routeProvider.when('/admin/dashboard', {
    templateUrl:'views/dashboard.blade.php',
    controller: 'DashboardController'
  });

  $locationProvider.html5Mode(true);
});

worthApp.factory("FlashService", function($rootScope) {
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

worthApp.controller('DashboardController', function() {

});