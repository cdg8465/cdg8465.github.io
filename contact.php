<!DOCTYPE html>
<html>
    <head>
        <script src="https://kit.fontawesome.com/aafe38c52b.js" crossorigin="anonymous"></script>
    </head>
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/contactstyle.css">
    <body>
        <div class="topnav">
            <img class="logo" src="images/logo.png" width="60" height="60" ALT="align box" ALIGN=center>
            <a href="downloads/resume.pdf" download="Collin Giess Resume">Resume</a>
            <a class="active" href="contact.php">Contact</a>
            <a href="about.html">About</a>
            <a href="projects.html">Projects</a>
            <a href="index.html">Home</a>
        </div>
        <div class="root">
            <div class="container">
                <div class="leftpane">
                    <ul class="vertical-media">
                        <li>
                            <a href="https://github.com/cdg8465" aria-label="GitHub" target="_blank" rel="noreferrer">
                                <i class="fab fa-github fa-2x"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/collin-giess-085905220/" aria-label="LinkedIn" target="_blank" rel="noreferrer">
                                <i class="fab fa-linkedin-in fa-2x"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="content">
                    <div class="contact">
                        <div class="heading">
                            <h1 class="big-heading">Get in touch</h1>
                        </div>
                        <div class="description">
                            <p>I am looking for a co-op for the Summer/Fall of 2022.
                                Feel free to reach out!
                            </p>
                        </div>
                        <div class="form-div">
                            <form name="contact-form" action="contactform.php" method="post">
                                <div>
                                    Full name<br>
                                    <input type="text"id="name" name="name" required>
                                </div>
                                <div>
                                    Email address<br>
                                    <input type="text" id="email" name="email" required>
                                </div>
                                <div>
                                    Message<br>
                                    <textarea id="message" name="message" rows="10" cols="40" required></textarea>
                                </div>
                                <input type="submit" value="Send">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="rightpane">
                    <div class="vertical-email">
                        <a href="mailto:giesscollin@gmail.com">giesscollin@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>