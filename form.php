<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php var_dump($_GET); ?>

    <h1>New Entry</h1>
    <form action="form.php">
        <input type="text" name="user_input">
        <button>Send</button>
    </form>
</body>

</html>