<!doctype html>
<html lang="en">

<head>
    <title>Contact</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../stylesheets/new.css">

</head>

<body>
    <!-- Navbar -->
    <!-- Navbar Button -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <img src="../assets/images/brand.png" alt="My Logo" class="rounded-pill">
        </a>
        <!-- Navbar Content -->
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav w-100 justify-content-evenly">
                <a class="nav-link fs-5" href="../index.php">About Me</a>
                <a class="nav-link fs-5" href="../webpages/experience.php">Experience</a>
                <a class="nav-link fs-5" href="../webpages/skills.php">Skills</a>
                <a class="nav-link fs-5" href="../webpages/portfolio-2.php">Portfolio</a>
                <a class="nav-link fs-5 active" href="../webpages/contact.php">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Header -->
    <header class="mainHeader" style="background-image: url(../assets/images/contact.jpg);">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center justify-content-center text-center text-white" style="background-color: rgba(0,0,0,0.2);">
                <div class="col-lg-8">
                    <h1 class="display-1 fw-bold">References and Contact</h1>
                    <hr class="bg-white my-5" />
                </div>
            </div>
        </div>
    </header>

    <!-- References -->
    <section id="about">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center py-5">
                <div class="col-6 col-md-4">
                    <img src="../assets/images/handshake.jpg" alt="Me in a red shirt" class="img-fluid rounded-3">
                </div>
                <div class="col-lg-8 my-3">
                    <div class="row justify-content-center text-center">
                        <div class="col-md-6">
                            <h2 class="fw-light">Who I <span class="fw-bold">Know</span></h2>
                            <hr>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-center fs-5">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Relationship</th>
                                    <th scope="col">Email</th>
                                </tr>
                            </thead>
                            <tbody id="contact-table">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Resume -->
    <section id="content" class="bg-dark">
        <div class="container-fluid py-5 text-white">
            <div class="row align-items-center justify-content-center text-center py-5">
                <div class="col-lg-8 my-3">
                    <div class="row justify-content-center text-center">
                        <div class="col-md-6">
                            <h2 class="fw-light">My <span class="fw-bold">Resume</span></h2>
                            <hr class="my-5" />
                            <p class="fw-light fs-5">
                                This is where the <a href="../assets/documents/Resume.pdf" class="link-primary">the PDF
                                    Resume</a> goes.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <img src="../assets/images/resume.png" alt="Me in a red shirt" class="img-fluid rounded-3">
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Contact Form -->
    <?php $name = $email = $contBack = $comment = "";
    $nameErr = $emailErr = $contBackErr = "";
    $formErr = false;

    // Jul 15, 2022 09:28:00 if block to clean and validate each form input, and set error messages if there's a problem. Again, using ($_SERVER["REQUEST_METHOD"] == "POST" checks whether the request method is POST or not.) First, we need to check if there's anything in input field (for $name and $email), and give an error if not; if there's something in the field, we run cleanInput on it, then validate it.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required.";
            $formErr = true;
        }
        $name = cleanInput($_POST["name"]);
        // Jul 15, 2022 09:45:26 Use RegEx (pregmatch) to validate the name
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and standard spaces allowed";
            $formErr = true;
        }
        if (empty($_POST["email"])) {
            $emailErr = "Email is required.";
            $formErr = true;
        }
        $email = cleanInput($_POST["email"]);
        // Jul 15, 2022 09:45:26 Use RegEx (pregmatch) to validate the name
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $nameErr = "Only letters and standard spaces allowed";
            $formErr = true;
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

    ?>
    <section id="contact" style="background-image: url(../assets/images/contact.jpg);">
        <div class="container-fluid py-5 text-white vh-100">
            <div class="row justify-content-center text-center">
                <div class="col-md-6">
                    <h2 class="display-4 fw-bold">Contact Me</h2>
                    <hr>
                </div>
            </div>
            <div class="row justify-content-center h-75">
                <div class="col-6">
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="h-100" novalidate>
                        <div class="d-flex flex-column justify-content-between h-100">
                            <!-- Name -->
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <span class="text-warning">*<?php echo $nameErr; ?></span>
                                <input type="text" id="name" placeholder="Full Name" name="name" class="form-control" value="<?php mirrorFormInput($name); ?>">
                            </div>
                            <!-- Email -->
                            <div class="form-group">
                                <label for="email">Email Address:</label>
                                <span class="text-warning">*<?php echo $emailErr; ?></span>
                                <input type="email" id="email" placeholder="name@example.com" name="email" class="form-control" value="<?php mirrorFormInput($name); ?>">
                            </div>
                            <!-- Contact Back -->
                            <div class="form-group">
                                <label class="control-label">Can we contact you back?</label>
                                <span class="text-warning">*<?php echo $contBackErr; ?></span>
                                <div class="form-check">
                                    <input type="radio" name="contact-back" id="yes" value="Yes" class="form-check-input" <?php if ((isset($contBack)) && ($contBack == "Yes")) {
                                                                                                                                echo "checked";
                                                                                                                            } ?>>
                                    <label for="yes" class="form-check-label">Yes</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="contact-back" id="no" value="No" class="form-check-input" <?php if ((isset($contBack)) && ($contBack == "No")) {
                                                                                                                            echo "";
                                                                                                                        } ?>>
                                    <label for="no" class="form-check-label">No</label>
                                </div>
                            </div>
                            <!-- Comments -->
                            <div class="form-group">
                                <label for="comments">Comments:</label>
                                <textarea name="comments" id="comments" rows="3" class="form-control"><?php mirrorFormInput($comment); ?></textarea>
                            </div>

                            <div>
                                <!-- Required Fields Note -->
                                <div class="text-warning text-right">* Indicates required fields</div>
                                <!-- Submit Button -->
                                <button type="submit" role="button" class="btn btn-primary mb-2 w-100">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php if (($_SERVER['REQUEST_METHOD'] == "POST") && (!($formErr))) { ?>
        <section id="results">
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <h1>Form Entries:</h1>
                <ul>
                    <?php
                    // Jul 14, 2022 14:14:39 I did this the lazy way, by just checking if the variable is "truthy". The more correct way would probably be to use:
                    // if ($name !== "") {}
                    // to just check whether the variable is exactly an empty string or not.
                    if ($name) {
                        echo "<li>Name: $name </li>";
                    }
                    if ($email) {
                        echo "<li>Email: $email </li>";
                    }
                    if ($contBack) {
                        echo "<li>Contact Back: $contBack </li>";
                    }
                    if ($comment) {
                        echo "<li>Comment: $comment </li>";
                    }
                    ?>
                </ul>
            </div>
        </section>
    <?php } ?>

    <!-- Footer -->
    <footer class="py-4 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Wesley Reid 2022</p>
        </div>
    </footer>

    <script>
        let innerReferenceTable = "";
        var contacts = [{
                name: "Sharra Shedletsky",
                relationship: "Manager",
                email: "sharra.shedletsky@vitac.com"
            },
            {
                name: "Renee Guertin",
                relationship: "Co-Worker",
                email: "reneeguertin@gmail.com"
            },
            {
                name: "Kyle Challis",
                relationship: "Mentor",
                email: "kyle.challis@gmail.com"
            }
        ]

        for (let i = 0; i < contacts.length; i++) {
            innerReferenceTable += "<tr><td>" + contacts[i].name + "</td><td> " + contacts[i].relationship + "</td><td> " + contacts[i].email + "</td></tr>";
        }

        document.getElementById("contact-table").innerHTML = innerReferenceTable;
    </script>
    <!-- <script>
        function formValidation() {
            let x = document.getElementById("name").value;
            let y = document.getElementById("email").value;
            if (x === "") {
                alert("Nice try, you gotta put in a name.");
                return false;
            } else if (y === "") {
                alert("How am I suppose to contact you without an e-mail address? By owl? I'm not the Ministry of Magic.");
                return false;
            }
        }
    </script> -->

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>