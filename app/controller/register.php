<?php
class Register extends Controller
{
	public function index()
	{
		$this->render_view("home/register");
	}

	public function registerUser()
	{
		$errors = [];
		$firstName = $lastName = $email = $password = $confirm_password = "";

		if ($_SERVER['REQUEST_METHOD'] == "POST")
		{
			// Validate firstName
			if(empty(trim($_POST["firstName"]))){
				$errors['firstName'] = "Please enter a First Name.";     
			}else{
				$firstName = trim($_POST["firstName"]);
			}

			// Validate lastName
			if(empty(trim($_POST["lastName"]))){
				$errors['lastName'] = "Please enter a Last Name.";     
			}else{
				$lastName = trim($_POST["lastName"]);
			}

			// Validate email. It must be unique
			if(empty(trim($_POST["email"]))){
				$errors['email'] = "Please enter an Email";     
			}else{
				$auth = $this->model("auth");
				$result = $auth->validate_unique_email($_POST["email"]);
				if(!$result){
					$errors['email'] = "This email is already taken";
				}

				$email = trim($_POST["email"]);
			}

			 // Validate password
			if(empty(trim($_POST["password"]))){
				$errors['password'] = "Please enter a password.";     
			} elseif(strlen(trim($_POST["password"])) < 6){
				$errors['password'] = "Password must have atleast 6 characters.";
			} else{
				$password = trim($_POST["password"]);
			}

			 // Validate confirm password
			 if(empty(trim($_POST["confirm_password"]))){
				$errors['password'] = "Please confirm password.";     
			}else{
				$confirm_password = trim($_POST["confirm_password"]);
				if(empty($errors['password']) && ($password != $confirm_password)){
					$errors['confirm_password'] = "Password did not Match";
				}
			}

			if(empty($errors))
			{
				// insert into the database
				$auth = $this->model("auth");

				// hash user password
				$password = password_hash($password, PASSWORD_DEFAULT);

				$result = $auth->addUser($firstName, $lastName, $email, $password);

				if($result){
					header("location: ".site_url('login'));
					die();
				}
				else
				{
					echo "Oops! something went wrong. Please try again.";
				}
			}
			else
			{
				$context = [
					'errors' => $errors
				];

				$this->render_view("home/register", $context);
			}

		}

	}
}