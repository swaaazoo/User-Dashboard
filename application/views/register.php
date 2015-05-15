<?php $this->load->view('partials/header') ?>
<?php $this->load->view('partials/navbar') ?>

<!-- REGISTER FORM -->
<h4> <?= $this->session->flashdata('errors') ?> </h4>
<form class="col-sm-4 col-sm-offset-2" action="/create_user" method="POST">
	<div class="row">
		<h2 class="col-sm-4">Register</h2>
	</div>
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
  <div class="form-group">
    <input type="hidden" name="admin_level" value="0">
  	<button type="submit" class="btn btn-default">Register</button>
  </div>
  <div class="row">
  	<a class="col-sm-5" href="/login">Already have an account? Login.</a>
  </div>
</form>
<!-- END OF REGISTER FORM -->

<?php $this->load->view('partials/footer') ?>