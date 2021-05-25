<?php
class Home extends Controller
{
	public function index()
	{
		$post_model = $this->model("post_model");
		$all_post = $post_model->allPost();
		
		$context = [
			"posts" => $all_post,

		];

		$this->render_view("home/index", $context);
	}
}