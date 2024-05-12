<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karir</title>
    <link rel="stylesheet" href="../style2.css">

</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="proses_register.php" method="post">
                    <h2>REGISTER</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="text" name="username" required>
                        <label for="">Username</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" required>
                        <label for="">Password</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="repassword" required>
                        <label for="">Re-Password</label>
                    </div>
                    <button type="submit" name="submit" class="btn btn-block">Register</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
