<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

loginUser($email, $password);
    
    
}

function loginUser($email, $password){
    /*
        Finish this function to check if username and password 
    from file match that which is passed from the form
    */
    
    $file = fopen('../storage/users.csv', 'r');
    $user_details = fgetcsv($file);
    if($username == $user_details[1] && $username == $user_details[2]) {
        $_SESSION['username'] = $username;
        header('location: ./dashboard.php');
    }
    
    else {
        header('location: login.php');
        
    }
}

echo "HANDLE THIS PAGE";

