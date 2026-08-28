<?php
    $page_title = 'Register | PHP Output No. 2';
    require 'header.php';

    $errors = [];
    $success = false;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $fullname = trim($_POST['fullname'] ?? '');
        $email    = trim($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';
        $confirm  = $_POST['confirm_password'] ?? '';

        if ($fullname === '') {
            $errors[] = 'Full name is required.';
        }
        if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Please enter a valid email address.';
        }
        if (strlen($password) < 8) {
            $errors[] = 'Password must be at least 8 characters long.';
        }
        if ($password !== $confirm) {
            $errors[] = 'Password and confirmation do not match.';
        }

        if (empty($errors)) {
            $success = true;
        }
    }
?>

<div class="page-content">
    <div class="card">
        <h1>Create an account</h1>
        <p class="subtitle">Fill in your details to register.</p>

        <?php if ($success): ?>
            <p style="color: #1e8e3e; font-weight: 600;">Account created successfully. You can now <a href="login.php">log in</a>.</p>
        <?php else: ?>

            <?php if (!empty($errors)): ?>
                <div style="background:#fdecea; border:1px solid #f5c2c0; color:#c0392b; padding:12px 16px; border-radius:6px; margin-bottom: 15px;">
                    <ul style="margin: 5px 0 0 18px; padding: 0;">
                        <?php foreach ($errors as $error): ?>
                            <li><?php echo htmlspecialchars($error); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <form action="register.php" method="POST">
                <label for="fullname">Full name</label>
                <input type="text" id="fullname" name="fullname" placeholder="Enter your full name"
                       value="<?php echo htmlspecialchars($_POST['fullname'] ?? ''); ?>" required />

                <label for="email">Email address</label>
                <input type="email" id="email" name="email" placeholder="Enter your email"
                       value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" required />

                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="At least 8 characters" required minlength="8" />

                <label for="confirm_password">Confirm password</label>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Re-enter your password" required minlength="8" />

                <div class="form-actions">
                    <input type="submit" value="Register">
                </div>
            </form>

            <p class="helper-links">Already have an account? <a href="login.php">Log in</a></p>

        <?php endif; ?>
    </div>
</div>

<?php require 'footer.php'; ?>