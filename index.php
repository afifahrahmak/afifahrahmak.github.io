<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
        href="https://fonts.googleapis.com/css2?family=Covered+By+Your+Grace&family=Montserrat:wght@200;400;500;800&family=Poppins:wght@200;400;500&family=Staatliches&display=swap"
        rel="stylesheet">
    <title>Dusty Memories</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 480px)" href="css/responsive.css">
    <link rel='stylesheet' media='screen and (min-width: 480px) and (max-width: 800px)' href='css/responsive.css' />
</head>

<!-- HEADER -->
<header>
    <div id="nav-menu">
        <div class="toggle-menu" onclick="toggle()"></div>
        <div class="toggle-menu" onclick="toggle(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
        <side class="side-bar">
            <ul>
                <li><a href="#home"><strong>HOME</strong></a></li>
                <li><a href="#about"><strong>ABOUT</strong></a></li>
                <li><a href="https://www.instagram.com/afifahrahmak" target="blank"><strong>GALLERY</strong> </a></li>
                <li><a href="#github_contribution"><strong>PORTFOLIO</strong></a></li>
                <li><a href="#contact"><strong>CONTACT ME</strong></a></li>
            </ul>
        </side>
    </div>
</header>

<!-- INDEX OR HOME -->

<body>
    <div id="home">
        <div class="landing">
            <h2>HELLO THERE,</h2>
            <h2>WELCOME TO MY PAGE. I AM </h2>
            <br>
            <h1 id="landing-effect">Afifah Rahma K</h1>
            <h3 id="slogan"> I am </h3><br>
            <p>I'd love to make aesthetic content of the moments or things.
                Cooking, coding, writing, reading, hiking, or climbing are
                the best thing I can't live without, oh watching Netflix too (who doesn't love that?).
                One fact about me, I'm a Geophysicist that switched careers to be a Developer.
                Woohoo yeah I turn a coffee into code now <br><b>#girlsintech</b></p>
        </div>
    </div>

    <!-- ABOUT -->
    <div id="about">
        <div class="profile">
            <h1>About me</h1>
            <img src="assets/pp2.jpg">
            <h3> AFI | 23 | FEMALE</h3>
            <h6>Jakarta, Indonesia - Hacktiv8</h6>
            <br>
            <!-- <h3> HI THERE !</h3> -->
            <p>
                I am highly motivated for both hard work and intelligent work to achieve certain purposes. Enthusiastic
                to learn new
                things in detail oriented, with logical and analytical aptitude. I have acquired a good level of
                computer litercay with
                extensive knowledge of data analysis and web-programming. I am an energetic creative type of person with
                interpersonal abilities, so i
                have remarkable organizational experiences which i accustomed with troubleshooting, team working and
                responsibility. I
                can lead or be led by, with good, organized communication and discipline in time management skills. My
                career objective
                are looking forward to get new journeys, experiences, and challenges in any occasion.
            </p>
            <br>
            <button><a href="#contact">DOWNLOAD CV</a></button>
        </div>
    </div>

    <div id="github_contribution">

        <div class="github-title">
            <h1>my github</h1>
            <h2>contribution</h2>
        </div>
        <div class="github-template">
            <div data="https://github.com/afifahrahmak" class="github-pinner flat" style="visibility: hidden;"></div>
            <script src="GitHubPinner.js"></script>
            <div class="github-repos">
                <div data="https://github.com/afifahrahmak/3D-Velocity-Modelling" class="github-pinner flat"
                    style="visibility: hidden;"></div>
                <div data="https://github.com/afifahrahmak/ES6-PHASE0" class="github-pinner flat"
                    style="visibility: hidden;"></div>
                <div data="https://github.com/afifahrahmak/algorithm-pseudocode" class="github-pinner flat"
                    style="visibility: hidden;"></div>
            </div>
        </div>
        <img class="imgCont" src="http://ghchart.rshah.org/d16644/afifahrahmak" alt="afifahrahmak github" />
    </div>

    <div id="contact">
        <div class="contact">
            <div class="getintouch">
                <h1 class="title">Get in touch</h1>
                <br>
                <p>Hey what's up?. Go ahead and drop me a line. You can also choose to find me as
                    <strong>@afifahrahmak</strong> elsewhere!
                </p>
                <ul class="socialmedia">
                    <li class="socmed">
                        <a href="https://www.github.com/afifahrahmak" target="_blank">
                            <img src="assets/git.png" alt="">
                        </a>
                    </li>
                    <li class="socmed">
                        <a href="https://www.expo.io/@afifahrahmak" target="_blank">
                            <img src="assets/expo.png" alt="">
                        </a>
                    </li>
                    <li class="socmed">
                        <a href="https://www.linkedin.com/afifahrahmak" target="_blank">
                            <img src="assets/link.png" alt="">
                        </a>
                    </li>
                    <li class="socmed">
                        <a href="https://www.instagram.com/afifahrahmak" target="_blank">
                            <img src="assets/ig.png" alt="">
                        </a>
                    </li>
                    <li class="socmed">
                        <a href="https://www.pinterest.com/afifahrahmak" target="_blank">
                            <img src="assets/pin.png" alt="">
                        </a>
                    </li>
                    <li class="socmed">
                        <a href="https://www.twitter.com/afifahrahmaks" target="_blank">
                            <img src="assets/twitter.png" alt="">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="contact-form">
                <h1 class="title">Write me!</h1>
                <hr>
                <form action="#" method="PUSH">
                    <input type="text" id="name" required placeholder="Y O U R  N A M E">
                    <input type="email" id="email" required placeholder="Y O U R  E M A I L">
                    <label style="letter-spacing: 5px;" for="">MESSAGE</label>
                    <textarea name="message" id="message" rows="6" required></textarea>
                    <input type="submit" name="submit" id="submit" value="Send">
                </form>
            </div>
        </div>
    </div>

</body>

<!-- FOOTER -->
<footer>
    <p class="slogan">"memories in a snap - capturing life, creating art and build the apps"</p>
</footer>
<div class="copyright">
    <p>Aimed for educational project. <strong>&copycopyright by Afifahrahmak </strong></p>
</div>


<script src="index.js"></script>

</html>