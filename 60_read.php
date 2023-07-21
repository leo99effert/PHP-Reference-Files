<?php require_once '58_connection.php' ?>

<script>
function confirmDelete(){
    return confirm('are you sure you want to delete');
}
</script>

<table border="1">
    <th>ID</th>
    <th>EMAIL</th>
    <th>PASSWORD</th>  
    <th>UPDATE</th>   
    <th>DELETE</th>         

<?php

$read = "SELECT * FROM users";

$result = mysqli_query($connection,$read);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
?>
    <tr>
        <td><?= $row['id']?></td>
        <td><?= $row['email']?></td>
        <td><?= $row['password']?></td>
        <td><a href="61_update.php?id=<?= $row['id']?>">edit</a></td>
        <td><a href="62_delete.php?id=<?= $row['id']?>" onclick="return confirmDelete()">delete</a></td>
    </tr>
    
<?php
    }   
}
?>

</table>