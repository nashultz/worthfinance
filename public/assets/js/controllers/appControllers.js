worthApp.controller('DashboardCtrl', function($rootScope, $scope, OfficeService, UserService) {

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

});

worthApp.controller('OfficesCtrl', function($rootScope, $scope, OfficeService, UserService) {

  UserService.get();
  
  $scope.offices = OfficeService.getAll();
});