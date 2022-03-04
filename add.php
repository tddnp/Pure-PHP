<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    include_once "src/User.php";
    include_once "src/UserManager.php";

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $address = $_REQUEST['address'];

    $data = [
        'name' => $name,
        'email' => $email,
        'address' => $address
    ];

    $userManager = new UserManager('data.json');
    $userManager->add($data);

    header('location: index.php');

}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name="address"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit">Add</button></td>
        </tr>
    </table>
</form>
</body>
</html>
