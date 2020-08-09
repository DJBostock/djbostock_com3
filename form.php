<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        form>div {
            margin-bottom: 10px;
        }
    </style>
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
            <input type="text" name="user_name" id="user_name">
        </div>
        <div>
            <label for="user_email">Email:</label>
            <input type="email" name="user_email" id="user_email">
        </div>
        <div>
            <label for="user_password">Password:</label>
            <input type="password" name="user_password" id="user_password">
        </div>
        <div>
            <label for="user_message">Message:</label>
            <textarea name="user_message" id="user_message"></textarea>
        </div>
        <div>
            <label for="user_select">Character Race:</label>
            <select name="user_select" id="user_select">
                <option value="human">Human</option>
                <option value="elf">Elf</option>
                <option value="dwarf">Dwarf</option>
            </select>
        </div>
        <div>
            <label for="user_checkbox">User Checkbox:</label>
            <input type="checkbox" name="user_checkbox" value="yes" id="user_checkbox">
        </div>
        <div>
            <p>Pick a color:</p>
            <label><input type="radio" value="red" name="user_color">Red</label>
            <label><input type="radio" value="blue" name="user_color">Blue</label>
            <label><input type="radio" value="green" name="user_color">Green</label>
        </div>
        <button>Send</button>
    </form>
</body>

</html>