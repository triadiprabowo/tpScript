'use strict';

/*
** Controller: globalCtrl
** Location: All pages
** Version 1.0
** Initial Build
** Developed by Triadi Prabowo
** Released on http://triadiprabowo.com/
*/

tpApp.controller('globalCtrl', function($scope, $http, ngDialog) {
	/*
	** Function: Modal contact form
	** Dependency: ngDialog
	** Run when user click 'contact' menu
	*/

	$scope.showContactForm = function() {
		ngDialog.open({
			template: 'sys/modal/modal_contact.php'
		});
	}

	$scope.submitContact = function() {
		$http.post('sys/api/mail.php', {
			'form': 'contact',
			'name': $scope.fullname,
			'email': $scope.email,
			'subject': $scope.subject,
			'message': $scope.message
		}).success(function(result) {
			ngDialog.open({
				template: 'sys/modal/success.php?res=contact'
			});
		});
	}
});