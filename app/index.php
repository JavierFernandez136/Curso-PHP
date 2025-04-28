<?php 
 include 'includes/header.php';
$users = mysqli_query($db,"SELECT * FROM users");
?>
<table class="table">
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
        <th>Ver/Editar</th>
    </tr>
    <?php 
    while($user = mysqli_fetch_assoc($users)){ ?>
    <tr>
        <td><?=$user["name"]?></td>
        <td><?=$user["surname"]?></td>
        <td><?=$user["email"]?></td>
        <td>
            <a href="ver.php?id=<?=$user["user_id"]?>" class="btn btn-success">Ver</a>
            <a href="editar.php?id=<?=$user["user_id"]?>" class="btn btn-warning">Editar</a>
        </td>
    </tr>
<?php }; ?>
    
</table>

<?php 
 include 'includes/footer.php';
?>