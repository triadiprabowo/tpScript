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
	** AngularJS tpToggleMobileMenu
	** Dependency: $scope & jQLite/jQuery
	*/
	$scope.tpToggleMenu = function() {
		$scope.showMobileMenu = !$scope.showMobileMenu;
		$scope.isActive = !$scope.isActive;

		console.log($scope.isActive, $scope.showMobileMenu);
	}

	/*
	** Function: Modal contact form
	** Dependency: ngDialog
	** Run when user click 'contact' menu
	*/

	$scope.showContactForm = function() {
		ngDialog.open({
			template: 'sys/modal/modal_contact.php',
			controller: function($scope) {
				$scope.submitContact = function() {
					// Define Variables
					var fn = $scope.fullname,
						email = $scope.email,
						subject = $scope.subject,
						message = $scope.message;

					var emailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
					if(fn != undefined && email != undefined && subject != undefined && message != undefined) {
						if(email.match(emailformat)) {
							$http.post('http://localhost/triadiprabowo/sys/api/mail.php', {
								'form': 'contact',
								'name': $scope.fullname,
								'email': $scope.email,
								'subject': $scope.subject,
								'message': $scope.message
							}).
							success(function(data, status) {
								ngDialog.open({
									template: 'sys/modal/success.php?res=contact'
								});
							}).
							error(function(status) {
								console.log('HTTP Responded with '+status+' sending data to be analysed');
							});		
						}
						else {
							ngDialog.open({
								template: 'sys/modal/error.php?res=invalidemail'
							});
						}
					}
					else {
						ngDialog.open({
							template: 'sys/modal/error.php?res=allrequired'
						});
					}					
				}
			}
		});
	}

});