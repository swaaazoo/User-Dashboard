<?php $this->load->view('partials/header') ?>
<?php $this->load->view('partials/dash_navbar') ?>

	<div class="row">
	<!-- EDIT INFORMATION -->
		<form class="col-sm-4 col-sm-offset-1" action="/profiles/user_edit_acct" method="POST">
		  <div class="row">
				<h3 class="col-sm-12">Edit Information</h3>
			</div>
		  <div class="form-group">
		    <label>Email Address:</label>
		    <input type="email" name="email" class="form-control" value="<?= $user['email'] ?>">
		  </div>
		  <div class="form-group">
		    <label>First Name:</label>
		    <input type="text" name="first_name" class="form-control" value="<?= $user['first_name'] ?>">
		  </div>
		  <div class="form-group">
		    <label>Last Name:</label>
		    <input type="text" name="last_name" class="form-control" value="<?= $user['last_name'] ?>">
		  </div>
		  <div class="form-group">
		  	<button type="submit" class="btn btn-success pull-right">Save</button>
		  </div>
		</form>
	<!-- CHANGE PASSWORD -->
		<h4> <?= $this->session->flashdata('errors') ?> </h4>
		<form class="col-sm-4 col-sm-offset-1" action="/profiles/user_edit_password" method="POST">
		  <div class="row">
			<h3 class="col-sm-8">Change Password</h3>
		  </div>
		  <div class="form-group">
		    <label>Password:</label>
		    <input type="password" name="password" class="form-control">
		  </div>
		  <div class="form-group">
		    <label>Password Confirmation:</label>
		    <input type="password" name="confirm_password" class="form-control">
		  </div>
		  <div class="form-group">
		  	<button type="submit" class="btn btn-success pull-right">Update Password</button>
		  </div>
		</form>
	</div>
	<!-- EDIT DESCRIPTION -->
	<div class="row">
		<form class="col-sm-9 col-sm-offset-1" action="/profiles/user_edit_desc" method="POST">
		  <div class="row">
				<h3 class="col-sm-12">Edit Description:</h3>
		  </div>
		  <div class="form-group">
		    <textarea class="form-control" name="description" rows="3"><?= $user['description'] ?></textarea>
		  </div>
		  <div class="form-group">
		  	<button type="submit" class="btn btn-success pull-right">Save</button>
		  </div>
		</form>
	</div>

<?php $this->load->view('partials/footer') ?>