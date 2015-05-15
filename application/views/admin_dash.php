<?php $this->load->view('partials/header') ?>
<?php $this->load->view('partials/dash_navbar') ?>

	<div class="container">
		<h4> <?= $this->session->flashdata('errors') ?> </h4>
		<div class="row">
			<h3 class="col-sm-4">Manage Users</h3>
			<a href="/admins/add_view"><button class="btn btn-primary pull-right">Add New</button></a>
		</div>
		<table class="table table-bordered table-striped">
			<thead>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Date Created</th>
				<th>User Level</th>
				<th>Actions</th>
			</thead>
			<tbody>
<?php
			foreach($users AS $user) { ?>
				<tr>
					<td><?=$user['id']?></td>
					<td><a href="/walls/show_wall/<?=$user['id']?>"><?=$user['first_name']?></a></td>
					<td><?=$user['email']?></td>
					<td><?=$user['created_at']?></td>
					<td><?=$user['admin_level']?></td>
					<td><a href="/admins/user_profile/<?=$user['id']?>">edit</a> | <a href="/admins/remove_user/<?=$user['id']?>">remove</a></td>
				</tr>
<?php }
?>		
			</tbody>
		</table>
	</div>

<?php $this->load->view('partials/footer') ?>