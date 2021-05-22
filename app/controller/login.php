<?php
class login extends Controller
{
	public function index()
	{
		$this->render_view("home/login");
	}

	public function login_auth()
	{
		$email = $_POST['email'];
		$pswd = $_POST['password'];

		$auth = $this->model("auth");
		$auth->login_auth();
	}

	private function hash($data)
	{
		$context = hash_init('md5', HASH_HMAC, "internship_blog");
		hash_update($context, $data);
		return hash_final($context);
	}
}