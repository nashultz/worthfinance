angular.module('app.services', [])

  .factory("FlashService", function($rootScope) {
    return {
      show: function(message, alert) {
        $rootScope.alert = alert;
        $rootScope.flash = message;
      },
      clear: function() {
        $rootScope.flash = "";
      }
    }
  })

  .factory("UserService", function($rootScope, $http) {

    return {
      get: function() {
        var u =  $http.get("/admin/dashboard/user");

        u.success(function(response) {
          $rootScope.user = response;
        });
      }
    }

  })

  .factory("OfficeService", function($http, $rootScope) {

    return {

      getAll: function() {

        var oa = $http.get('admin/offices/all');

        oa.success(function(response) {
          $rootScope.offices = response;
        });

      }
    }

  })
;