<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style/Login.css">
</head>
<body>
    <main>
        <section class="login">
            <div class="container">
                <div class="login__title">
                    <h2>Login</h2>
                </div>
                <div class="login__form">
                    <form action="./php/login.php" method="GET">
                        <input type="text" name="phone" placeholder="Phone" required>
                        <input type="password" name="password" placeholder="Password" required>
                        
                        <div class="login__links">
                            <p class="forgot-pw">Forgot password?</p>
                            <p class="register-link">Not registered? <a href="Sign_up.php">Sign Up</a></p>
                        </div>
                        
                        <button type="submit">Log In</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
</body>
</html>