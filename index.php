<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
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
        <p>I'm a full-stack web developer in Seattle, WA. I'm passionate about building intuitive and elegant websites for clients ranging from individuals to large enterprise corporations.</p>
        <h2>Tech</h2>
        <div class="skills">
            <div class="skill">
                <img src="images/tech/html.png" alt="HTML" />
                <p>HTML</p>
            </div>
            <div class="skill">
                <img src="images/tech/css.png" alt="CSS" />
                <p>CSS</p>
            </div>
            <div class="skill">
                <img src="images/tech/tailwind.png" alt="Tailwind" />
                <p>Tailwind</p>
            </div>
            <div class="skill">
                <img src="images/tech/javascript.png" alt="JavaScript" />
                <p>JavaScript</p>
            </div>
            <div class="skill">
                <img src="images/tech/reactjs.png" alt="ReactJS" />
                <p>ReactJS</p>
            </div>
            <div class="skill">
                <img src="images/tech/nextjs.png" alt="NextJS" />
                <p>NextJS</p>
            </div>
            <div class="skill">
                <img src="images/tech/nodejs.png" alt="Node.js" />
                <p>Node.js</p>
            </div>
            <div class="skill">
                <img src="images/tech/express.png" alt="Express" />
                <p>Express</p>
            </div>
            <div class="skill">
                <img src="images/tech/mongodb.png" alt="MongoDB" />
                <p>MongoDB</p>
            </div>
            <div class="skill">
                <img src="images/tech/mysql.png" alt="MySQL" />
                <p>MySQL</p>
            </div>
            <div class="skill">
                <img src="images/tech/shopify.png" alt="Shopify" />
                <p>Shopify</p>
            </div>
            <div class="skill">
                <img src="images/tech/wordpress.png" alt="WordPress" />
                <p>WordPress</p>
            </div>
        </ul>
    </section>

    <section class="projects" id="projects">
        <h2>Projects</h2>
        <p>Have a look at the projects I've built.</p>
        <div class="projects-container">
        <div class="project-card">
                <h3>Find Paddle</h3>
                <div class="project-image-container">
                    <img src="images/findpaddle.jpg" alt="FindPaddle.com" class="project-image" />
                    <div class="stack">
                        React.js<br/>
                        CSS<br/>
                        Node.js<br/>
                        Express<br/>
                        MongoDB<br/>
                    </div>
                </div>
                <p class="project-desc">
                    FindPaddle.com provides a range of tools to help you discover the perfect pickleball paddle. 
                    This project involved advanced data filtering, a unique recommendation algorithm, and a similarity score algorithm.
                </p>
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
                <h3>Generate Puzzles</h3>
                <div class="project-image-container">
                    <img src="images/generatepuzzles.jpg" alt="GeneratePuzzles.com" class="project-image" />
                    <div class="stack">
                        Python<br/>
                        Flask<br/>
                        Javascript<br/>
                        OpenAI API<br/>
                    </div>
                </div>
                <p class="project-desc">
                    GeneratePuzzles.com instantly creates word search and crossword puzzles. 
                    Utilizing OpenAI's API, users only need to enter a topic, and the website 
                    will generate all the words and corresponding clues for the puzzle.
                </p>
                <div class="project-buttons">
                    <a href="https://generatepuzzles.com" class="project-link" target="_blank">
                        <button class="pushable">
                            <span class="front">
                                <i class="fa-solid fa-arrow-up-right-from-square"></i> Open
                            </span>
                        </button>
                    </a>
                    <a href="https://github.com/dylanables/puzzlegenerator" class="project-link" target="_blank">
                        <button class="pushable">
                            <span class="front">
                                <i class="fa-brands fa-github" style="color: #ffffff;"></i> Github
                            </span>
                        </button>
                    </a>
                </div>
            </div>
            <div class="project-card">
                <h3>Portfolio</h3>
                <div class="project-image-container">
                    <img src="images/portfolio.jpg" alt="DylanAbles.com" class="project-image" />
                    <div class="stack">
                        HTML<br/>
                        CSS<br/>
                        JavaScript<br/>
                        PHP<br/>
                    </div>
                </div>
                <p class="project-desc">
                    This is my personal portfolio page, showcasing parallax scrolling, 
                    responsive (mobile-friendly) elements, and a PHP contact form.
                </p>
                <div class="project-buttons">
                    <a href="https://dylanables.com" class="project-link" target="_blank">
                        <button class="pushable">
                            <span class="front">
                                <i class="fa-solid fa-arrow-up-right-from-square"></i> Open
                            </span>
                        </button>
                    </a>
                    <a href="https://github.com/dylanables/portfolio" class="project-link" target="_blank">
                        <button class="pushable">
                            <span class="front">
                                <i class="fa-brands fa-github" style="color: #ffffff;"></i> Github
                            </span>
                        </button>
                    </a>
                </div>
            </div>
            
        </div>
    </section>

    <section class="contact" id="contact">
        <h2>Contact Me</h2>
        <p>Please reach out if you want to work with me.</p><br/>
        <?php
        if (isset($_POST['email'])) {

            $email_to = "hello@dylanables.com";
            $email_subject = "You've got a new contact form submission";

            $error_message = "";

            // validation expected data exists
            if (isset($_POST['email']) && isset($_POST['message'])) {
                $email = $_POST['email']; // required
                $message = $_POST['message']; // required

                $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
                if (preg_match($email_exp, $email)) {

                    $string_exp = "/^[A-Za-z .'-]+$/";
                    if (strlen($message) > 5) {

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

                        echo "<span class='sent-msg'>Thanks for reaching out, I'll get back to you as soon as possible.</span><br/><br/>";

                    } else {
                        $error_message .= 'Message not long enough, please re-try with longer message.<br/>';
                    }

                } else {
                    $error_message .= 'Email address is not valid, please re-try with another email.<br/>';
                }

            } else {
                $error_message .= 'Uh oh, looks like there is something missing.<br/>';
            }
        
            if (strlen($error_message) > 1) {
                echo "<span class='error-msg'>" . $error_message . "</span><br/>";
            }
        }
        ?>
        <form action="index.php#contact" method="POST">
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

</body>

</html>