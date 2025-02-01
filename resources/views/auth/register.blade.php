<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Project Management System</title>
    <link rel="stylesheet" href="{{ asset('backend/styles.css') }}">
</head>
<body>
    <div class="auth-container">
        <div class="auth-form">
            <h2>Register</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label for="registerName">Full Name</label>
                    <input type="text" id="registerName" name="name" required>
                </div>
                <div class="form-group">
                    <label for="registerEmail">Email</label>
                    <input type="email" id="registerEmail" name="email" required>
                </div>


                <div class="form-group">
                    <label for="registerPassword">Password</label>
                    <input type="password" id="registerPassword" name="password" required minlength="8">
                </div>

      
                <div class="form-group">
                    <label for="registerPassword"> Confirm Password</label>
                    <input type="password" id="registerPassword"  name="password_confirmation" required minlength="8">
                </div>




                <button type="submit">Register</button>
                <p class="switch-form">
                    Already have an account? <a href="{{ route('login') }}">Login</a>
                </p>
            </form>
        </div>
    </div>
</body>
</html>