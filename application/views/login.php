<?php $this->load->view('partials/header') ?>
<?php $this->load->view('partials/navbar') ?>

<!-- LOGIN FORM -->

	<h4><?= $this->session->flashdata('login_error') ?></h4>
	<form class="col-sm-4 col-sm-offset-2" action="/create_login" method="POST">
	  <div class="row">
			<h2 >Sign In</h2>
	  </div>
	  <div class="form-group">
	    <label>Email Address:</label>
	    <input type="email" name="email" class="form-control">
	  </div>
	  <div class="form-group">
	    <label>Password:</label>
	    <input type="password" name="password" class="form-control">
	  </div>
	  <div class="form-group">
	  	<button type="submit" class="btn btn-default">Sign in</button>
	  </div>
	  <div class="row">
	  	<a class="col-sm-5" href="/register">Don't have an account? Register.</a>
	  </div>
	</form>
<!-- END OF LOGIN FORM -->

<?php $this->load->view('partials/footer') ?>