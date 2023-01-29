<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Portfolio</title>
    <link rel="stylesheet" href="reset.css" type="text/css" />
    <link rel="stylesheet" href="stylesheet.css" type="text/css" />
</head>
<body>
    <header>
        <h1>Dylan Karrass</h1>
        <nav>
            <ul>
                <li><a href="main.php#about">About Me</a></li>
                <li><a href="main.php#skills">Skills</a></li>
                <li><a href="main.php#education">Education and Qualifications</a></li>
                <li><a href="main.php#experience">Experience</a></li>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="blog.php">Blog</a></li>
            </ul>
        </nav>
    </header>

    <div class="bg1">
    <?php session_start(); if (isset($_SESSION['uname'])) { ?>
        <aside>
            <section id = "login">
                <form method="POST" action="logout.php">
                    <fieldset class="main">
                        <legend>Logout</legend>
                        <input type="submit" class="btn-grad" value="Logout" />
                    </fieldset>
                </form>
            </section>
        </aside>
    <?php } else { ?>
        <aside>
            <section id = "login">
                <form method="POST" action="login.php">
                    <?php if (isset($_GET['error'])) { ?>

                        <p class="error"><?php echo $_GET['error']; ?></p>
            
                    <?php } ?>
                    <fieldset class="main">
                        <legend>Login</legend>

                        <p>
                            <label>User Name</label><br>
                            <input type="text" name="uname">
                        </p>

                        <p>
                            <label>Password</label><br>
                            <input type="password" name="password">
                        </p>

                        <input type="submit" class="btn-grad" value="Login" />

                    </fieldset>
                </form>
            </section>
        </aside>
        <?php } ?>

        <aside class="addpost">
            <section>
                <form method="POST" action="addPost.php" id="blogform">
                    <fieldset class="main">
                        <legend>Add Blog</legend>

                        <p>
                            <input type="text" placeholder="Title" name = "title" required>
                        </p>

                        <p>
                            <textarea rows="4" cols="50" placeholder="Enter text here..." name="comment" form="blogform"></textarea required>
                        </p>

                        <input type="submit" onclick="defaultPrevention();" class="btn-grad" />
                        <input type="reset" onclick="return confirmClear();" class="btn-grad" />

                    </fieldset>
                </form>
            </section>
        </aside>
    </div>

    <div class="footer">
        <p><i>Copyright &copy; 2022 Dylan Karrass</i></p>
    </div>

</body>
</html>
