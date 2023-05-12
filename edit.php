<?php
include('dbconnect.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <a href=""></a>
    <title>ediit </title>
</head>

<body>

    <h3> edit student into curd operation<a href="index.php">back</a></h3>
    <?php
    if (isset($_GET['id'])) {
        $stu_id=$_GET ['id'];
        $query= "SELECT * from students where id=:stu_id LIMIT 1" ;
        $statement= $conn->prepare($query);
        $data=[':stu_id'=>$stu_id];
        $statement->execute($data);
       $result= $statement-> fetch(PDO::FETCH_ASSOC);
    }
    ?>
    <form action="code.php" method="post">
    
    <label >username</label>
    <input type="text" name="username" value="<?=$result['username'];?>" class="formcontrol">
    <br>
    <label >email</label>
    <input type="text" name="email" value="<?=$result['email'];?>" class="formcontrol">
    <br>    
    <label >phone</label>
    <input type="text" name="phone"value="<?=$result['phone'];?>"  class="formcontrol">
    <br>
    <label >course</label>
    <input type="text" name="course"value="<?=$result['course'];?>"  class="formcontrol">
    <br>
    <button type="submit" name="update_student_button">update button</button>
</form>

    </div>
    </div>
</body>

</html>