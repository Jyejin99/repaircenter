<?php 
   if(!isset($_SESSION)) { 
       session_start(); 

       if(isset($_SESSION["useremail"]))
       $useremail = $_SESSION["useremail"];
     else{
       $userid="";
     }
    } 
?>