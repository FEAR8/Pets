<?php require ('../config/database.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Pets | List Users</title>
</head>
<body>
<center>
    <h1>List Users</h1>
</center>
<table class="table table-striped">
    <tr><th>Fullname</th>
    <th>Email</th>
    <th>Status</th>
    <th>Foto</th>
    <th>...</th>
    <th>ID</th>
</tr>
<?php
$query_users = "
SELECT
id,
fullname,
email,
CASE 
WHEN status = true THEN 'Active' ELSE 'Inactive' 
END as status 
FROM
 users
";
$result = pg_query($conn,$query_users);
while($row = pg_fetch_assoc($result)){

echo "<tr>";
    echo "<td>". $row['fullname'] ."</td>";
    echo "<td>". $row['email'] ."</td>";
    echo "<td>". $row['status'] ."</td>";
    echo "<td><img src='photos/default.png.png' width='30'></td>";
    echo "<td>
     <a href='#'><img src= 'icons/update.png.png' width='30'></a>
     <a href='delete_user.php'><img src='icons/delete.png.png' width='30'></a>
     </td>";
     echo "<td>". $row['id'] ."</td>;
</tr>";
}
?>
<?php
$select = "select * from database.php";
$query = mysqli_query($conection,$select);
?>

</table>
</body>
</html>