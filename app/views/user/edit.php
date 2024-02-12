<?php 
if(isset($data['user'])) {
    $user = $data['user'];
}
?>
<form action="/MVC/public/user/editUser" method="POST">
    <input type="text" value="<?php echo $user[0]['id']?>" name="id">
    <div>
        <label>Name:</label>
        <input type="text" value="<?php echo $user[0]['username']?>" name="username">
    </div>
    <div>
        <label>Email:</label>
        <input type="text" value="<?php echo $user[0]['email']?>" name="email">
    </div>
    <div>
        <label>Password:</label>
        <input type="password" value="<?php echo $user[0]['password']?>" name="password">
    </div>
    <button>Update</button>
</form>