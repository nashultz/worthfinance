angular.module('app.controllers', [])

   .factory('settings', ['$rootScope', function($rootScope){
    // supported languages
    
    var settings = {
      languages: [
        {
          language: 'English',
          translation: 'English',
          langCode: 'en',
          flagCode: 'us'
        }
      ],
      
    };

    return settings;
    
  }])

  .controller('DashboardCtrl', function($rootScope, $scope, OfficeService, UserService) {

    UserService.get();

    OfficeService.getAll();

    $scope.getNumberOfOffices = function() {
      var offices = $rootScope.offices;
      return offices.length;
    }
    //$scope.offices = OfficeService.getAll();

  })

  .controller('OfficesCtrl', function($rootScope, $scope, OfficeService, UserService) {

    UserService.get();

    $rootScope.offices = OfficeService.getAll();
    $rootScope.predicate = '';
  })

  .controller('PageViewController', ['$scope', '$route', '$animate', function($scope, $route, $animate) {
    // controler of the dynamically loaded views, for DEMO purposes only.
    /*$scope.$on('$viewContentLoaded', function() {
      
    });*/
  }])

  .controller('WorthAppController', ['$scope', function($scope) {
    // your main controller
  }])

  .controller('LangController', ['$scope', 'settings', 'localize', function($scope, settings, localize) {
    $scope.languages = settings.languages;
    $scope.currentLang = settings.currentLang;
    $scope.setLang = function(lang) {
      settings.currentLang = lang;
      $scope.currentLang = lang;
      localize.setLang(lang);
    }

    // set the default language
    $scope.setLang($scope.currentLang);

  }])
;