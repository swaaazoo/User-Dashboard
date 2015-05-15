<?php $this->load->view('partials/header') ?>
<?php $this->load->view('partials/dash_navbar') ?>

<style>
	.main {
		padding-bottom: 40px;
	}
</style>

<div class="container">
	<div class="row main">
		<h2><?= $user['first_name'] ." ". $user["last_name"] ?></h2>
		<table class="col-sm-5">
			<tr>
				<td>Registered at:</td>
				<td><?= $user['created_at'] ?></td>
			</tr>
			<tr>
				<td>User ID:</td>
				<td><?= $user['id'] ?></td>
			</tr>
			<tr>
				<td>Email Address:</td>
				<td><?= $user['email'] ?></td>
			</tr>
			<tr>
				<td>Description:</td>
				<td><?= $user['description'] ?></td>
			</tr>
		</table>
	</div>
	<div class="row main">
		<h3>Leave a message for <?= $user['first_name'] ?></h3>
		<form class="col-sm-12" action="/walls/add_message" method="POST">
			<textarea class="form-control" name="message"></textarea>
			<input type="hidden" name="user_id" value="<?= $user['id'] ?>">
			<input class="btn btn-success" type="submit" value="Post">
		</form>
	</div>
<?php  if(count($messages) > 0) {
		foreach($messages AS $message){ ?>
			<div class="row">
				<div class="message col-sm-12">  <!-- whole message area -->
					<div class="row"> <!-- name & date row -->
						<div class="message col-sm-5">
							<h4 class="text-align-left"><?= $message['author_name'] ." ". $message["author_lastname"] ?> wrote:</h4>
						</div>
						<div class="message col-sm-4 col-xs-offset-3">
							 <h4 class="text-right text-align-right"><?= date('F j Y, ha', strtotime($message['message_date'])) ?></h4>
						</div>
					</div>  <!-- name & date row -->
					<div class="row well">
						<p><?= $message['message'] ?></p>
					</div>
					<div class="comment col-sm-10 pull-right">
		<?php	foreach($comments AS $comment){ 	
					if($comment['message_id'] == $message['message_id']){?>
						<div class="row"><!-- name & date row -->
							<div class="message col-sm-5">
								<h4><?=$comment["author_name"] ." ". $comment["author_lastname"]?> wrote:</h4>   
							</div>
							<div class="message col-sm-4 col-xs-offset-3">
								<h4><?= date('F j Y, ha', strtotime($comment["comment_date"]))?></h4>
							</div>
						</div> <!-- name & date row -->
						<div class="row well well-sm">
							<p><?=$comment["comment"]?></p>
						</div>
		<?php   	}		
				}?>
						<form class="form-horizontal" action="/walls/add_comment" method="POST">
							<textarea class="form-control" name="comment" placeholder="Leave a comment"></textarea>
							<input type="hidden" name="message_id" value="<?= $message['message_id'] ?>">
							<input type="hidden" name="user_id" value="<?= $user['id'] ?>">
							<input class="btn btn-primary" type="submit" value="Comment">
						</form>
					</div> 
<?php   }
	  } ?>
				</div> <!-- whole message area -->
			</div> <!-- row -->
</div>

<?php $this->load->view('partials/footer') ?>