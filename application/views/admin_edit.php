<?php $this->load->view('partials/header') ?>
<?php $this->load->view('partials/dash_navbar') ?>

	<div class="container">
		<div class="row">
			<h2 class="col-sm-8">Edit User:  <?= $user['id'] ?>, <?= $user['first_name'] ?></h2>
			<a href="/dashboard"><button class="btn btn-default pull-right">Return to Dashboard</button></a>
		<!-- EDIT INFORMATION -->
			<form class="col-sm-4 col-sm-offset-1" action="/admins/edit_acct/<?= $user['id'] ?>" method="POST">
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
				<div class="form-group"id="admin_level">
				    <label>User Level:</label>
				    <select class="form-control" name="level" >
				    	<option value="normal" <?= ($user['admin_level'] == 0 ? 'selected="selected"' : ''); ?>>Normal</option>
				    	<option value="admin"  <?= ($user['admin_level'] == 1 ? 'selected="selected"' : ''); ?>>Admin</option>
				    </select>
				</div>
				<div class="form-group">
				  	<button type="submit" class="btn btn-default pull-right">Save</button>
				</div>
			</form>
		<!-- CHANGE PASSWORD -->
			<form class="col-sm-4 col-sm-offset-1 form-horizontal" action="/admins/edit_password/<?= $user['id'] ?>" method="POST">
				<h4> <?= $this->session->flashdata('errors') ?> </h4>
				<div class="form-group">
					<h3>Change Password</h3>
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
					<button type="submit" class="btn btn-default pull-right">Update Password</button>
				</div>
			</form>
		</div>
	</div>

<?php $this->load->view('partials/footer') ?>