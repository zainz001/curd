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
    <title>add</title>
</head>

<body>

    <h3> add student into curd operation<a href="index.php">back</a></h3>
    
    <form action="code.php" method="post">
    
    <label >username</label>
    <input type="text" name="username" class="formcontrol">
    <br>
    <label >email</label>
    <input type="text" name="email"  class="formcontrol">
    <br>    
    <label >phone</label>
    <input type="text" name="phone"  class="formcontrol">
    <br>
    <label >course</label>
    <input type="text" name="course"  class="formcontrol">
    <br>
    <button type="submit" name="save_student_button">save button</button>
</form>

    </div>
    </div>
</body>

</html>