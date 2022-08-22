<?php
if (!isset($_SESSION)) {
    session_start();
}

$logosErr = $busCardsErr = $webDesignErr = $fnameErr = $lnameErr = $emailErr = $contBackErr = "";
$logos = $busCards = $webDesign = $fname = $lname = $phone = $email = $contBack = $comment = "";
$formErr = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["fname"])) {
        $fnameErr = "First name is required.";
        $formErr = true;
    } else {
        $name = cleanInput($_POST["fname"]);
        //Use REGEX to accept only letters and white spaces
        if (!preg_match("/^[a-zA-Z ]*$/", $fname)) {
            $fnameErr = "Only letters and standard spaces allowed.";
            $formErr = true;
        }
    }

    if (empty($_POST["lname"])) {
        $lnameErr = "Last name is required.";
        $formErr = true;
    } else {
        $lname = cleanInput($_POST["lname"]);
        //Use REGEX to only accept letters and spaces
        if (!preg_match("/^[a-zA-Z ]*$/", $lname)) {
            $lnameErr = "Only letters and spaces allowed.";
            $formErr = true;
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Your email is required for correspondence.";
        $formErr = true;
    } else {
        $email = cleanInput($_POST["email"]);
        // Check if e-mail address is formatted correctly
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

function cleanInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (($_SERVER["REQUEST_METHOD"] == "POST") && (!($formErr))) {

    $hostname = "blackbeard.slccwebdev.com";
    $username = "student2022";
    $password = "php_pirates";
    $databasename = "php_pirates";



    try {
        //Create new PDO Object with connection parameters
        $conn = new PDO("mysql:host=$hostname;dbname=$databasename", $username, $password);

        //Set PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //Variable containing SQL command
        $sql = "INSERT INTO contactInfo (fname, lname, email, contactBack, comments)
                VALUES (:fname, :lname, :email, :contactBack, :comments);";

        //Create prepared statement
        $stmt = $conn->prepare($sql);

        //Bind parameters to variables
        $stmt->bindParam(':fname', $fname, PDO::PARAM_STR);
        $stmt->bindParam(':lname', $lname, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':contactBack', $contBack, PDO::PARAM_STR);
        $stmt->bindParam(':comments', $comment, PDO::PARAM_STR);

        //EXECUTE SQL statement on server
        $stmt->execute();

        //Create thank you message
        $_SESSION['message'] = '<p class="font-weight-bold">Sweet, it worked! Thanks for your submission, dude!</p><p class="font-weight-light">Your request has been sent.</p>';

        $_SESSION['complete'] = true;

        //Redirect
        header('Location: ' . $_SERVER['REQUEST_URI']);
        exit;
    } catch (PDOException $error) {

        //create error message
        $_SESSION['message'] = '<p>Bummer dude! The form was not submitted successfully. Please try again later.</p>';

        $_SESSION['complete'] = true;

        //Redirect
        header('Location: ' . $_SERVER['REQUEST_URI']);
        exit;
    }

    $conn = null;
}
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contact Page</title>

    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="CSS-files/styles.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


</head>

<body>

    <div id="topofpage"></div>

    <table width="100%">
        <tr>
            <td width="200px">
                <img id="Stacey" src="images/Stacey1.jpg" alt="Stacey" style="width:100%">
            </td>
            <td>
                <h2 style="text-align: center;"> STACEY LAMONT</h2>
                <h3 style="text-align: center; color:#ae49f1"> Graphic Designer</h3>
            </td>
        </tr>
    </table>

    <!-- Nav bar -->
    <nav style="color:#ae49f1; padding-left: 20px;">
        <a href="Index.php" style="color:#ae49f1;"> HOME</a> |
        <a href="portfolio.php" style="color:#ae49f1;"> PORTFOLIO</a> |
        <a href="about.php" style="color:#ae49f1;"> ABOUT</a> |
        <a href="contact-wk3.php" style="color:#ae49f1;"> CONTACT</a>


    </nav>

    <hr />


    <!-- Contact Form Section -->
    <section id="contact">
        <div class="container py-3" style="background-color: white">

            <!-- Section Title -->
            <div class="row justify-content-center text-center">
                <div class="col-6">
                    <h2 class="display-5" style="color:#ae49f1;">Contact Me</h2> <br>
                </div>
            </div>
            <!-- Contact Form Row -->
            <div class="row justify-content-center">
                <div class="col-6">

                    <!-- Contact Form Start -->
                    <form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method="POST" novalidate>

                        <!-- First Name Field -->
                        <div class="form-group">
                            <label for="fname">First Name:</label>
                            <span class="text-danger">*<?php echo $fnameErr; ?></span>
                            <input type="text" class="form-control" id="fname" placeholder="First Name" name="fname" value="<?php if (isset($fname)) {
                                                                                                                                echo $fname;
                                                                                                                            } ?>" />

                        </div>


                        <!-- Last Name Field -->
                        <div class="form-group">
                            <label for="lname">Last Name:</label>
                            <span class="text-danger">*<?php echo $lnameErr; ?></span>
                            <input type="text" class="form-control" id="lname" placeholder="Last Name" name="lname" value="<?php if (isset($lname)) {
                                                                                                                                echo $lname;
                                                                                                                            } ?>" />

                        </div>

                        <!-- Email Field -->
                        <div class="form-group">
                            <label for="email">Email address:</label>
                            <span class="text-danger">*<?php echo $emailErr; ?></span>
                            <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" value="<?php if (isset($email)) {
                                                                                                                                        echo $email;
                                                                                                                                    } ?>" />
                        </div>

                        <!-- Radio Button Field -->
                        <div class="form-group">
                            <label class="control-label">Can we contact you back?</label>
                            <span class="text-danger">*<?php echo $contBackErr; ?></span>
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
                            <textarea id="comments" class="form-control" rows="3" name="comments"><?php if (isset($comment)) {
                                                                                                        echo $comment;
                                                                                                    } ?></textarea>
                        </div>

                        <!-- Required Fields Note-->
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

    <!--Show Modal-->
    <?php
    if (isset($_SESSION['complete']) && $_SESSION['complete']) {
        echo "<script>$('#thankYouModal').modal('show');</script>";
        session_unset();
    };

    ?>




    </form>
    <!--   <button style="font-family: montserrat, sans-serif; font-weight: 400;font-style: normal;font-size: 18px;">Submit</button> 
      -->




    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <hr />
    <br>

    <footer>

        <a style="color: #ae49f1;" href="#topofpage">Back to Top</a>
        </p>
    </footer>
    <br>
    <br>

</body>

</html>