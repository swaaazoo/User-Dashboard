<?php $this->load->view('partials/header') ?>
<?php $this->load->view('partials/dash_navbar') ?>

<div class="container">
	<div class="row">
		<h3 class="col-sm-4">All Users</h3>
	</div>
	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Date Created</th>
			</tr>
		</thead>
		<tbody>
<?php
		foreach($users AS $user) { ?>
			<tr>
				<td><?=$user['id']?></td>
				<td><a href="/walls/show_wall/<?=$user['id']?>"><?=$user['first_name']?></a></td>
				<td><?=$user['email']?></td>
				<td><?=$user['created_at']?></td>
			</tr>
<?php }
?>		
		</tbody>
	</table>
</div>

<?php $this->load->view('partials/footer') ?>