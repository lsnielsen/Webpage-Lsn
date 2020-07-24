<?php

	$con = mysqli_connect('127.0.0.1','root','');  
	  
	if(!$con)  
	{  
		echo 'not connect to the server';  
	}  
	if(!mysqli_select_db($con,'lsnDb'))  
	{  
		echo 'database not selected';  
	}  

	if (isset($_POST['Name']) && isset($_POST['Email'])) {
	  
		$name = $_POST['Name'];  
		$email = $_POST['Email'];   
		$sql = "INSERT INTO person (Id, Name,Email) VALUES (43,'$name','$email')";  
		  
		if(!mysqli_query($con,$sql))  
		{  
			echo 'Not inserted';  
		}  
		else  
		{  
			echo 'Data Inserted';  
		}  
	}
		
	//header("refresh:3; url=index.html") 
?>


<!DOCTYPE html>  
<html>  
    <head>  
        <title>  
            Forsøg på at skrive til databasen
        </title>  
      <style>  
          h1{  
              color: rebeccapurple;  
              font-family: fantasy;  
              font-style: italic;  
          }  
        </style>  
</head>  
<body>  
    <h1>Xampp Tutorial</h1>  
	<div>
		Using the 
		<a href="https://www.c-sharpcorner.com/article/install-and-configure-xampp-server-with-data-insert-into-database2/">
			Link
		</a>
    <hr>  
    <form action="setup.php" method="post">  
            <fieldset>  
                <legend>enter the details below</legend>  
                <label>Name</label><br><br>  
                <input type="text" placeholder="ex:john" name="Name">  
                <br><br>  
                  
                <label>Email</label><br><br>  
                <input type="email" placeholder="hello@gmail.com" name="Email" >  
                <br><br>  
                <input type="submit" value="dieselPage" name="dieselButton">  
            </fieldset>  
        </form>     
		<form action="setup.php" method="post">  
			<input type="submit" value="Tilbage"> 
        </form>  
    </body>  
</html> 