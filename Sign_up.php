<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style/Sign_up.css">
</head>
<body>
    <main>
        <section class="sign-up">
            <div class="container">
                <div class="sign-up__title">
                    <h2>Sign Up</h2>
                </div>
                <div class="sign-up__form">
                    <form action="./php/registration.php" method="GET">
                        <input type="text" name="phone" placeholder="Phone number" required>
                        <input type="password" name="password" placeholder="Password" required>
                        <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                        
                        <div class="sign-up__links">
                            <p class="forgot-pw">Forgot password?</p>
                            <p class="register-link">Already have an account? <a href="Login.php">Login</a></p>
                        </div>
                        
                        <button type="submit">Sign Up</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
</body>
</html>