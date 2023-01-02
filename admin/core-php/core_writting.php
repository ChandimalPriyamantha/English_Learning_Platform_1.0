<?php
session_start();
include '../../check-php/connection.php';

if(isset($_POST['writting_task']) && isset($_POST['date'])
 && isset($_POST['time'])){



    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

    $task = test_input($_POST['writting_task']);
    $date = test_input($_POST['date']);
    $time = test_input($_POST['time']);

    if(empty($task)){
        header("Location: ../writting.php?error=Task is required.");
    }elseif(empty($date)){
        header("Location: ../writting.php?error=Due Date is required.");
    }elseif(empty($time)){
        header("Location: ../writting.php?error=Time is required.");
    }else{
        header("Location: ../writting.php?success=Task was created sucessfully.");
    }
    

    
    //header("Location: ../writting.php");
   


 }else{
    header("Location: ../../index.php");
 }



?>
