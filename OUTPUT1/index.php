<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Output No. 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>PHP Output No. 1</h1>

    <!-- GET Form -->
    <fieldset>
        <legend>This form uses GET request</legend>

        <form action="redirect.php" method="GET">
            <table>

                <tr>
                    <td>First Name</td>
                    <td>
                        <input type="text" name="fname"
                               placeholder="Enter First Name" required>
                    </td>
                </tr>

                <tr>
                    <td>Middle Name</td>
                    <td>
                        <input type="text" name="mname"
                               placeholder="Enter Middle Name" required>
                    </td>
                </tr>

                <tr>
                    <td>Last Name</td>
                    <td>
                        <input type="text" name="lname"
                               placeholder="Enter Last Name" required>
                    </td>
                </tr>

                <tr>
                    <td>Age</td>
                    <td>
                        <input type="number" name="age"
                               placeholder="Enter Age"
                               min="1" max="120" required>
                    </td>
                </tr>

                <tr>
                    <td>Gender</td>
                    <td class="radio-group">
                        <label>
                            <input type="radio" name="gender" value="Male" required>
                            Male
                        </label>

                        <label>
                            <input type="radio" name="gender" value="Female">
                            Female
                        </label>

                        <label>
                            <input type="radio" name="gender" value="Other">
                            Other
                        </label>
                    </td>
                </tr>

                <tr>
                    <td>Email</td>
                    <td>
                        <input type="email" name="email"
                               placeholder="Enter Email Address" required>
                    </td>
                </tr>

                <tr>
                    <td>Address</td>
                    <td>
                        <textarea name="address"
                                  placeholder="Enter Complete Address"
                                  required></textarea>
                    </td>
                </tr>

                <tr>
                    <td>Contact Number</td>
                    <td>
                        <input type="tel" name="contact"
                               placeholder="e.g. 09171234567"
                               pattern="^09[0-9]{9}$"
                               title="Enter an 11-digit PH mobile number starting with 09"
                               required>

                        <small class="hint">
                            Format: 09XXXXXXXXX
                        </small>
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Submit Data">
                        <input type="reset" value="Cancel">
                    </td>
                </tr>

            </table>
        </form>
    </fieldset>


    <!-- POST Form -->
    <fieldset>
        <legend>This form uses POST request</legend>

        <form action="redirect.php" method="POST">
            <table>

                <tr>
                    <td>First Name</td>
                    <td>
                        <input type="text" name="fname"
                               placeholder="Enter First Name" required>
                    </td>
                </tr>

                <tr>
                    <td>Middle Name</td>
                    <td>
                        <input type="text" name="mname"
                               placeholder="Enter Middle Name" required>
                    </td>
                </tr>

                <tr>
                    <td>Last Name</td>
                    <td>
                        <input type="text" name="lname"
                               placeholder="Enter Last Name" required>
                    </td>
                </tr>

                <tr>
                    <td>Age</td>
                    <td>
                        <input type="number" name="age"
                               placeholder="Enter Age"
                               min="1" max="120" required>
                    </td>
                </tr>

                <tr>
                    <td>Gender</td>
                    <td class="radio-group">
                        <label>
                            <input type="radio" name="gender" value="Male" required>
                            Male
                        </label>

                        <label>
                            <input type="radio" name="gender" value="Female">
                            Female
                        </label>

                        <label>
                            <input type="radio" name="gender" value="Other">
                            Other
                        </label>
                    </td>
                </tr>

                <tr>
                    <td>Email</td>
                    <td>
                        <input type="email" name="email"
                               placeholder="Enter Email Address" required>
                    </td>
                </tr>

                <tr>
                    <td>Address</td>
                    <td>
                        <textarea name="address"
                                  placeholder="Enter Complete Address"
                                  required></textarea>
                    </td>
                </tr>

                <tr>
                    <td>Contact Number</td>
                    <td>
                        <input type="tel" name="contact"
                               placeholder="e.g. 09171234567"
                               pattern="^09[0-9]{9}$"
                               title="Enter an 11-digit PH mobile number starting with 09"
                               required>

                        <small class="hint">
                            Format: 09XXXXXXXXX
                        </small>
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Submit Data">
                        <input type="reset" value="Cancel">
                    </td>
                </tr>

            </table>
        </form>
    </fieldset>

</body>
</html>