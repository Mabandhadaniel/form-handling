


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Users</title>
</head>
<body>
    <h3>View Users</h3>
    <hr>

    <?php
require_once "./conn.php";
?>


<?php echo "Brian"?>
<?= "Brian"?>

    <?php
    $data = "SELECT * FROM users";
    $result = mysqli_query( $con,$data);
    if(mysqli_num_rows($result) >0){?>
<table>
    <thead>
<tr>
    <th>id</th>
    <th>username</th>
    <th>email</th>
    <th>created_on</th>
</tr>
</thead>

   <tbody>
    <?php
     while($row = mysqli_fetch_assoc($result)){?>
      <tr>
         <td><?php echo $row['id'] ?></td>
         <td><?php echo $row['username'] ?></td>
         <td><?php echo $row['password'] ?></td>
         <td><?php echo $row['created_on'] ?></td>
      </tr>
      
   </tbody>
     </table>
     ?>
     <?php
        {
         echo "No data found";
     }
?>
</body>
</html>

