<?php
$data = file_get_contents ("posts.json");
$posts= json_decode($data, true);
$post = json_decode($_POST['json']);
$posts[rand(1, 1000)] = $post;
$manage = json_encode($posts);
$myFile = "posts.json";
file_put_contents($myFile, $manage);





$connect = mysqli_connect("localhost", "id3544521_db", "12345", "id3544521_db"); 
  mysql_select_db("id3544521_db", $connect);
  
  
          $filename = "posts.json";
          $data = file_get_contents($filename); 
          $array = json_decode($data, true); 
           $name = $array['name'];
            $email = $array['email'];
           $password = $array['password'];
           $dob = $array['dob'];
           $degree = $array['degree'];
           $skills = $array['skills'];
           $adress = $array['address'];
           $query = "INSERT INTO tbl_data(name, email, password, dob, degree, skills, address) VALUES('$name', '$email', '$password', '$dob', '$degree', '$skills', '$address')"; 
           if(!mysql_query($query,$connect))
            { 
            die('Error : Query Not Executed. Please Fix the Issue! ' . mysql_error());
             } else{ 
             echo "Data Inserted Successully!!!";
              }


?>