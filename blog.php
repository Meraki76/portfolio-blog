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

    <div class="bg1">                    
        <aside class="addblogbutton">
            <section>
                <form action="addBlog.php">
                    <input type="submit" value="Add Blog" />
                </form>
            </section>
        </aside>
        
        <aside class="months">
            <form action="" method="post" id="months">
                <p>Filter by Month:</p>
                <select name="month"; onchange="this.form.submit()";>
                    <option value="All">Select</option>
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                    <option value="All">All</option>
                </select>
            </form>
        </aside>

        <?php 
            include 'connect.php';
            if(isset($_POST['month'])){
                $month = $_POST['month'];
                if($month == "All"){
                    $result = $conn->query("SELECT * FROM posts");
                } else {
                    $result = $conn->query("SELECT * FROM posts WHERE MONTH(date) = '$month'");
                    if($result->num_rows == 0){
                        echo "<article class='blog'>";
                        echo "<section>";
                        echo "<h1>There are no blogs for this month!</h1>";
                        echo "</section>";
                        echo "</article>";
                    }
                }
            } else {
                $result = $conn->query("SELECT * FROM posts");
            }

            while($row = $result->fetch_assoc()) {
                echo "<article class='blog'>";
                echo "<section>";
                echo "<h1>" . $row['title'] . "</h1>";
                echo "<p style='text-align: left; font-size: 70%;'>";
                echo $row['date'];
                echo "<p>";
                echo "<p>" . $row['body'] . "</p>";
                echo "</section>";
                echo "</article>";
            }
            ?>

    </div>

    <div class="footer">
        <p><i>Copyright &copy; 2022 Dylan Karrass</i></p>
    </div>
</body>
</html>
