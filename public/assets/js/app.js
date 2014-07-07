'use strict';

var worthApp = angular.module('worthApp', [
  	'ngRoute'
]);

worthApp.config(['$routeProvider', '$provide', function($routeProvider, $provide) {
	$routeProvider
		.when('/', {
			redirectTo: '/dashboard'
		})
	;

	// with this, you can use $log('Message') same as $log.info('Message');
	$provide.decorator('$log', function($delegate) {
        // create a new function to be returned below as the $log service (instead of the $delegate)
        function logger() {
            // if $log fn is called directly, default to "info" message
            logger.info.apply(logger, arguments);
        }
        // add all the $log props into our new logger fn
        angular.extend(logger, $delegate);
        return logger;
    });

}]);