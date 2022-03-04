<?php

include_once "src/User.php";
include_once "src/UserManager.php";

$userManager = new UserManager('data.json');
$users = $userManager->getAll();

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <a href="add.php">Add</a>
        <table border="0">
            <tr>
                <td>STT</td>
                <td>Name</td>
                <td>Email</td>
                <td>Address</td>
                <td></td>
            </tr>
            <?php foreach ($users as $key => $user) { ?>
                <tr>
                    <td><?php echo $key + 1; ?> </td>
                    <td><?php echo $user->getName(); ?> </td>
                    <td><?php echo $user->getEmail(); ?> </td>
                    <td><?php echo $user->getAddress(); ?> </td>
                    <td><a onclick="return confirm('are you sure?')" href="delete.php?id=<?php echo $key ?>">Delete</a></td>
                </tr>
            <?php } ?>
        </table>
    </div>

</body>

</html>