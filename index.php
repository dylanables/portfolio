<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dylan Ables Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/76f7bb6a7c.js" crossorigin="anonymous"></script>
</head>

<body>
    
    <header class="header" id="nav">
        <a href="#parallax" class="logo navbar-item">Dylan Ables</a>
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu">
            <li><a href="#about" id="about-link">About</a></li>
            <li><a href="#projects" id="projects-link">Projects</a></li>
            <li><a href="#contact" id="contact-link">Contact</a></li>
        </ul>
    </header>

    <section class="parallax" id="parallax">
        <div class="parallax_layer" id="seattle"></div>
        <div class="parallax_layer" id="clouds-right"></div>
        <div class="parallax_layer" id="moon"></div>
        <div class="parallax_layer" id="clouds-left"></div>
        <div class="parallax_layer" id="mountain5"></div>
        <div class="parallax_layer" id="mountain4"></div>
        <div class="parallax_layer" id="mountain3"></div>
        <div class="parallax_layer" id="mountain2"></div>
        <h2 id="text">Hi, I'm Dylan.</h2>
        <div class="parallax_layer" id="mountain1"></div>
        <div class="parallax_layer" id="trees"></div>
    </section>

    <section class="about" id="about">
        <h2>About Me</h2>
        <p>I'm a full-stack web developer in Seattle, WA. I'm passionate about building intuitive and elegant websites for cleints ranging from individuals to large enterprise corporations.</p>
        <h2>Tech</h2>
        <ul>
            <li>HTML</li>
            <li>CSS</li>
            <li>JavaScript</li>
            <li>React.js</li>
            <li>MongoDB</li>
            <li>MySQL</li>
        </ul>
    </section>

    <section class="projects" id="projects">
        <h2>Projects</h2>
        <p>Have a look at the projects I've built.</p>
        <div class="projects-container">
            <div class="project-card">
                <h3>Find Paddle</h3>
                <div class="project-image-container">
                    <img src="images/findpaddle.jpeg" alt="FindPaddle.com" class="project-image" />
                    <div class="project-image hidden">
                        React.js<br/>
                        CSS<br/>
                        Node.js<br/>
                        Express<br/>
                        MongoDB<br/>
                    </div>
                </div>
                <p>FindPaddle.com offers multiple different tools for find the right pickleball paddle for you. 
                This project required advanced data filtering, a unique recommendation algorithm, and a similiarity score algorithm.</p>
                <div class="project-buttons">
                    <a href="https://findpaddle.com" class="project-link" target="_blank">
                        <button class="pushable">
                            <span class="front">
                                <i class="fa-solid fa-arrow-up-right-from-square"></i> Open
                            </span>
                        </button>
                    </a>
                    <a href="https://github.com/dylanables/findpaddle" class="project-link" target="_blank">
                        <button class="pushable">
                            <span class="front">
                                <i class="fa-brands fa-github" style="color: #ffffff;"></i> Github
                            </span>
                        </button>
                    </a>
                </div>
            </div>
            <div class="project-card">
                <h3>Project Title</h3>
                <p>Placeholder for project description here...</p>
                <button class="pushable">
                    <span class="front">
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    </span>
                </button>
                <button class="pushable">
                    <span class="front">
                        <i class="fa-brands fa-github" style="color: #ffffff;"></i>
                    </span>
                </button>
            </div>
            <div class="project-card">
                <h3>Project Title</h3>
                <p>Placeholder for project description here...</p>
                <button class="pushable">
                    <span class="front">
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    </span>
                </button>
                <button class="pushable">
                    <span class="front">
                        <i class="fa-brands fa-github" style="color: #ffffff;"></i>
                    </span>
                </button>
            </div>
            <div class="project-card">
                <h3>Project Title</h3>
                <p>Placeholder for project description here...</p>
                <button class="pushable">
                    <span class="front">
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    </span>
                </button>
                <button class="pushable">
                    <span class="front">
                        <i class="fa-brands fa-github" style="color: #ffffff;"></i>
                    </span>
                </button>
            </div>
            <div class="project-card">
                <h3>Project Title</h3>
                <p>Placeholder for project description here...</p>
                <button class="pushable">
                    <span class="front">
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    </span>
                </button>
                <button class="pushable">
                    <span class="front">
                        <i class="fa-brands fa-github" style="color: #ffffff;"></i>
                    </span>
                </button>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <h2>Contact Me</h2>
        <p>Please reach out if you want to work with me.</p><br/>
        <form action="index.php" method="POST">
            <label for="email">Email: </label><br/>
            <input type="email" id="email" name="email" />
            <br/>
            <label for="message">Message: </label><br/>
            <textarea id="message" rows="5" cols="30" name="message"></textarea>
            <br/><br/>
            <button class="pushable" type="submit">
                <span class="front">
                    Send
                </span>
            </button>
        </form>
    </section>

    <section class="footer" id="footer">
        <p>Thanks for visiting!</p>
    </section>

    <script src="script.js"></script>

    <?php

    if (isset($_POST['email'])) {

        // REPLACE THIS 2 LINES AS YOU DESIRE
        $email_to = "hello@dylanables.com";
        $email_subject = "You've got a new contact form submission";

        function problem($error)
        {
            echo "Oh looks like there is some problem with your form data: <br><br>";
            echo $error . "<br><br>";
            echo "Please fix those to proceed.<br><br>";
            die();
        }

        // validation expected data exists
        if (
            !isset($_POST['email']) ||
            !isset($_POST['message'])
        ) {
            problem('Oh looks like there is something missing.');
        }

        $email = $_POST['email']; // required
        $message = $_POST['message']; // required

        $error_message = "";
        $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

        if (!preg_match($email_exp, $email)) {
            $error_message .= 'Email address does not seem valid.<br>';
        }

        $string_exp = "/^[A-Za-z .'-]+$/";


        if (strlen($message) < 2) {
            $error_message .= 'Message should not be less than 2 characters<br>';
        }

        if (strlen($error_message) > 0) {
            problem($error_message);
        }

        $email_message = "Form details following:\n\n";

        function clean_string($string)
        {
            $bad = array("content-type", "bcc:", "to:", "cc:", "href");
            return str_replace($bad, "", $string);
        }

        $email_message .= "Email: " . clean_string($email) . "\n";
        $email_message .= "Message: " . clean_string($message) . "\n";

        // create email headers
        $headers = 'From: ' . $email . "\r\n" .
            'Reply-To: ' . $email . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        @mail($email_to, $email_subject, $email_message, $headers);

        echo "Thanks for reaching out, I'll get back to you as soon as possible.";
    }
    ?>
</body>

</html>