<?php
class login extends Controller
{
	public function index()
	{
		$this->render_view("home/login");
	}

	public function loginAuth()
	{
		$errors = [];
		$email = $password = "";

		if($_SERVER['REQUEST_METHOD'] == "POST")
		{
			//validate email
			if(empty(trim($_POST["email"]))){
				$errors['email'] = "Please enter an Email";     
			}else{
	
				$email = trim($_POST["email"]);
			}

			 // Validate password
			if(empty(trim($_POST["password"]))){
				$errors['password'] = "Please enter a password.";     
			}
			else
			{
				$password = trim($_POST["password"]);
			}
	
			if(empty($errors))
			{
				$auth = $this->model("auth");
				$result = $auth->loginAuth($email, $password);
				var_dump($result);
				if($result !== false)
				{
					
									
					// Store data in session variables
					$_SESSION["loggedin"] = true;
					$_SESSION["id"] = $result['user_id'];
					$_SESSION["firstName"] = $result['firstName'];
					$_SESSION['lastName'] = $result['lastName'];
					$_SESSION['email'] = $result['email'];

					header("location: ".site_url(''));
					die();
				}
				else
				{
					$errors['Error'] = "Invalid email or password";

					$context = [
						'errors' => $errors
					];
	
					$this->render_view("home/login", $context);
				}
			}
			else
			{
				$context = [
					'errors' => $errors
				];

				$this->render_view("home/login", $context);
			}
			
			
		}
		else
		{
			header("location:".site_url(''));
		}

		
	}

	public function end_session(){
		session_start();
 
		// Unset all of the session variables
		$_SESSION = array();
		
		// Destroy the session.
		session_destroy();
		
		// Redirect to login page
		header("location:".site_url('login'));
		exit;
	}

	private function hash($data)
	{
		$context = hash_init('md5', HASH_HMAC, "internship_blog");
		hash_update($context, $data);
		return hash_final($context);
	}

	public function sanitize_auth($email, $password)
	{
		$errors = [];
		$email = trim($email);
		$password = trim($password);
	}
}