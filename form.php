<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        var_dump($_POST);
    }
    ?>

    <h1>New Entry</h1>
    <form action="form.php" method="post">
        <div>
            <label for="user_name">User Name:</label>
            <input type="text" name="user_name">
        </div>
        <div>
            <label for="user_email">Email:</label>
            <input type="email" name="user_email">
        </div>
        <div>
            <label for="user_password">Password:</label>
            <input type="password" name="user_password">
        </div>
        <button>Send</button>
    </form>
</body>

</html>