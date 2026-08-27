<?php
// Determine whether the request is GET or POST
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $req_type = '$_GET';
    $data = $_GET;
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $req_type = '$_POST';
    $data = $_POST;

} else {
    $req_type = 'Unknown';
    $data = [];
}

// Store errors
$errors = [];

// Get submitted data
$fname   = trim($data['fname'] ?? '');
$mname   = trim($data['mname'] ?? '');
$lname   = trim($data['lname'] ?? '');
$age     = trim($data['age'] ?? '');
$gender  = trim($data['gender'] ?? '');
$email   = trim($data['email'] ?? '');
$address = trim($data['address'] ?? '');
$contact = trim($data['contact'] ?? '');

// Validate First Name
if ($fname === '') {
    $errors[] = 'First Name is required.';
}

// Validate Last Name
if ($lname === '') {
    $errors[] = 'Last Name is required.';
}

// Validate Age
if (
    $age === '' ||
    filter_var(
        $age,
        FILTER_VALIDATE_INT,
        [
            'options' => [
                'min_range' => 1,
                'max_range' => 120
            ]
        ]
    ) === false
) {
    $errors[] = 'Age must be a whole number between 1 and 120.';
}

// Validate Gender
if (!in_array($gender, ['Male', 'Female', 'Other'], true)) {
    $errors[] = 'Please select a valid Gender.';
}

// Validate Email
if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Please enter a valid Email address.';
}

// Validate Address
if ($address === '') {
    $errors[] = 'Address is required.';
}

// Validate Contact Number
if (!preg_match('/^09[0-9]{9}$/', $contact)) {
    $errors[] = 'Contact Number must be 11 digits and start with 09 (e.g. 09171234567).';
}

// Safely display values
function h($value)
{
    return htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Output No. 1</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <?php if (!empty($errors)): ?>

        <div class="error-box">

            <strong>
                Please fix the following before the data can be displayed:
            </strong>

            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?php echo h($error); ?></li>
                <?php endforeach; ?>
            </ul>

        </div>

        <a class="back-link" href="./">
            &larr; Return to Main Form
        </a>

    <?php else: ?>

        <h2>
            Data is sent here, and it is stored in the
            <?php echo h($req_type); ?> variable
        </h2>

        <table>

            <tr>
                <td>First Name:</td>
                <td class="value">
                    <?php echo h($fname); ?>
                </td>
            </tr>

            <tr>
                <td>Middle Name:</td>
                <td class="value">
                    <?php echo h($mname); ?>
                </td>
            </tr>

            <tr>
                <td>Last Name:</td>
                <td class="value">
                    <?php echo h($lname); ?>
                </td>
            </tr>

            <tr>
                <td>Age:</td>
                <td class="value">
                    <?php echo h($age); ?>
                </td>
            </tr>

            <tr>
                <td>Gender:</td>
                <td class="value">
                    <?php echo h($gender); ?>
                </td>
            </tr>

            <tr>
                <td>Email:</td>
                <td class="value">
                    <?php echo h($email); ?>
                </td>
            </tr>

            <tr>
                <td>Address:</td>
                <td class="value">
                    <?php echo h($address); ?>
                </td>
            </tr>

            <tr>
                <td>Contact Number:</td>
                <td class="value">
                    <?php echo h($contact); ?>
                </td>
            </tr>

        </table>

        <a class="back-link" href="./">
            &larr; Return to Main Form
        </a>

    <?php endif; ?>

</div>

</body>
</html>