<<?php 
	//connect to database
	$db = mysqli_connect('localhost', 'root', '', 'adm')
	

	//add some user with kind book
	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$book = $_POST['book'];

		$query = mysqli_query('SELECT * FROM info (name, book) VALUES ($name, $book) ')
		header('location: index.php') //location retreice
	}
	
 ?>