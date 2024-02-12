<?php 
// if(isset($data['result'])) {
//     $user = $data['result'];

//     echo "User ID: " . $user[0]['id'] . "<br>";
//     echo "Username: " . $user[0]['username'] . "<br>";
//     echo "Email: " . $user[0]['email'] . "<br>";
// } else {
//     echo "User not found.";
// }
?>

<?php 
if(isset($data['result'])) {
    $users = $data['result'];

    foreach ($users as $user) {
        echo "User ID: " . $user['id'] . "<br>";
        echo "Username: " . $user['username'] . "<br>";
        echo "Email: " . $user['email'] . "<br>";
    }
} else {
    echo "No users found.";
}
?>
