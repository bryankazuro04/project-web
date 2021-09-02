<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tag -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <link rel="stylesheet" href="bio_style.css">
    <link rel="icon" type="image/png" href="favicon_created_by_logaster.ico">
    <title>About Me</title>
</head>

<body>
    <!-- Scroll Bar -->
    <div id="progressbar"></div>
    <div id="scrollpath"></div>

    <!-- Navbar -->
    <header class="site-header">
        <nav class="navbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="https://bryankazuro.epizy.com/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>

                <li class="nav-item">
                    <a class="navbar-brand">Bryan Kazuro</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="Bio.php">About Me</a>
                </li>
            </ul>
        </nav>
    </header>
    <!-- Navbar End -->

    <section class="title">
        <h1>Biodata</h1>
    </section>

    <section class="music">
        <audio src="FutBass.mp3" controls autoplay></audio>
    </section>

    <section class="content">
        <div class="form-table">
            <table border="0">
                <tr>
                    <th height="50">Name</th>
                    <td>:</td>
                    <td height="50">Muhammad Alana Fauzan</td>
                </tr>

                <tr>
                    <th height="50">Birth</th>
                    <td>:</td>
                    <td height="50">July 04, 2001</td>
                </tr>

                <tr>
                    <th height="50">Gender</th>
                    <td>:</td>
                    <td height="50">Male</td>
                </tr>

                <tr>
                    <th height="50">Country</th>
                    <td>:</td>
                    <td height="50">Indonesia</td>
                </tr>

                <tr>
                    <th height="50">Skill</th>
                    <td>:</td>
                    <td height="50">Program Language (Java, Python, C++), HTML, PHP</td>
                </tr>

                <tr>
                    <th height="50">Hobby</th>
                    <td>:</td>
                    <td height="50">Playing Games, Produce Music, etc.</td>
                </tr>
            </table>
        </div>
    </section>

    <section class="contact">
        <div class="sosmed-icon">
            <ul class="icon">
                <li class="icon-logo">
                    <a href="https://www.youtube.com/channel/UCcyE2WfpW11eXOP9kN0k6iA">
                        <i class="fab fa-youtube" aria-hidden="true"></i>
                    </a>
                </li>


                <li class="icon-logo">
                    <a href="https://web.facebook.com/BryanKazuro04">
                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                    </a>
                </li>

                <li class="icon-logo">
                    <a href="https://www.instagram.com/bryan.kazuro/">
                        <i class="fab fa-instagram" aria-hidden="true"></i>
                    </a>
                </li>

                <li class="icon-logo-envelope">
                    <a href="mailto:mhdalana211201@gmail.com">
                        <i class="far fa-envelope" aria-hidden="true"></i>
                    </a>
                </li>

                <li class="icon-logo">
                    <a href="https://soundcloud.com/bryan-kazuro-42337">
                        <i class="fab fa-soundcloud" aria-hidden="true"></i>
                    </a>
                </li>

                <li class="icon-logo">
                    <a href="https://github.com/bryankazuro04/">
                        <i class="fab fa-github" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <div class="copyright">
        <p>2021, Developed By Bryan Kazuro </p>
    </div>

    <script type="text/javascript">
        let progress = document.getElementById('progressbar');
        let totalHeight = document.body.scrollHeight - window.innerHeight;
        window.onscroll = function() {
            let progressHeight = (window.pageYOffset / totalHeight) * 100;
            progress.style.height = progressHeight + "%";
        }
    </script>
</body>

</html>