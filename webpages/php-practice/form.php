<?php
if (!isset($_SESSION)) {
    session_start();
}
// Jul 14, 2022 09:45:37 Not a fan of this syntax, but it does save space.
$name = $email = $contBack = $comment = "";
$nameErr = $emailErr = $contBackErr = "";
$formErr = false;

// Jul 14, 2022 09:45:34 if ($_SERVER["REQUEST_METHOD] == "POST") checks whether the request method being used is post or not; what if there are multiple request methods on the page? Shouldn't we have to specify the form somehow? If post is the method, THEN the values in the form are sent. Remember, the post method creates an associative array where the key is the name of the form, and the value is the value of the input.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required.";
        $formErr = true;
    } else {
        $name = cleanInput($_POST["name"]);
        // Use REGEX to only accept letters and spaces.
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and standard spaces allowed.";
            $formErr = true;
        }
    }
    if (empty($_POST["email"])) {
        $emailErr = "Email is required.";
        $formErr = true;
    } else {
        $email = cleanInput($_POST["email"]);
        // Check if email address is formatted correctly.
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Please enter a valid email address.";
            $formErr = true;
        }
    }

    if (empty($_POST["contact-back"])) {
        $contBackErr = "Please let us know if we can contact you back.";
        $formErr = true;
    } else {
        $contBack = cleanInput($_POST["contact-back"]);
    }

    $comment = cleanInput($_POST["comments"]);
}
// Jul 14, 2022 14:12:16 a function for removing slashes and leading and trailing spaces and escaping HTML special characters. NOTE: You gotta re-set the value of $data each line, so that $data actually changes. Otherwise you're performing each function but not assigning the new value to anything.
function cleanInput($data)
{
    $data = stripslashes($data);
    $data = trim($data);
    $data = htmlspecialchars($data);
    return $data;
}
function mirrorFormInput($data)
{
    if (isset($data)) {
        echo $data;
    }
}

if (($_SERVER['REQUEST_METHOD'] == "POST") && (!($formErr))) {
    // $hostname = "php-mysql-exercisedb.slccwebdev.com";
    // $username = "phpmysqlexercise";
    // $password = "mysqlexercise";
    // $databasename = "php_mysql_exercisedb";
    $hostname = "sql764.main-hosting.eu";
    $username = "wrdev";
    $password = "GetFuckedwrdevdb1";
    $databasename = "u392692532_wrdevdb1";

    try {
        //Create new PDO Object with connection parameters
        $conn = new PDO("mysql:host=$hostname;dbname=$databasename", $username, $password);

        //Set PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //Variable containing SQL command
        $sql = "INSERT INTO wr_fa22_Contacts (name,email, contactBack, comments)
    VALUES (:name, :email, :contactBack, :comments);";

        //Create prepared statement
        $stmt = $conn->prepare($sql);

        //Bind parameters to variables
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':contactBack', $contBack, PDO::PARAM_STR);
        $stmt->bindParam(':comments', $comments, PDO::PARAM_STR);

        //Execute SQL statement on server
        $stmt->execute();

        //Create thank-you message
        $_SESSION['message'] = '<p class="font-weight-bold">Thank you for your submission!</p><p class="font-weight-light">Your request has been sent.</p>';

        $_SESSION['complete'] = true;

        //Redirect
        header('Location: ' . $_SERVER['REQUEST_URI']);
        exit;
    } catch (PDOException $error) {
        //Return error code if one is created
        $_SESSION['message'] = '<p>We apologize, the form was not submitted successfully. Please try again later.</p>';

        $_SESSION['complete'] = true;

        //Redirect
        header('Location: ' . $_SERVER['REQUEST_URI']);
        exit;
    }
    $conn = null;
} ?>

<!DOCTYPE html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous" defer></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous" defer></script>

    <!-- Website Title -->
    <title>PHP Form Exercise</title>

</head>

<body>
    <!-- Contact Form Section -->
    <section id="contact">
        <div class="container py-5">
            <!-- Section Title -->
            <div class="row justify-content-center text-center">
                <div class="col-md-6">
                    <h2 class="display-4 font-weight-bold">Contact Me</h2>
                    <hr />
                </div>
            </div>
            <!-- Contact Form Row -->
            <div class="row justify-content-center">
                <div class="col-6">
                    <!-- Contact Form Start -->
                    <!-- EXERCISE STEP 1: Set action to return to this page when submitted using PHP_SELF -->
                    <!-- Jul 14, 2022 09:47:34 According to some comments, PHP_SELF is less secure, and SCRIPT_NAME should be used instead. -->
                    <!-- Jul 15, 2022 09:35:29 If we want to use a custom PHP validation instead of bootstrap's built-in validation, make sure to remove validation functions and add the "novalidate" attribute. -->
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" novalidate>

                        <!-- Name Field -->
                        <div class="form-group">
                            <label for="name">Full Name:</label>
                            <span class="text-danger">*<?php echo $nameErr ?></span>
                            <!-- Jul 15, 2022 08:53:10 the php in the value field makes it so valid entries don't go away if there's an error. Email is the same, comment and radio are different, see below. -->
                            <input type="text" class="form-control" id="name" placeholder="Full Name" name="name" value="<?php mirrorFormInput($name); ?>" />
                        </div>

                        <!-- Email Field -->
                        <div class="form-group">
                            <label for="email">Email address:</label>
                            <span class="text-danger">*<?php echo $emailErr ?></span>
                            <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" value="<?php mirrorFormInput($email); ?>" />
                        </div>

                        <!-- Radio Button Field -->
                        <div class="form-group">
                            <label class="control-label">Can we contact you back?</label>
                            <span class="text-warning">*<?php echo $contBackErr; ?></span>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="contact-back" id="yes" value="Yes" <?php if ((isset($contBack)) && ($contBack == "Yes")) {
                                                                                                                            echo "checked";
                                                                                                                        } ?> />
                                <label class="form-check-label" for="yes">Yes</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="contact-back" id="no" value="No" <?php if ((isset($contBack)) && ($contBack == "No")) {
                                                                                                                        echo "checked";
                                                                                                                    } ?> />
                                <label class="form-check-label" for="no">No</label>
                            </div>
                        </div>

                        <!-- Comments Field -->
                        <div class="form-group">
                            <label for="comments">Comments:</label>
                            <!-- Jul 15, 2022 08:54:24 For comment, the PHP goes inside the regular text area, because it's a textarea element. -->
                            <textarea id="comments" class="form-control" rows="3" name="comments"><?php mirrorFormInput($comment); ?></textarea>
                        </div>

                        <!-- Required Fields Note -->
                        <div class="text-danger text-right">* Indicates required fields</div>

                        <!-- Submit Button -->
                        <button class="btn btn-primary mb-2" type="submit" role="button" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="thankYouModal" tabindex="-1" aria-labelledby="thankYouModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="thankYouModalLabel">Thank You</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php echo $_SESSION['message']; ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Show Modal -->
    <?php
    if (isset($_SESSION['complete']) && $_SESSION['complete']) {
        echo "<script>$('#thankYouModal').modal('show');</script>";
        session_unset();
    }
    ?>
</body>

</html>