<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


//this is for the login db interaction
class Wall extends CI_Model {

//GET USER WALL W/ MESSAGES
	public function get_user($id)
	{
		$user = $this->db->query("SELECT * FROM users WHERE id = $id")->row_array();
		$messages = $this->db->query("SELECT users.id, messages.id as message_id, messages.message, messages.created_at AS message_date, authors.first_name AS author_name, authors.last_name AS author_lastname
										FROM  messages
										LEFT JOIN users ON users.id = messages.user_id
										LEFT JOIN users AS authors ON messages.author_id = authors.id
										WHERE users.id = $id;")->result_array();
		$comments = $this->db->query("SELECT *, comment, comments.created_at AS comment_date, comments.user_id AS comment_author, users.first_name AS author_name, users.last_name AS author_lastname 
										FROM comments
										LEFT JOIN messages ON comments.message_id = messages.id
										LEFT JOIN users ON comments.user_id = users.id
										WHERE messages.user_id = $id")->result_array();
		return array('user' => $user, 'messages' => $messages, 'comments' => $comments);
	}

	public function add_message($post)
	{
		$query = "INSERT INTO messages (message, user_id, author_id, created_at, updated_at) VALUES (?,?,?,NOW(),NOW())";
		$values = array($post['message'], $post['user_id'], $this->session->userdata('id'));
		return $this->db->query($query, $values);
	}

	public function add_comment($post)
	{
		$query = "INSERT INTO comments (comment, message_id, user_id, created_at, updated_at) VALUES (?,?,?,NOW(),NOW())";
		$values = array($post['comment'], $post['message_id'], $this->session->userdata('id'));
		return $this->db->query($query, $values);
	}

}