<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $title ?></title>
        <meta http-equiv="Content-TYpe" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
    </head>
    <body>
        <button onclick="this.innerHTML = Date()">The time is?</button>
        <form method="POST" action="">
            <p><?php echo $message ?></p>
            <p>
                <label for="username">Username : </label>
                <input type="text" name="username" value="" placeholder="Enter username">
                <label for="password"></label>
                <input type="password" name="password" value="" placeholder="*******">
                <input type="submit" name="submit_login" value="Login">
            </p>
        </form>
    </body>
</html>