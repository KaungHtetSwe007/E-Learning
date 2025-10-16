<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/aminlogin.css">
    <title>Login Page</title>
</head>
<body>
    <nav>
        <div class="container">
            <div class="image">
                <img src="img/main.png" alt="">
            </div>
            <form action="admininsert.php" method="post">
                <div class="form-container">
                    <h1>Welcome Admin</h1>
                    <p>Please Login to continue</p>
                    <div class="inputs">
                        <input type="text" placeholder="Name" name="name">
                    </div>
                    <div class="inputs">
                        <input type="password" placeholder="Password" name="pass">
                    </div>
                    <div class="inputs">
                        <input type="text" placeholder="Option" name="opt">
                    </div>
                    <button type="submit" name="submit" class="btn">Login</button>
                </div>
            </form>
        </div>
    </nav>
</body>
</html>