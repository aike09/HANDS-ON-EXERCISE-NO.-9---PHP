<?php
    $page_title = 'Login | PHP Output No. 2';
    require 'header.php';

    $errors = [];
    $submitted = false;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $submitted = true;
        $email    = trim($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';

        if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Please enter a valid email address.';
        }
        if ($password === '') {
            $errors[] = 'Password is required.';
        }
    }
?>

<div class="page-content">
    <div class="card">
        <h1>Log in</h1>
        <p class="subtitle">Welcome back, enter your details below.</p>

        <?php if ($submitted && empty($errors)): ?>
            <p style="color: #1e8e3e; font-weight: 600;">Login details received (no database is connected in this demo).</p>
        <?php endif; ?>

        <?php if (!empty($errors)): ?>
            <div style="background:#fdecea; border:1px solid #f5c2c0; color:#c0392b; padding:12px 16px; border-radius:6px; margin-bottom: 15px;">
                <ul style="margin: 5px 0 0 18px; padding: 0;">
                    <?php foreach ($errors as $error): ?>
                        <li><?php echo htmlspecialchars($error); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="login.php" method="POST">
            <label for="email">Email address</label>
            <input type="email" id="email" name="email" placeholder="Enter your email"
                   value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" required />

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required />

            <div class="form-actions">
                <input type="submit" value="Log in">
            </div>
        </form>

        <p class="helper-links">
            <a href="forgot-password.php">Forgot your password?</a> &middot;
            Don't have an account? <a href="register.php">Register</a>
        </p>
    </div>
</div>

<?php require 'footer.php'; ?>