<?php
    session_start();
     $user=$_POST['user'];
     $pass=$_POST['pass'];
     if ($user=='Piku' && $pass='Impossible')
     {
     	$_SESSION['authentication']=true;
     	header("location:./main.php");

     }
     else if($user=='piku' && $pass='impossible')
     {
     		$_SESSION['authentication']=true;
     		header("location:./main.php");	
     }
     else if($user=='PIKU' && $pass='IMPOSSIBLE')
     {
     		$_SESSION['authentication']=true;
     		header("location:./main.php");	
     }
     else
     {
     		$_SESSION['authentication']=false;
     		header("location:../index.php");
     }
     



 ?>
