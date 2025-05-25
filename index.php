<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Dylan Ables Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/76f7bb6a7c.js" crossorigin="anonymous"></script>
    <!-- Favicon -->
<link rel="icon" href="images/assets/favicon.ico" type="image/x-icon">

<!-- Apple Touch Icon -->
<link rel="apple-touch-icon" href="images/assets/apple-touch-icon.png">

<!-- PNG Favicons -->
<link rel="icon" type="image/png" sizes="192x192" href="images/assets/android-chrome-192x192.png">
<link rel="icon" type="image/png" sizes="512x512" href="images/assets/android-chrome-512x512.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/assets/favicon-16x16.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/assets/favicon-32x32.png">
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

        <div class="mouse-container" id="mouse-container">
            <a href="#about"><div class="mouse" id="mouse"></div></a>
        </div>
    </section>

    <section class="about" id="about">
        <h2>About Me</h2>
        <p>Hi, I&apos;m Dylan Ables! I enjoy building digital projects that combine thoughtful design, interactivity, and data. My work spans a range of tools and technologies (see below), and I'm always looking for ways to make ideas more engaging, functional, and insightful. Check out my projects below or use the contact form to get in touch!</p>
        <h2>Tech</h2>
        <div class="skills">
            <div class="skill">
                <img src="images/tech/javascript.png" alt="JavaScript" />
                <p>JavaScript</p>
            </div>
            <div class="skill">
                <img src="images/tech/typescript.png" alt="TypeScript" />
                <p>TypeScript</p>
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
                <img src="images/tech/python.png" alt="Python" />
                <p>Python</p>
            </div>
            <div class="skill">
                <img src="images/tech/git.png" alt="Git" />
                <p>Git</p>
            </div>
            <div class="skill">
                <img src="images/tech/sql.png" alt="SQL" />
                <p>SQL</p>
            </div>
            <div class="skill">
                <img src="images/tech/tableau.png" alt="Tableau" />
                <p>Tableau</p>
            </div>
            <div class="skill">
                <img src="images/tech/excel.png" alt="Excel" />
                <p>Excel</p>
            </div>
        </ul>
    </section>

    <section class="projects" id="projects">
        <h2>Projects</h2>
        <div class="projects-container">
        <div class="project-card">
                <h3>Find Paddle</h3>
                <div class="project-image-container">
                    <img src="images/findpaddle.jpg" alt="FindPaddle.com" class="project-image" />
                    <div class="stack">
                        Next.js<br/>
                        TypeScript<br/>
                        Tailwind CSS<br/>
                        Prisma ORM<br/>
                        PostgreSQL<br/>
                    </div>
                </div>
                <p class="project-desc">
                    FindPaddle.com is a platform designed to help users discover the perfect pickleball paddle. 
                    This project features advanced data filtering, a custom recommendation algorithm, and automated web scraping to keep product data up to date.
                </p>
                <div class="project-buttons">
                    <a href="https://findpaddle.com" class="project-link" target="_blank">
                        <button class="pushable">
                            <span class="front">
                                <i class="fa-solid fa-arrow-up-right-from-square"></i> Open
                            </span>
                        </button>
                    </a>
                    <a href="https://github.com/dylanables/fp" class="project-link" target="_blank">
                        <button class="pushable">
                            <span class="front">
                                <i class="fa-brands fa-github" style="color: #ffffff;"></i> Github
                            </span>
                        </button>
                    </a>
                </div>
            </div>

            <div class="project-card">
                <h3>Survivor Stats</h3>
                <div class="project-image-container">
                    <img src="images/survivorstats.png" alt="SurvivorStats.com" class="project-image" />
                    <div class="stack">
                        Next.js<br/>
                        TypeScript<br/>
                        Tailwind CSS<br/>
                        Recharts<br/>
                        PostgreSQL<br/>
                    </div>
                </div>
                <p class="project-desc">
                    SurvivorStats.com is an interactive site that analyzes data from the hit show Survivor. 
                    It showcases trends, statistics, and visualizations to explore gameplay patterns, contestant performance, and season dynamics.
                </p>
                <div class="project-buttons">
                    <a href="https://survivorstats.com" class="project-link" target="_blank">
                        <button class="pushable">
                            <span class="front">
                                <i class="fa-solid fa-arrow-up-right-from-square"></i> Open
                            </span>
                        </button>
                    </a>
                    <a href="https://github.com/dylanables/survivorstats" class="project-link" target="_blank">
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
                        Javascript<br/>
                        OpenAI API<br/>
                    </div>
                </div>
                <p class="project-desc">
                    GeneratePuzzles.com is a puzzle generator that instantly creates word search and crossword puzzles. 
                    Utilizing OpenAI's API, users can enter any topic and the site will generate relevant words and clues to build unique puzzles.
                    JavaScript powers the interactive gameplay, enabling smooth puzzle solving directly in the browser.
                </p>
                <div class="project-buttons">
                    <a href="https://generatepuzzles.com" class="project-link" target="_blank">
                        <button class="pushable">
                            <span class="front">
                                <i class="fa-solid fa-arrow-up-right-from-square"></i> Open
                            </span>
                        </button>
                    </a>
                    <a href="https://github.com/dylanables/generatepuzzles" class="project-link" target="_blank">
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