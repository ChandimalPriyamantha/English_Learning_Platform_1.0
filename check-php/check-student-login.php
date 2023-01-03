<?php 
session_start();
include 'connection.php';

if(isset($_POST['email']) && isset($_POST['password'])
 && isset($_POST['teacher_email'])){

   

   
    function test_input($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    
    $username = test_input($_POST['email']);
    $password = test_input($_POST['password']);
    
    $_SESSION['TID'] = test_input($_POST['teacher_email']);
    $Teacher_ID = $_SESSION['TID'];
    
    $role = 'user';

    if (empty($username)){
      header("Location: ../student-loging.php?error=Email is Required");
      exit();
    }else if(empty($password)){
      header("Location: ../student-loging.php?error=Password is Required");
      exit();
    }else if(empty($Teacher_ID)){
        header("Location: ../student-loging.php?error=Teacher ID is Required");
    }else{
         // hashing the password
      $pass = md5($password);

      $sql = "SELECT * FROM user_details WHERE Email='$username' AND Password='$pass' AND User_Type='$role'";

      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
              if ($row['Email'] === $username && $row['Password'] === $pass && $row['User_Type'] === $role) {
                if($row['User_Type']==='user'){

                  $_SESSION['user_name'] = $row['Email'];
                  $_SESSION['address'] = $row['Address'];
                  $_SESSION['name'] = $row['Name'];
                  $_SESSION['id'] = $row['ID'];
                 
                  header("Location: ../student.php");
                  exit();


                }else{

                 
                  $_SESSION['address'] = $row['Address'];
                  $_SESSION['name'] = $row['Name'];
                  $_SESSION['id'] = $row['ID'];
                  $_SESSION['user_type']=$row['User_Type'];
                  $_SESSION['email_id'] = $row['Email'];
                  header("Location: ../admin/admin.php");
                  exit();


                }
                
              }else{
          header("Location: ../student-loging.php?error=Incorect User name or password or User Type");
              exit();
        }
      }else{
        header("Location: ../student-loging.php?error=Incorect User name or password or User Type");
            exit();
      }
    }

 }else{

    header("Location: ../student-loging.php");
 }
