/**
 * Represents the view for the public-facing component of the plugin.
 *
 * This typically includes any information, if any, that is rendered to the
 * frontend of the theme when the plugin is activated.
 *
 * @package   custom-post-edit
 * @author    Chris Hardin <chris@hardinmarketing.com>
 * @license   GPL-2.0+
 * @link      hardinmarketing.com
 * @copyright 10-9-2014 hardinmarketing.com
 */

(function ($) {
	"use strict";
	$(function () {
		// Place your public-facing JavaScript here
	});
}(jQuery));


var myApp = angular.module('editpostapp', []);

myApp.controller('posteditcntrl', function ($scope, posteditfac, $location) {
	//default post edit fields
	$scope.formobject = {'jobID': '', 'title': '', 'jobcontent': '', 'monthlysalary': ''};

    console.log($location);
    
    $scope.savepost =  function savepost(jobeditformdata){
    	
    	console.log(jobeditformdata);

    	//save post to php endpoint
	    posteditfac.posteditfac($scope)
	    .success(function(data, status, headers, config){

	    	console.log(data);
	    })
	    .error(function(data, status, headers, config) {
			//error message here

		});
    }


});
myApp.factory('posteditfac', function($http) {
    return {
        posteditfac: function($scope){
            return  $http({
                        method: 'POST', 
                        url: '/roman/wp-admin/admin-ajax.php',//remove all before /wp-admin on launch
                        data: $scope.formobject,
                        params: { 'action': 'post_edit_fac'}
                    }); 
        }

    };
});