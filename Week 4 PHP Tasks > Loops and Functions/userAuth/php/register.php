<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);

}

function registerUser($username, $email, $password){
    //save data into the file
    
    $file = fopen("./storage/users.csv", 'w');
    $content = [$username, $email, $password];
    fputcsv($file, $content);
    
    fclose($file);
    
    echo "User Successfully registered";
}
echo "HANDLE THIS PAGE";


