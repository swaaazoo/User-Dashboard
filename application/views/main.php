<?php $this->load->view('partials/header') ?>
<?php $this->load->view('partials/navbar') ?>

<div class="container">
	<div class="jumbotron">
		<h1>Welcome to the User Dashboard</h1>
	 	<p>We're going to build a cool application using an MVC framework!</p>
		<p><a class="btn btn-primary btn-lg" href="/login" role="button">Start</a></p>
	</div>
	<!-- CONTENT ROWS -->
	<div class="row">
		<div class="col-sm-4">
			<h3>Manage Users</h3>
			<p>Using this application, you'll learn how to add, remove, and edit users for the application.</p>
		</div>
		<div class="col-sm-4">
			<h3>Leave messages</h3>
			<p>Users will be able to leave a message to another user using this application.</p>
		</div>
		<div class="col-sm-4">
			<h3>Edit user information</h3>
			<p>Admins will be able to edit another user's information (email address, first name, last name, etc.)</p>
		</div>
	</div>
</div>

<?php $this->load->view('partials/footer') ?>