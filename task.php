<?php 

	if ($_SERVER['REQUEST_METHOD'] === "POST") 
	{

		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];

		$email = $_POST['email'];
		$mobilenumber = $_POST['mobilenumber'];

		$country = $_POST['country'];



		if (empty($firstname) or empty($lastname) or  empty($email) or empty($mobilenumber) or empty($country) ) {
			echo "Please fill Login the form properly!!!";
		}
		else 
		{
			echo "Login Successful";
		}

	}

	else {

		echo "Login unsuccessful";
	}
?>
