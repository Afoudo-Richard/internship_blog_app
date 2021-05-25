<?php

	class Model
	{
	
		protected $conn;
		private $hostname='localhost';
		private $username='root';
		private $password='';
		private $database='internship_blog';

		public function __construct(){
				
			$this->conn=mysqli_connect($this->hostname,$this->username,$this->password,$this->database) or die('Database connection error');
			//$this->conn=mysqli_connect('localhost', 'root', '', 't-manager');	
		}
		
		private function execute_query($sql_stmt)
		{
		    $result = mysqli_query($this->conn,$sql_stmt);
		    return $result ? true:false;
        }
		
        public function select($sql_stmt)
        {
		    $result=mysqli_query($this->conn, $sql_stmt);
		    $rows=mysqli_num_rows($result);
		    if($rows>0){
		    	$data=array();
		        while($row=mysqli_fetch_array($result))
				{
		            $data[]=$row;
                }
                return $data;
            }
        }
        public function query($sql_stmt)
        {
        	$result=mysqli_query($this->conn, $sql_stmt) or die("Unable to execute query".$sql_stmt);
        	return $result;
        }
        public function num_rows($query)
        {
        	$num = mysqli_num_rows($query);
        	return $num;
        }

        public function insert($sql_stmt)
        {
		    return $this->execute_query($sql_stmt);
        }

        public function update($sql_stmt)
        {
            return $this->execute_query($sql_stmt);
        }	

	}