<!-- app/views/user_list.php -->
<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
</head>
<body>
    <h1>User List</h1>
    <?php foreach ($users as $user){
         foreach($user as $key=>$value)
         {
             echo $key.":".$value."<br>";
         }?> 
          <form method="post" action="index.php?action=updateUser&id=<?php echo $user['id'];?>">
          <input type="text" name="username" value=<?php echo $user['username'];?>>
       <input type="password" name="password" value=<?php echo $user['password'];?>>
           <button type="submit" value="update">update User</button>
             <br>
     </form>
    <form method="POST" action="index.php?action=DeleteUser&id=<?php echo $user['id'];?>">
    <button type="submit" value="delet">Delete User</button>
        </form>
          
     <?php    
    } ?>
    <ul>
    
        <?php foreach ($users as $user){ ?>
            <li><?= $user['username']; ?></li>
        <?php } ?>
    </ul>

    <h2>Add User</h2>
    <form method="post" action="index.php?action=addUser">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="password" required>
        <button type="submit">Add User</button>
    </form>
</body>
</html>
