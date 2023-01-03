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

    $task_details = test_input($_POST['writting_task']);
    $due_date = test_input($_POST['date']);
    $due_time = test_input($_POST['time']);
    $email_id = $_SESSION['email_id'];
    
    $current_date_time = date('d-m-y h:i:s');

    if(empty($task_details)){
        header("Location: ../writting.php?error=Task is required.");
    }elseif(empty($due_date)){
        header("Location: ../writting.php?error=Due Date is required.");
    }elseif(empty($due_time)){
        header("Location: ../writting.php?error=Time is required.");
    }else{

        $sql = "INSERT INTO wrtting_task (
        Email_ID, 
        Task_Details, 
        Created_date_time,
        Due_date, 
        Due_time,
        State) VALUES (
        '$email_id',
        '$task_details',
        '$current_date_time',
        '$due_date',
        '$due_time','Deactive')";

        $result = mysqli_query($conn,$sql);
        if($result){
            header("Location: ../writting.php?success=Task was created sucessfully.");

        }else{
            $error =  mysqli_error($conn);
            header("Location: ../writting.php?error=$error"); 
        }
       
    }
    

    
    //header("Location: ../writting.php");
   


 }else{
    header("Location: ../../index.php");
 }



?>
