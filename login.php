<?php
session_start();
$servername = "localhost";
$username = "id3544521_db";
$password = "12345";
$dbname = "id3544521_db";


try{
	$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);


f(!empty($_POST['email']) && !empty($_POST['password'])):
	
	$records = $conn->prepare('SELECT email,password FROM db WHERE email = :email');
	$records->bindParam(':email', $_POST['email']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);
	$message = '';
	if(count($results) > 0 && password_verify($_POST['password'], $results['password']) ){
		$_SESSION['user_id'] = $results['id'];
		$string = file_get_contents("posts.json");
	$jsonRS = json_decode ($string,true);
	foreach ($jsonRS as $rs) {
  	echo stripslashes($rs["name"])." ";
  	echo stripslashes($rs["email"])." ";
  	echo stripslashes($rs["dob"])." ";
  	echo stripslashes($rs["degree"])." ";
  	echo stripslashes($rs["skills"])." ";
  	echo stripslashes($rs["address"])." ";
  	;
	} else {
		$message = 'Sorry, those credentials do not match';
	}
endif;


}
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}
