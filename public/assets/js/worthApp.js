angular.module("worthApp", [
  'ngRoute',
  'app.main',
  'app.controllers',
  'app.services',
  'app.localize',
  'app.navigation'
  ])
  
  .config(function($routeProvider,$locationProvider) {

    $routeProvider
    .when('/', {
      redirectTo: '/dashboard'
    })

    $routeProvider.when('/dashboard', {
      templateUrl:'views/dashboard/dashboard.php',
      controller: 'DashboardCtrl'
    });

    $routeProvider.when('/offices', {
      templateUrl:'views/offices/officeindex.php',
      controller: 'OfficesCtrl'
    });

    $routeProvider.when('/accounts', {
      templateUrl:'views/accounts/accountsindex.php',
      controller: 'AccountsCtrl'
    });    

    $routeProvider.otherwise({redirectTo: '/dashboard'});

  })

  .run(['$rootScope', 'settings', function($rootScope, settings) {
    settings.currentLang = settings.languages[0]; // en
  }])
;