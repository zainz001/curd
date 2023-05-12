<?php
 session_start();
 include('dbconnect.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if (isset($_SESSION['message'])) :?>
        <h5><?php $_SESSION['message']?></h5>
        <?php endif;?>
    <h3>curd operation <a href="addstudent.php">add student</a></h3>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>username</th>
                <th>email</th>
                <th>phone</th>
                <th>course</th>
                <th>edit</th>
            </tr>
        </thead>
            <tbody>
                <?php 
                $query= "SELECT * from students";
                $statement=$conn->prepare($query);
                $statement-> execute();

                $result=$statement->fetchall();
                if ($result) {
                    foreach($result as $row)
                    {
                        ?>
                        <tr>
                            <td><?= $row['id'];?> </td>
                            <td><?= $row['username'];?> </td>
                            <td><?= $row['email'];?> </td>
                            <td><?= $row['phone'];?> </td>
                            <td><?= $row['course'];?> </td>
                            <td>
                                <a href="edit.php?id=<?=$row['id'];?>">edit</a>
                            </td>
                        </tr>
                        <?php
                    }
                }
                else {
                    ?>
                        <tr >
                            <td colspan="5">no record found</td>
                           
                        </tr>
                    <?php
                }
?>
            </tbody>
    </table>
</body>
</html>