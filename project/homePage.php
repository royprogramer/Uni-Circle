<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Destroy the session
    session_destroy();

    // Redirect to the landing page
    header("Location: /Project Files/project/Landing Page/landing_page.html");
}
?>

<!DOCTYPE html>

    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="./style.css">

        <title>GoCircle</title>
    </head>
    <body>
        <!--========== HEADER ==========-->
        <header class="header">
            <div class="header__container">
               
                <a href="#" class="header__logo"><h5>GoCircle</h5></a>
    
                <div class="header__search">
                    <i class='bx bx-search header__icon'></i>
                    <input type="search" placeholder="Search" class="header__input">            
                </div>
    
                <div class="header__toggle">
                    <i class='bx bx-menu' id="header-toggle"></i>
                </div>

                <nav class="nav_header">
                    <div class="create">
                        <a href="#"> 
                            <label for="create" class="btn btn-primary">Create a Circle</label>
                        </a>
                        <img src="./img/perfil.jpg" alt="" class="header__img" id="my-profile-pic">
                    </div>
                    
                </nav>
                
            </div>
            
        </header>

        <!--========== NAV ==========-->
            <div class="nav" id="navbar">
                <nav class="nav__container">
                    
                    <div>
                        <a href="#" class="nav__link nav__logo">
                           <!-- <img src="./img/Go.svg" alt=""> -->
                           <img src="./img/colors-colorful-circle-diagram.gif" alt="">

                            <span class="nav__logo-name"> <h5>GoCircle</h5></span>
                        </a>
        
                        <div class="nav__list">
                                
                                <a href="#" class="nav__link active">
                                    <i class='bx bx-home nav__icon' ></i>
                                    <span class="nav__name">Home</span>
                                </a>
    
                                <a href="#" class="nav__link">
                                     <i class='bx bx-user nav__icon' ></i>
                                     <span class="nav__name">Profile</span>
                                </a>
    
                                <a href="#" class="nav__link">
                                    <i class='bx bx-conversation nav__icon' ></i>
                                    <span class="nav__name">Discussions</span>
                                </a>
    
                                <a href="#" class="nav__link">
                                    <i class='bx bx-trophy nav__icon'></i>
                                    <span class="nav__name">Compititions</span>
                                </a>
    
                                <a href="#" class="nav__link">
                                    <i class='bx bxs-graduation nav__icon'></i>
                                    <span class="nav__name">Learn</span>
                                </a>
    
                                <a href="#" class="nav__link">
                                    <i class='bx bxs-network-chart nav__icon'></i>
                                    <span class="nav__name">Team</span>
                                </a>
    
                                <a href="#" class="nav__link">
                                    <i class='bx bx-medal nav__icon'></i>
                                    <span class="nav__name">Rank</span>
                                </a>
                            
        
                            <div class="nav__items">
                                <h3 class="nav__subtitle">Menu</h3>
        
                                <div class="nav__dropdown">
                                    <a href="#" class="nav__link">
                                        <i class='bx bxs-bar-chart-alt-2 nav__icon'></i>
                                        <span class="nav__name">Activity</span>
                                        <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                    </a>
    
                                    <div class="nav__dropdown-collapse">
                                        <div class="nav__dropdown-content">
                                            <a href="#" class="nav__dropdown-item">Recent Event</a>
                                            <a href="#" class="nav__dropdown-item">Host a Competition</a>
                                            <a href="#" class="nav__dropdown-item">Your work</a>
                                            <a href="#" class="nav__dropdown-item">Blog</a>
                                            <a href="#" class="nav__dropdown-item">CV</a>
                                        </div>
                                    </div>
    
                                </div>
    
                                <a href="#" class="nav__link">
                                    <i class='bx bx-compass nav__icon' ></i>
                                    <span class="nav__name">Explore</span>
                                </a>
                                <a href="#" class="nav__link">
                                    <i class='bx bx-book-reader nav__icon'></i>
                                    <span class="nav__name">Study plan</span>
                                </a>
                            </div>
                        </div>
                    </div>
    
                    <a href="logout_process.php" class="nav__link nav__logout">
    <i class='bx bx-log-out nav__icon' ></i>
    <span class="nav__name">Log Out</span>
</a>
                </nav>     
            </div>

        <!--========== CONTENTS ==========-->
            <div class="container">     
                <main class="main_content">
                    <div class="container2">
                        <div class="line">
                            <h3>Keep Going & Grow Together With Your Peers</h3>
                        </div>
                    </div>
                
                    <div class="glassy_overlay">
                        <canvas id="canvas"></canvas>
                    </div>
                </main>
                  
                <div class="content1"></div>
                <div class="content2">
                    <h2>My Circles</h2>

                   <div class="create-wrapper">

                        <div class="mycircle"> 
                            <img src="./img/ai_uiu.png" alt="">

                            <div class="header__img" id = "my-circle-picture">
                                <img src="./img/uiu.png" alt="">
                            </div>
                            <div class="para">
                                <p>Freshers of AI</p>
                            </div>
                        </div>
    
    
                        <div class="mycircle">
                             <img src="./img/architecture_hub.png" alt="">

                            <div class="header__img">
                                <img src="./img/buet.svg" alt="">
                            </div>
                            <div class="para">
                                <p>Architecture Hub</p>
                            </div>
                        </div>
    
    
                        <div class="mycircle">
                            <img src="./img/curiousity_club.png" alt="">

                            <div class="header__img" >
                                <img src="./img/sust.png" alt="">
                            </div>
                            <div class="para">
                                <p>Curiousity club</p>
                            </div>
                        </div>
    
                        <div class="mycircle">
                            <img src="./img/tm5.jpg" alt="">

                            <div class="header__img" >
                                <img src="./img/brac.png" alt="">
                            </div>
                            <div class="para">
                                <p>Be a Photographer</p>
                            </div>
                        </div>
    
    
                        <div class="mycircle">
                             <img src="./img/campion_club.png" alt="">

                            <div class="header__img" >
                                <img src="./img/du.png" alt="">
                            </div>
                            <div class="para">
                                <p>Campion League</p>
                            </div>
                        </div>
    
    
                        <div class="mycircle">
                            <img src="./img/course9.jpg" alt="">

                            <div class="header__img" >
                                <img src="./img/nsu.png" alt="">
                            </div>
                            <div class="para">
                                <p>Graphical Circle</p>
                            </div>
                        </div>

                    </div>

                </div>
               

                 <!-- <div class="post">
                    <form class="create" action="submit_circle.php" method="post" enctype="multipart/form-data">

                        <input class="circle_img" type="file" id="formFile">
                        <input type="text" placeholder="circle name"></form>
                        <input type="text" placeholder="university name"></input>
                        <input class="university_img" type="file" id="formFile">
                        <div class="catagory">
                            <label class="catagory-text" for="inputGroupSelect01">Catagory</label>
                            <select class="form-select" id="inputGroupSelect01">
                              <option selected>Choose...</option>
                              <option value="1">Academic</option>
                              <option value="2">Engineering</option>
                              <option value="3">Skill Develop</option>
                              <option value="4">Research</option>
                            </select>
                          </div>
                            <textarea class="driscription" placeholder="Circle Driscription" id="floatingTextarea2" style="height: 100px"></textarea>
                          <input class="btn btn-primary" type="submit" value="Create">
                    </form>
                </div> -->

          
                <div class="content3"></div>
                <footer class="footer_content"></footer>
            </div>

        


        
        <!--========== MAIN JS ==========-->
        <script src="./main.js"></script>

       
    </body>
</html>