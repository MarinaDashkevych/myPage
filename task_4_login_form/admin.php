<?php

// here needs to check if user already logged
session_start();

if (!isset($_SESSION['email'])) {
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>l9 tasks</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h2>Welcome to the admin area</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A amet aperiam cupiditate, deleniti dolorem hic
        laboriosam laborum odio officiis placeat praesentium quidem ut, vero, voluptate voluptatem. Alias aliquam
        at consequatur dicta, dolor earum expedita impedit libero mollitia natus nobis numquam officiis, quam quisquam
        quo quod reiciendis similique sit suscipit vel? Ab accusantium architecto atque aut corporis, deserunt dolor
        eligendi enim explicabo harum hic iusto, magnam natus nihil
        nobis numquam omnis perspiciatis possimus praesentium quas quasi quia quisquam, quos recusandae reiciendis
        reprehenderit sit soluta suscipit totam voluptatem. Aliquam aliquid asperiores dolorem et ex illum magnam natus
        reiciendis, reprehenderit sequi suscipit voluptates?</p>

</div>

<div>
    <a href="logout.php" class="btn btn-danger">Logout</a>
</div>

</body>
</html>