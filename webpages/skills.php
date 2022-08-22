<?php include "../scripts/skillList.php" ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../stylesheets/new.css">

    <title>Skills</title>
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
                <a class="nav-link fs-5 active" href="../webpages/skills.php">Skills</a>
                <a class="nav-link fs-5" href="../webpages/portfolio-2.php">Portfolio</a>
                <a class="nav-link fs-5" href="../webpages/contact.php">Contact</a>
            </div>
        </div>
    </nav>

    <header class="mainHeader" style="background-image: url(../assets/images/laptop.jpg);">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center justify-content-center text-center text-white" style="background-color: rgba(0,0,0,0.2);">
                <div class="col-lg-8">
                    <h1 class="display-1 fw-bold">Skills</h1>
                    <hr class="bg-white my-5" />
                </div>
            </div>
        </div>
    </header>

    <!-- About -->
    <section id="about">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center py-5">
                <div class="col-6 col-md-4">
                    <img src="../assets/images/skills-logo.png" alt="Me in a red shirt" class="img-fluid rounded-3">
                </div>
                <div class="col-lg-8 my-3">
                    <h2 class="fw-light">What I've <span class="fw-bold">Learned</span></h2>
                    <hr class="my-5" />
                    <p class="fw-light fs-5">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius earum facilis neque corporis
                        voluptate debitis velit laboriosam autem asperiores! Eveniet possimus temporibus dolores odio
                        similique vero, aspernatur accusamus alias numquam?
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Content -->
    <section id="content" style="background-image: url(../assets/images/laptop.jpg);">
        <div class="container-fluid py-5">

            <!-- Items Row Start -->
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-center">
                <!-- Item -->
                <div class="col mb-4">
                    <div class="card bg-light text-center border-light shadow h-100">
                        <div class="card-body">
                            <h3 class="card-title">Technical Skills</h3>
                            <hr class="bg-primary">
                            <p class="card-text">
                                <!-- Jul 11, 2022 17:46:52 previous plain text: Basic web design--HTML/CSS/JS, Basic competency with word processing,
                                spreadsheets, and Google Fu, flesh this out more. -->
                                <?php mySkills($mySkillsList, $favSkill); ?>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="col mb-4">
                    <div class="card bg-light text-center border-light shadow h-100">
                        <div class="card-body">
                            <h3 class="card-title">Interpersonal Skills</h3>
                            <hr class="bg-primary">
                            <p class="card-text">Clear and Effective Communication
                                Gained through several years of acting, writing and public speaking, as well as courses
                                in Non-Violent Communication.
                                Leadership and Time Management
                                Exercised in leadership positions in music ensembles, group projects, and Boy Scouts.
                                Included duties like planning meetings and resolving organizational and personality
                                conflicts.</p>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="col mb-4">
                    <div class="card bg-light text-center border-light shadow h-100">
                        <div class="card-body">
                            <h3 class="card-title">Awards</h3>
                            <hr class="bg-primary">
                            <p class="card-text">First place in collegiate-level public speaking competition, 2015, for
                                a persuasive presentation on the merits of tabletop roleplaying games.</p>
                        </div>
                    </div>
                </div>
                <!-- Content Item End -->
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-4 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Wesley Reid 2022</p>
        </div>
    </footer>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>