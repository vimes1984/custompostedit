<?php 
	$PostToEdit = $_GET['posttoedit'];
?>
<div data-ng-app="editpostapp">
	<div ng-controller="posteditcntrl">
		<form name="jobeditform" >
			
			<input type="text" ng-init="formobject.jobID = <?php echo $PostToEdit; ?>" value="<?php echo $PostToEdit; ?>" ng-model="formobject.jobID" />

			<input type="text" name="jobtitle" ng-model="formobject.title" placeholder="Job Title" />

			<input type="text" name="jobtitle" ng-model="formobject.monthlysalary" placeholder="Monthly Salary" />

			<textarea name="jobcontent" id="" ng-model="formobject.jobcontent" cols="30" rows="10" placeholder="post content"></textarea>

			<input type="submit" value="Save Job"  ng-click="savepost(jobeditform)" />
		</form>
	</div>
</div>