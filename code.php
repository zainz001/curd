<?php
session_start();
include('dbconnect.php');

if (isset($_POST['delete']))
{
$stu_id=$_POST['delete'];
try {
    $query="DELETE from students where id=:stu_id";
    $statement=$conn->prepare($query);
    $data=[
        '$stu_id'=>$stu_id
    ];
    
} catch (PDOException $e) {
    echo $e->getMessage();
}    
}

try {

if (isset($_POST['update_student_button'])) {
    $stu_id=$_POST['stu_id'];
    $username =$_POST['username'];
    $email =$_POST['email'];
    $phone =$_POST['phone'];
    $course =$_POST['course'];

        $query ="UPDATE students set username=:username, email=:email, phone=:phone, course=:course where id=:stu_id";
        $statement = $conn->prepare($query);
        
        $data =[
        
            ':username'=>$username,
            ':email'=>$email,
            ':phone'=>$phone,
            ':course'=>$course,
            ':stu_id'=>$stu_id,
            
        ];
 
        $query_execute=$statement->execute($data);
        if ($query_execute) {
            $_SESSION['Message']= "update successfully";
            header('location:index.php');
            exit(0);   
           } else {
               $_SESSION['Message']= "value incorrect";
            header('location:index.php');
            exit(0);
           }
           
    }
}
catch (PDOexception $e) {
   echo $e->getmessage();
}

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