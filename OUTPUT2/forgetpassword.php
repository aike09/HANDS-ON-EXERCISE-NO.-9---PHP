<?php
    $page_title = 'Forgot Password | PHP Output No. 2';
    require 'header.php';

    $errors = [];
    $sent = false;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = trim($_POST['email'] ?? '');

        if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Please enter a valid email address.';
        }

        if (empty($errors)) {
            // In a real app, a password reset email would be sent here.
            $sent = true;
        }
    }
?>

<div class="page-content">
    <div class="card">
        <h1>Forgot password</h1>
        <p class="subtitle">Enter your email and we'll send you a reset link.</p>

        <?php if ($sent): ?>
            <p style="color: #1e8e3e; font-weight: 600;">If an account exists for that email, a reset link has been sent.</p>
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

            <form action="forgot-password.php" method="POST">
                <label for="email">Email address</label>
                <input type="email" id="email" name="email" placeholder="Enter your registered email"
                       value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" required />

                <div class="form-actions">
                    <input type="submit" value="Send reset link">
                </div>
            </form>

        <?php endif; ?>

        <p class="helper-links">Remembered it after all? <a href="login.php">Back to login</a></p>
    </div>
</div>

<?php require 'footer.php'; ?>