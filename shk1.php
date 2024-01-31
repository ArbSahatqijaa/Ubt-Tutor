<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shkenca Kompjuterike dhe Inxhinieri</title>
    <link rel="stylesheet" href="shk1.css?v=<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/20aab78e48.js" crossorigin="anonymous"></script></head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../Photo/Logo.png" alt="logo">
                </span>

                <!---Nav Bar----->

                <div class="text header-text">
                    <span class="name">UBT Tutor</span>
                    <span class="profession">Online Course</span>
                </div>
            </div>

            <i class="fa-solid fa-chevron-right toggle"></i>
        </header>
        <div class="menu-bar">
            <div class="menu">
                <li class="search-box">
                    <i class="fa-solid fa-magnifying-glass icon"></i>
                           <input type="search" placeholder="search...">
                        </i>
                </li>
                <ul class="menu-links">
                    <li class="nav-lin">
                        <a href="../Slider/HomeNavBar.php">
                            <i class="fa-solid fa-house icon"></i>
                                <span class="text nav-text"> Home </span>
                        </a>
                    </li>
                    <li class="nav-lin">
                        <a href="../Courses/Courses.php">
                            <i class="fa-regular fa-bookmark icon"></i>
                                <span class="text nav-text"> Courses </span>
                        </a>
                    </li>
                    <li class="nav-lin">
                        <a href="../News/news.php">
                           <i class="fa-regular fa-newspaper icon"></i>
                                <span class="text nav-text">News</span>
                        </a>
                    </li>
                    <li class="nav-lin">
                        <a href="../Staff/staff.php">
                            <i class="fa-solid fa-users icon"></i>
                                <span class="text nav-text"> Staff </span>
                        </a>
                    </li>
                    <li class="nav-lin">
                        <a href="../AboutUs/aboutus.php">
                            <i class="fa-solid fa-globe icon"></i>
                                <span class="text nav-text"> About Us </span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bottom-content">
                <li class="nav-lin">
                    <a href="../LoginForm/login.php">
                        <i class="fa-solid fa-right-from-bracket icon"></i>
                            <span class="text nav-text"> Log Out </span>
                    </a>
                </li>

                <li class="mode">
                       <div class="moon-sun">
                        <i class="fa-solid fa-moon icon moon"></i>
                        <i class="fa-regular fa-sun icon sun"></i>
                       </div>
                       <span class="mode-text text">Dark Mode</span>
                       <div class="toggle-switch">
                            <span class="switch"></span>
                       </div>
                </li>
            </div>
        </div>
    </nav>

    <!-- Perfundimi i NAV BAR -->

    <!-- Fillimi i Video Section -->


        <H3 class="heading">SHKENCA KOMPJUTERIKE - UBT TUTOR </H3>
        <H3 class="heading">HYRJE NE HTML</H3>
        <div class="container">
            <div class="main-video">
                <div class="video">
                    <video src="Videos/HTML Tutorial for Beginners - 00 - Introduction to HTML.mp4" controls></video>
                    <h3 class="title">01. Session 1 - Hyrje ne HTML</h3>
                </div>
            </div>

            <div class="video-list">
                <div class="vid active">
                    <video src="Videos/HTML Tutorial for Beginners - 03 - Ordered and Unordered lists.mp4"></video>
                    <h3 class="title">02. Session 2 - Unordered List & Ordered List</h3>
                </div>
                <div class="vid">
                    <video src="Videos/HTML Tutorial for Beginners - 04 - Creating a table.mp4"></video>
                    <h3 class="title">03. Session 3 - Tables in HTML</h3>
                </div>
                <div class="vid">
                    <video src="Videos/HTML Tutorial for Beginners - 00 - Introduction to HTML.mp4"></video>
                    <h3 class="title">04. Session 4 - Vazhdimi i Tabelave</h3>
                </div>
                <div class="vid">
                    <video src="Videos/HTML Tutorial for Beginners - 05 - Creating a web link.mp4"></video>
                    <h3 class="title">05. Session 5 - Linqet </h3>
                </div>
                <div class="vid">
                    <video src="Videos/HTML Tutorial for Beginners - 06 - Creating links within same web page.mp4"></video>
                    <h3 class="title">06. Session 6 - Vazhdimi i Linqeve</h3>
                </div>
                <div class="vid">
                    <video src="Videos/HTML Tutorial for Beginners - 07 - Adding a image to a web page.mp4"></video>
                    <h3 class="title">07. Session 7 - Images</h3>
                </div>
                <div class="vid">
                    <video src="Videos/HTML Tutorial for Beginners - 09 - Nested elements.mp4"></video>
                    <h3 class="title">08. Session 8 - Body In HTML</h3>
                </div>
                <div class="vid">
                    <video src="Videos/HTML Tutorial for Beginners - 10 - One-line text box.mp4"></video>
                    <h3 class="title">09. Session 9 - Forms</h3>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <footer class="text-center">
            <p>Copyright &copy; 2023 All rights reserved.</p>
        </footer>


        <script>

            let listVideo = document.querySelectorAll('.video-list .vid');
            let mainVideo = document.querySelector('.main-video video');
            let title = document.querySelector('.main-video .title');

            listVideo.forEach(video =>{
                video.onclick = () => {
                    listVideo.forEach(vid=>vid.classList.remove('active'));
                    video.classList.add('active');
                    if(video.classList.contains('active')){
                        let src = video.children[0].getAttribute('src');
                        mainVideo.src=src;
                        let text = video.children[1].innerHTML;
                        title.innerHTML=text;
                    };
                };
            });
        </script>
        <script src="../NavigationBar Script/HomeNavBar.js"></script>
</body>
</html>