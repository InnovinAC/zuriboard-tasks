<?php
session_start();
logout();
function logout(){
    /*
Check if the existing user has a session
if it does
destroy the session and redirect to login page
*/
    // if user is logged in
    if($_SESSION['username']) {
        session_unset();
        session_destroy();
        
        // redirect
        header('location: login.php');
    }
    
    // otherwise just redirect to login page
    else {
        
        header('location: login.php')
            
        }
}

echo "HANDLE THIS PAGE";
