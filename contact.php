<?php

 if(isset($_POST['name'])){
$insert = false;


    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";


        // Create a database connection
        $con = mysqli_connect($server, $username, $password);


             Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
     echo "Success connecting to the db";



         //Collect post variables
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $desc = $_POST['desc'];


        $sql = "INSERT INTO `cws`.`web` ( `Name`, `Age`, `Gender`, `E-mail`, `Phone`, `Other`, `DT`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";


     //Execute the query
    if($con->query($sql) == true){
         echo "Successfully inserted";

         //Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }


    
     //Close the database connection
    $con->close();

}
?>



<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact me!</title>
    <link href="https:cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<style>

*{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    
font-family: 'Roboto', sans-serif;
}

.container{
    max-width: 80%; 
    padding: 34px; 
    margin: auto;
}

.container h1 {
    text-align: center;
    font-family: 'Sriracha', cursive;
    font-size: 40px;
}

p{
    font-size: 17px;
    text-align: center;
    font-family: 'Sriracha', cursive;
}

input, textarea{
    
    border: 2px solid black;
    border-radius: 6px;
    outline: none;
    font-size: 16px;
    width: 80%;
    margin: 11px 0px;
    padding: 7px;
}
form{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}


.bg{
    width: 100%;
    position: absolute;
    z-index: -1;
    opacity: 0.6;
}
.submitMsg{ 
    color: green;
}

.alert{
    background-color: lightgreen;
}

</style>

</head>
<body>
<script src="https:cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>


<!-- BOOTSTRPA ALERT -->
<div class="alert alert-sucess alert-dismissible fade show" role="alert"  style="display:none">
  <strong>Submitted successfully!</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"  ></button>
</div>

<!-- BOOTSTRPA ALERT END -->

   <h1>Contact me!</h1>
    <br>


<form action="contact.php">

<input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn btn-danger ">Submit</button> 

</form>


</body>
</html>
