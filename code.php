<?php
session_start();
include('dbconnect.php');

if(isset($_POST['save_student_button']))
{
   
    $username =$_POST['username'];
    $email =$_POST['email'];
    $phone =$_POST['phone'];
    $course =$_POST['course'];

    $query = "INSERT INTO students(username ,email, phone, course) VALUES (:username,:email,:phone, :course)";



    $query_run = $conn->prepare($query);

    $data =[
        
        ':username'=>$username,
        ':email'=>$email,
        ':phone'=>$phone,
        ':course'=>$course,

    ];
    $query_execute= $query_run->execute($data);
if ($query_execute) {
 $_SESSION['Message']= "inserted successfully";
 header('location:index.php');
 exit(0);   
} else {
    $_SESSION['Message']= "not inserted successfully";
 header('location:index.php');
 exit(0);
}


}

?>