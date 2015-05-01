/*
** AngularJS Function
** Developed by Triadi Prabowo (me@triadiprabowo.com)
** Version 1.0 Initial Build
** Released on triadiprabowo.com
*/

var tpApp = angular.module('tp', ['ngRoute','ngDialog']);

tpApp.config(function($routeProvider, $locationProvider) {
	$locationProvider.html5Mode(true);

	$routeProvider
	.when('/', {
		templateUrl: 'sys/tpl/home.tpl.php',
		title: 'Welcome to triadiprabowo.com'
	}).
	when('/home', {
		templateUrl: 'sys/tpl/home.tpl.php',
		title: 'Welcome to triadiprabowo.com'
	}).
	when('/portfolio', {
		templateUrl: 'sys/tpl/portfolio.tpl.php',
		title: 'triadiprabowo.com | Portfolio'
	}).
	when('/404', {
		templateUrl: '404.php',
		title: 'Whoops! Page Not Found'
	}).
	otherwise({
		redirectTo: '/404'
	});
});

// AngularJS 'run' application module

tpApp.run(['$location', '$rootScope', function($location, $rootScope) {
    $rootScope.$on('$routeChangeSuccess', function (event, current, previous) {
        $rootScope.title = current.$$route.title;
    });
}]);