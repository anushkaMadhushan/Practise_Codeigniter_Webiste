<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="<?php echo base_url() ?>Resourcess/css/style.css" />
    <script src="https://kit.fontawesome.com/c66c7dc8d8.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="navbar">
        <div class="container flex">
            <h1 class="logo">W3iT</h1>
            <nav>
                <ul>
                    <li><a href="<?php echo site_url('Home') ?>">Home</a></li>
                    <li><a href="">Faculties</a></li>
                    <li><a href="<?php echo site_url('Home/About') ?>">About</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <?php $this->load->view($view_page) ?>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>ACADEMIC</h4>
                    <ul>
                        <li><a href="">Faculties A - Z</a></li>
                        <li><a href="">Departments A - Z</a></li>
                        <li><a href="">Institutes A - Z</a></li>
                        <li><a href="">Units & Centres A - Z</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>ABOUT</h4>
                    <ul>
                        <li><a href="">History</a></li>
                        <li><a href="">Vision & Mission</a></li>
                        <li><a href="">Logo & Branding</a></li>
                        <li><a href="">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>STUDY</h4>
                    <ul>
                        <li><a href="">Undergraduate</a></li>
                        <li><a href="">Graduate</a></li>
                        <li><a href="">External </a></li>
                        <li><a href="">Certi. & Diploma </a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href=""><i class="fa-brands fa-facebook"></i></a>
                        <a href=""><i class="fa-brands fa-youtube"></i></a>
                        <a href=""><i class="fa-brands fa-twitter"></i></a>
                        <a href=""><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>