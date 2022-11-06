<?php


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];


$errors = [
    'firstnameError' => '',
    'lastnameError' => '',
    'emailError' => '',
];

if (isset($_POST['submit'])){  

    


    
    //fname
    if(empty($firstname)){
        $errors['firstnameError'] = 'First name empty'; 
    }

    //lname
    if(empty($lastname)){
        $errors['lastnameError'] = 'Last name empty'; 
    }

    //cemail
    if(empty($email)){
        $errors['emailError'] = 'email empty'; 
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['emailError'] = 'uncorrcet email';   
    }
    
    //non cemail
    if(!array_filter($errors)){
        $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
        $lastname =  mysqli_real_escape_string($conn, $_POST['lastname']);
        $email  =     mysqli_real_escape_string($conn, $_POST['email']);

        $sql = "INSERT INTO users(firstname, lastname, email) 
            VALUES('$firstname', '$lastname', '$email')";
        

        
        if(mysqli_query($conn, $sql)){
            header('Location: ' .  $_SERVER['PHP_SELF']);

    }else{
        echo'Error: '  . mysqli_error($conn);    
      }
    
    }

}