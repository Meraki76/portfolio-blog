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

        <aside class="addblogbutton">
            <section>
                <form action="addBlog.php">
                    <input type="submit" value="Add Blog" />
                </form>
            </section>
        </aside>

        <article class="blog">
            <section>
                <h1>Example post 1</h1>
                <p>
                    Hey! I am an aspiring programmer, web developer, game developer, and musician. I plan to graduate <br>
                    with my bachelor's degree in Computer Science and persue a career in web development, while working <br>
                    on my games independently as a hobby. Furthermore, I can fluently play the Ukulele and am currently <br>
                    learning how to play the guitar.
                </p>
            </section>
        </article>

        <article class="blog">
            <section>
                <h1>Example post 2</h1>
                <p>
                    Hey! I am an aspiring programmer, web developer, game developer, and musician. I plan to graduate <br>
                    with my bachelor's degree in Computer Science and persue a career in web development, while working <br>
                    on my games independently as a hobby. Furthermore, I can fluently play the Ukulele and am currently <br>
                    learning how to play the guitar.
                </p>
            </section>
        </article>

        <article class="blog">
            <section>
                <h1>Example post 3</h1>
                <p>
                    Hey! I am an aspiring programmer, web developer, game developer, and musician. I plan to graduate <br>
                    with my bachelor's degree in Computer Science and persue a career in web development, while working <br>
                    on my games independently as a hobby. Furthermore, I can fluently play the Ukulele and am currently <br>
                    learning how to play the guitar.
                </p>
            </section>
        </article>

        <article class="blog">
            <section>
                <h1>Example post 4</h1>
                <p>
                    Hey! I am an aspiring programmer, web developer, game developer, and musician. I plan to graduate <br>
                    with my bachelor's degree in Computer Science and persue a career in web development, while working <br>
                    on my games independently as a hobby. Furthermore, I can fluently play the Ukulele and am currently <br>
                    learning how to play the guitar.
                </p>
            </section>
        </article>
    </div>

    <div class="footer">
        <p><i>Copyright &copy; 2022 Dylan Karrass</i></p>
    </div>
</body>
</html>
