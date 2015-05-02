'use strict';

/*
** Controller: globalCtrl
** Location: All pages
** Version 1.0
** Initial Build
** Developed by Triadi Prabowo
** Released on http://triadiprabowo.com/
*/

tpApp.controller('globalCtrl', function($scope, ngDialog) {
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
});