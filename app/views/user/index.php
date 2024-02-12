<?php 
if(isset($data['result'])) {
    $user = $data['result'];

    echo "User ID: " . $user[0]['id'] . "<br>";
    echo "Username: " . $user[0]['username'] . "<br>";
    echo "Email: " . $user[0]['email'] . "<br>";
} else {
    echo "User not found.";
}
?>
