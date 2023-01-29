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
                <li><a href="#about">About Me</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#education">Education and Qualifications</a></li>
                <li><a href="#experience">Experience</a></li>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="blog.php">Blog</a></li>
            </ul>
        </nav>
    </header>


    <section id = "contact">
        <h1>Contacts</h1>
        <ul>
            <li>Mobile: +44 7947 660041</li>
            <li>Email: dylankarrass@hotmail.co.uk</li>
            <li>Discord: Meraki#4810</li>
            <li><a href="https://merako.itch.io/">Itch.io</a></li>
            <li><a href="https://steamcommunity.com/id/merakiosu/">Steam</a></li>
        </ul>
    </section>


    <?php session_start(); if (isset($_SESSION['uname'])) { ?>
        <aside>
            <section id = "login">
                <form method="POST" action="logout.php">
                    <fieldset class="main">
                        <legend>Welcome, <?php echo $_SESSION['uname'] ?></legend>
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







    <span class="anchor" id="about"></span>
    <div class="bg1">
        <article>
            <figure>
                <img src="pictures/hamster.jpeg" alt="Funny Hamster with cheese dust on its mouth" title="Hamster" width="400" height="400" />
                <figcaption><cite>A very funny looking hamster</cite></figcaption>
            </figure>

            <section id="about">
                <h1>About Me</h1>
                <h2>Computer Science undergraduate student studying at Queen Mary University of London</h2>
                <p>
                    Hey! I am a programmer, game developer, and musician. I plan to graduate
                    with my bachelor's degree in Computer Science and persue a career in software engineering, while working
                    on my games independently as a hobby. Over the past year I have been learning to play Guitar and have 
                    learnt how to play the fingerstyle method on the acoustic, and I can play the Ukulele fluently.
                </p>
            </section>
        </article>

        <span class="anchor" id="skills"></span>
        <article class="skillsart">
            <section>
                <h1>Skills</h1>
                <div class="skills" id="skills">
                    <section>
                        <h2>Programming</h2>
                        <ul>
                            <li>Java</li>
                            <li>Python</li>
                            <li>HTML</li>
                            <li>CSS</li>
                        </ul>
                    </section>

                    <section>
                        <h2>Applications</h2>
                        <ul>
                            <li>Photoshop</li>
                            <li>Sony Vegas</li>
                            <li>FL Studio</li>
                            <li>Gamemaker Studio</li>
                            <li>Godot</li>
                        </ul>
                    </section>
                </div>
            </section>

            <section class="graphs">
                <p>HTML</p>
                <div class="container">
                    <div class="skillsg html">80%</div>
                </div>

                <p>CSS</p>
                <div class="container">
                    <div class="skillsg css">80%</div>
                </div>

                <p>Java</p>
                <div class="container">
                    <div class="skillsg java">90%</div>
                </div>

                <p>Python</p>
                <div class="container">
                    <div class="skillsg python">90%</div>
                </div>
            </section>
        </article>
    </div>

    <span class="anchor" id="education"></span>
    <div class="bg2">
        <article>
            <section class="education" id="education">
                <h1>Education and Qualifications</h1>
                <table>
                    <tr>
                        <th>Year</th>
                        <th>Education</th>
                        <th>Qualifications</th>
                    </tr>
                    <tr>
                        <td><strong>2014-2019</strong></td>
                        <td>Kantor King Solomon High School</td>
                        <td>9 GCSEs at Grades A-C, Including Maths and English</td>
                    </tr>
                    <tr>
                        <td><strong>2019-2021</strong></td>
                        <td>Kantor King Solomon College</td>
                        <td>A* Computer Science, A* Psychology, A Religious Studies</td>
                    </tr>
                </table>
            </section>
        </article>

        <span class="anchor" id="experience"></span>
        <article class="experience" id="experience">
            <section>
                <h1>Experience</h1>
                <h2>Video Editing and Filmmaking</h2>
                <p>
                    I have a lot of experience in video editing, recording and editing videos for youtube channels reaching thousands of viewers.
                </p>

                <h2>Game Development</h2>
                <p>
                    I've successfully created a full arcade-like game similar to asteroids, as well as selling it! This allowed me to learn many important concepts in game design and development. My knowledge resides
                    in Gamemaker Studio and Godot.
                </p>

                <h2>Art and Design</h2>
                <p>
                    I enjoy designing logos, websites, stream overlays and more using Photoshop as well as making pixel-art using Asesprite.
                </p>

                <h2>Bartending</h2>
                <p>
                    Even with my Job bartending, I am able to excell in my creativity through concatenating several ingredients to make my own cocktails.
                </p>

                <h2>Game testing</h2>
                <p>
                    I have worked with Sony Playstation as a game tester to provide feedback for games before they are released.
                </p>
            </section>

            <figure>
                <img src="pictures/astrorocksmenu.gif" alt="Astro Rocks game menu" title="Astro Rocks Menu" width="400" height="400" class="astrorocks" />
                <figcaption><cite>Astro Rocks menu (My game)</cite></figcaption>
            </figure>

            <figure>
                <img src="pictures/astrorocks.gif" alt="Astro Rocks gameplay" title="Astro Rocks Gameplay" width="400" height="400" class="astrorocks" />
                <figcaption><cite>Astro Rocks gameplay</cite></figcaption>
            </figure>
        </article>
    </div>

    <div class="footer">
        <p><i>Copyright &copy; 2022 Dylan Karrass</i></p>
    </div>


</body>
</html>
