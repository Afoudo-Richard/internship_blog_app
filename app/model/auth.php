<?php
    class Auth extends Model {
        public function login($name,$password)
		{
			$sql="SELECT l_name FROM tbl_landlord where l_name='$name' or l_email='$name'";
			$query = $this->query($sql);
			$num = $this->num_rows($query);
            if ($num == 1)
            {
                $sql1 = "SELECT * FROM tbl_landlord WHERE (l_name='$name' or l_email='$name') and l_password='$password'";
                $query=$this->query($sql1);
                $row = mysqli_fetch_array($query);
                if($row)
                {
                	$_SESSION['auth'] = "yes";
            		$_SESSION['lname'] = $row['l_name'];
            		$_SESSION['lid'] = $row['l_id'];
            		$_SESSION['lemail'] = $row['l_email'];
            		$_SESSION['lphone'] = $row['l_phone'];
            		$_SESSION['lgender'] = $row['l_gender'];
                	return 1;
                }
                else
                 {
                 	return 2;
                }
            }
            elseif ($num==0){
            	return 3;
            }
		}

        public function logout()
		{
			if(isset($_SESSION['lname']))
			{
				unset(
				$_SESSION['auth'],
				$_SESSION['lname'],
				$_SESSION['lid'],
				$_SESSION['lemail'] ,
				$_SESSION['lphone'] ,
				$_SESSION['lgender']
				);
			}
			if(!isset($_SESSION['lname']))
			{
				return 1;
			}
			else
			{
				return 2;
			}
		}

		public function loginAuth($email, $password)
		{
			$data = [];
			$sql="SELECT * FROM user where email='$email'";
			$result = $this->query($sql);
			$data = mysqli_fetch_array($result,MYSQLI_ASSOC);

			if(!empty($data)){
				if(password_verify($password, $data['password'])){
					return $data;
				}
			}
			var_dump($data);	
			
			return false;
			

		}

		public function validate_unique_email($email)
		{
			$sql="SELECT email FROM user where email='$email'";
			$result = $this->query($sql);
			$num = $this->num_rows($result);
			if($num == 1){
				return false;
			}
			return true;
		}

		public function addUser($firstName, $lastName, $email, $password){
			$sql="INSERT INTO `user`(`user_id`, `firstName`, `lastName`, `email`, `password`) VALUES (NULL,'$firstName', '$lastName', '$email', '$password')";

			$result = $this->query($sql);

			return $result;
		}
    }