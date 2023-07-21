<?php require_once '58_connection.php' ?>

<script>
function confirmDelete(){
    return confirm('are you sure you want to delete');
}
</script>

<form action="63_search.php" method="get">
    <input type="text" name="searchText">
    <input type="submit" name="submit" value="search">
</form>

<table border="1">
    <th>ID</th>
    <th>EMAIL</th>
    <th>PASSWORD</th>  
    <th>UPDATE</th>   
    <th>DELETE</th>         

<?php
    
if(empty($_GET['searchText'])){
    $search = "SELECT * FROM users";
}else{
    $search = "SELECT * FROM users WHERE email LIKE '%{$_GET['searchText']}%' or id LIKE '%{$_GET['searchText']}%'";
}

$result = mysqli_query($connection,$search);

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
}else{
    echo 'not found';
}
?>

</table>