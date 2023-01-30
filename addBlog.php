<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Portfolio</title>
    <link rel="stylesheet" href="reset.css" type="text/css" />
    <link rel="stylesheet" href="stylesheet.css" type="text/css" />
    <script src="script.js" defer></script>
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
                        <legend>Welcome, <?php echo $_SESSION['name'] ?></legend>
                        <input type="submit" class="btn-grad" value="Logout" />
                    </fieldset>
                </form>
            </section>
        </aside>
    <?php } else { 
            
            echo "<script>
            window.location.href='main.php';
            alert('You need to be logged in to add a blog post!');
            </script>";


        } ?>

        <aside class="addpost">
            <section>
                <form method="POST" action="post.php" id="blogform">
                    <fieldset class="main">
                        <legend>Add Blog</legend>

                        <p>
                            <input type="text" placeholder="Title" id = "title" name = "title" required></input>
                        </p>

                        <p>
                            <textarea rows="4" cols="50" placeholder="Enter text here..." name="comment" id="comment" form="blogform" required></textarea>
                        </p>

                        <input type="submit" onclick="defaultPrevention();" class="btn-grad"></input>
                        <input onclick="resetColour(); return confirmClear();" class="btn-grad" type="reset"></input>

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
