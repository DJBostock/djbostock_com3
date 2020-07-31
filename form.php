<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php var_dump($_POST); ?>

    <h1>New Entry</h1>
    <form action="form.php" method="post">
        <input type="text" name="user_name">
        <input type="password" name="user_password">
        <button>Send</button>
    </form>
</body>

</html>