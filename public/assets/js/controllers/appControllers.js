angular.module('app.controllers', [])

  .controller('DashboardCtrl', function($rootScope, $scope, OfficeService, UserService) {

    UserService.get();

    OfficeService.getAll();

    $scope.getNumberOfOffices = function() {
      var count = 0;

      angular.forEach($rootScope.offices, function(office) {
        count += office.name ? 1 : 0;
      });

      return count;
    }
    //$scope.offices = OfficeService.getAll();

  })

  .controller('OfficesCtrl', function($rootScope, $scope, OfficeService, UserService) {

    UserService.get();

    $scope.offices = OfficeService.getAll();
  })

  .controller('WorthAppController', ['$scope', function($scope) {
    // your main controller
  }])
;