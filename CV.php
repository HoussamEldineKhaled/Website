<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="CVStyle.css">

</head>




<body>
    <div class="header">

        <div class="DropDown">
            <span>Menu</span>
            <div class="DropDownContent">
                <a href="CV.php?username=<?php echo urlencode($_GET["username"]); ?>" style="color: whitesmoke; text-decoration:none">My CV</a>
                <a href="Gallery.php?username=<?php echo urlencode($_GET["username"]); ?>" style="color: whitesmoke; text-decoration:none">Gallery</a>
                <a href="Contact.php?username=<?php echo urlencode($_GET["username"]); ?>" style="color: whitesmoke; text-decoration:none">Contact Us</a>
            </div>

        </div>

        <a href="LogOut.php" class="LogOut" style="text-decoration: none;">Log out</a>



    </div>
    <div class="parentDiv">
        <div class="div1">
            <div class="profileText">
                <h2>Welcome
                    <?php echo htmlspecialchars($_GET["username"]); ?>
                </h2>
                <h1 style="font-size:34px;margin-top: 40px;">I am Houssam Khaled<br></h1>
                <h2>Computer Science</h2>
            </div>


            <div class="subtitles">
                <h2>Contact Info</h2>
            </div>
            <h3 class="info">Email:</h3>
            <p>houssam.khaled@lau.edu</p>
            <h3 class="info">Phone Number:</h3>
            <p>000000000</p>
            <h3 class="info">Linkedin Page:</h3>
            <p>houssam.khaled@lau.edu</p>
            <div class="subtitles">
                <h2>Skills</h2>
            </div>
            <ul>
                <li>Programming Languages:
                    <ol>
                        <li>Python</li>
                        <li>Java</li>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>JavaScript(JQuery library)</li>
                        <li>SQL</li>
                    </ol>
                </li>
                <li>Reading</li>
                <li>Research</li>
            </ul>
            <div class="subtitles">
                <h2>Languages</h2>
            </div>
            <ul>
                <li>English</li>
                <li>Arabic</li>
                <li>French (B1)</li>
            </ul>



        </div>

        <div class="div2">
            <div class="imgBx" style="width: 100%; height: 300px;">
                <img src="Pictures/rando.webp" class="plant">
            </div>
            <div class="rCV">
                <h2 class="rSubtitle">Introduction:</h2>
                <p>Welcome to the CV section of the website. My name
                    is Houssam El Dine Khaled and I am a computer science major
                    at the Lebanese American University (LAU). In this page, I will be
                    presenting some background about my education, extracurriculars, and hobbies. Enjoy the CV
                </p>
                <h2 class="rSubtitle">Education:</h2>

                <ul>
                    <li>Saint Mary Orthodox College| Beirut, Lebanon Sept 2007 - July 2021<br>Lebanese Baccalaureate (Life Science)</li>
                    <li>Lebanese American University | Beirut, Lebanon Sept 2021 - Present<br>Bachelor of Computer Science</li>
                </ul>

                <h2 class="rSubtitle">Extracurriculars/Experience:</h2>
                <ul>
                    <li>Empowerment Through Integration(ETI) | Beirut, Lebanon
                        <br>June 2019 – August 2019
                        <br>Volunteer
                        <ol>
                            <li>Learned the experiences of the visually impaired through education programs</li>
                            <li>Helped out with preparations for activities and events.</li>
                            <li>Helped with the execution of those activities alongside other volunteers.</li>
                            <li>Learn to be a teamplayer</li>
                            <li>Communication skills were improved</li>
                        </ol>
                    </li>
                    <li>NASA Space Apps Hackathon | Jounieh, Lebanon
                        <br>Sept 2019 – Oct 2019
                        <br>Competitor in the “Star Dust” team
                        <ol>
                            <li>Co-leader of the team</li>
                            <li>Worked on organizing research and information related to the “Parker Solar Probe”</li>
                            <li>Learned a lot of web development skills including learning HTML and CSS</li>
                        </ol>
                    </li>
                    <li>IDS internship program | Beirut, Lebanon
                        <br>June 2023 - August 2023
                        <ol>
                            <li>Learned about .net core</li>
                            <li>Learned JavaScript(Jquery and Ajax)</li>
                            <li>Improved HTML and CSS skills</li>
                            <li>Improved SQL skills</li>
                            <li>Made a simple meeting booking website</li>
                        </ol>

                    </li>
                </ul>

                </ul>
            </div>


        </div>



    </div>




</body>

</html>