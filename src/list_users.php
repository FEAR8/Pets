<?php require('../config/database.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets | List users</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <center><h1>LIST USERS</h1></center>

    <table class="table table-striped">
    <?php   
    $query_users = "
    SELECT 
        id,
        fullname,
        email,
        CASE WHEN  status = true THEN 'Active' ELSE 'Inactive' END as status 
    FROM 
    users
    ";
    $result = pg_query($conn, $query_users); 
    while($row = pg_fetch_assoc($result)){
        echo "<tr>";
            echo "<td>". $row['fullname'] ."</td>";
            echo "<td>". $row['email'] ."</td>";
            echo "<td>". $row['status'] ."</td>";
            echo "<td><img src='photos/default.png.png' width='50'></td>";
            echo "<td>
            <a href='delete_user.php?id=". $row['id'] ."'><img src='icons/delete.png.png' width='30'></a>
                <a href='#'><img src='icons/update.png.png' width='30'></a>
            </td>";
        echo "</tr>";
    }
        ?>
    </table>

</body>
</html>
</body>
</html>