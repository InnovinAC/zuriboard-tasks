<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $newpassword = $_POST['password'];

    resetPassword($email, $password);
}

function resetPassword($email, $password){
    //open file and check if the username exist inside
    //if it does, replace the password
    
    $file = fopen('../storage/users.csv', 'w');
    $user_details = fgetcsv($file);
    $user_email = $user_details[1];
    $user_name = $user_details[0];
    if($email == $user_email) {
        $details = array($user_name, $email, $password);
        fputcsv($file, $details);   
    }
    
    else {
        echo "User does not exist";
    }
    
    
}
echo "HANDLE THIS PAGE";


