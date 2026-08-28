<?php
    $page_title = 'Home | PHP Output No. 2';
    require 'header.php';
?>

<div class="page-content">
    <div class="hero">
        <h1>Welcome</h1>
        <p>This is the home page of a small multi-page site built with PHP, using <code>include</code>/<code>require</code> to share the navigation and footer across every page.</p>
        <div class="hero-actions">
            <a class="btn-primary" href="register.php">Create an account</a>
            <a class="btn-secondary" href="login.php">Log in</a>
        </div>
    </div>
</div>

<?php require 'footer.php'; ?>