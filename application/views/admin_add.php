<?php $this->load->view('partials/header') ?>
<?php $this->load->view('partials/dash_navbar') ?>

<!-- ADD USER FORM -->
	<div class="row">
		<h2 class="col-sm-4 col-sm-offset-2">Add User</h2>
		<a href="/dashboard" class="col-sm-4 pull-right"><button class="btn btn-default">Return to Dashboard</button></a>
	</div>
	<form class="col-sm-4 col-sm-offset-2" action="/admins/add_user" method="POST">
		<h4> <?= $this->session->flashdata('errors') ?> </h4>
	  <div class="form-group">
	    <label>Email Address:</label>
	    <input type="email" name="email" class="form-control">
	  </div>
	  <div class="form-group">
	    <label>First Name:</label>
	    <input type="text" name="first_name" class="form-control">
	  </div>
	  <div class="form-group">
	    <label>Last Name:</label>
	    <input type="text" name="last_name" class="form-control">
	  </div>
	  <div class="form-group">
	    <label>Password:</label>
	    <input type="password" name="password" class="form-control">
	  </div>
	  <div class="form-group">
	    <label>Password Confirmation:</label>
	    <input type="password" name="confirm_password" class="form-control">
	  </div>
	  <div class="form-group" id="admin_level">
	    <label>User Level:</label>
	    <select class="form-control" name="level" >
	    	<option value="normal">Normal</option>
	    	<option value="admin">Admin</option>
	    </select>
	  </div>
	  <div class="form-group">
	  	<button type="submit" class="btn btn-default">Create</button>
	  </div>
	</form>
<!-- END OF ADD USER FORM -->

<?php $this->load->view('partials/footer') ?>