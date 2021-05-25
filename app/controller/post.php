<?php
class Post extends Controller
{
	public function index()
	{
		$post_model = $this->model("post_model");
		$all_post = $post_model->allPost();
		$context = [
			"posts" => $all_post,
		];

		$this->render_view("home/post-detail", $context);
	}

	public function article($id)
	{
		//htmlspecialchars();
		$post_model = $this->model("post_model");
		$post = $post_model->singlePost($id);
		$totalComments = count($post_model->getComments($id));
		$context = [
			"post" => $post,
			"totalComment" => $totalComments,
		];

		$this->render_view("home/post-detail", $context);
	}

	public function comment()
	{
		
		if(isset($_POST['comment_btn']))
		{
			if(empty(trim($_POST["comment"]))){
				$errors['comment'] = "Please enter an Comment";     
			}else{
	
				$comment = trim($_POST["comment"]);
			}


			if(empty($errors))
			{
				$post_model = $this->model("post_model");
				$result = $post_model->addComment($_POST['post_id'], $_POST['user_id'], $comment);
				
				if($result !== false)
				{
					$comments = $post_model->getComments($_POST['post_id']);

					$_SESSION['comments'] = $comments;
					header("location: ".site_url('post/article/'.$_POST['post_id'])."#comment-form");
				}
				else
				{
					
				}
			}
			else
			{
				
				$_SESSION['errors'] = $errors;
				header("location: ".site_url('post/article/'.$_POST['post_id'])."#comment-form");
			}


		}
	}
}