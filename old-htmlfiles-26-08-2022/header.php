<?php
 $pgname=basename($_SERVER['PHP_SELF']);
?>


<div class="top_nav">
<div class="">
        
    <div class="left_bar">
        <div class="user_box_link">
            <a href="#"><i class="fa fa-envelope"></i>  info@shaftmultimedia.com</a>
        </div>
    </div> 
                        
    <div class="user_box  right-bar">
        <div class="phone user_box_login "><i class="fa fa-phone"></i> &nbsp; +91-92471 69695 </div>
   </div>
        
</div>
</div><!-- end top navigation links -->


<div class="clearfix"></div>


<header class="header">
    <div class="container">
      <!-- Logo -->
      <div class="logo"><a href="index.php" id="logo"></a></div>
      <!-- Navigation Menu -->
      <div class="menu_main ">
        <div class="navbar yamm navbar-default">
          <div class="navbar-header">
            <div class="navbar-toggle .navbar-collapse .pull-right " data-toggle="collapse" data-target="#navbar-collapse-1" > <span>Menu</span>
              <button type="button" > <i class="fa fa-bars"></i></button>
            </div>
          </div>
          <div id="navbar-collapse-1" class="navbar-collapse collapse pull-right">
            <nav>
              <ul class="nav navbar-nav">
                <li class="dropdown yamm-fw"> <a href="index.php" class="dropdown-toggle  <?php if($pgname=='index.php') echo 'active';?>" >Home</a> </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle">About Us</a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="vision-mision.php">Vision & Mision</a></li>
                    <li><a href="#">Infrastructure</a></li>
                    <li><a href="#">Founders</a></li>
                    <li><a href="#">Events</a></li>
                  </ul>
                </li>
                <li class="dropdown"><a href="#"  class="dropdown-toggle <?php if($pgname=='3d-animation-course.php' || $pgname=='vfx-course-training-with-Job-guarantee.php' || $pgname=='game-designing-course-in-hyderabad.php' || $pgname=='digital-marketing.php' || $pgname=='3d-interior-designing-course.php' || $pgname=='video-editing-course-training-institute.php' || $pgname=='2d-animation-course-in-hyderabad.php') echo 'active';?>">Courses</a>
                    <ul class="dropdown-menu" role="menu">
                        <li class="dropdown-submenu mul"> <a tabindex="-1" href="#">Academy</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="intermediate-in-computer-graphics-animation.php">Intermediate in Computer Graphics & Animation</a></li>
                                <li><a href="degree-in-visual-communication.php">Degree in Visual Communication</a></li>
                                <li><a href="PG-program-in-MSC-and-MBA.php">PG Program in MSC and MBA </a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu mul"> <a tabindex="-1" href="#">Diploma</a>
                            <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-submenu mul"> <a tabindex="-1" href="#">Computer Graphics Course</a>
                      <ul class="dropdown-menu">
                        <li><a href="3d-animation-course.php">3D Animation Course</a></li>
                        <li><a href="vfx-course-training-with-Job-guarantee.php">Visual Effect (VFX) Course </a></li>
                        <li><a href="game-designing-course-in-hyderabad.php">Game Designing Course</a></li>
                        <!--<li><a href="#">Multimedia Course</a></li>
                        <li><a href="#">UI/UX Desigining Course</a></li>-->
                        <li><a href="graphic-web-designing-course.php">Graphic & Web Designing Course</a></li>
                        <li><a href="digital-marketing.php">Digital Marketing Course</a></li>
                        <li><a href="3d-interior-designing-course.php">3D  Interior Designing Course</a></li>
                        <li><a href="video-editing-course-training-institute.php">Video Editing Course</a></li>
                        <li><a href="2d-animation-course-in-hyderabad.php">2D Animation Course</a></li>
                        <!--<li><a href="#">Media Academics Inter & Degree</a></li>-->
                      </ul>
                    </li>
                    <li class="dropdown-submenu mul"> <a tabindex="-1" href="#">Film Making Courses</a>
                      <ul class="dropdown-menu">
                        <!--<li><a href="#">Digital Film Making</a></li>-->
                        <li><a href="film-and-television-production-course.php">Film and Television Production Course </a></li>
                        <li><a href="acting-course-in-hyderabad.php">Acting Course</a></li>
                        <li><a href="anchoring-news-reading-training.php">Anchoring and News Reading Training</a></li>
                        <li><a href="script-writing-course-in-hyderabad.php">Script Writing Course</a></li>
                        <li><a href="direction-course-in-hyderabad.php">Direction Course</a></li>
                        <li><a href="production-management-course.php">Production Managment Courses</a></li>
                        <li><a href="cinematography-course-in-hyderabad.php">Cinematography Courses</a></li>
                        <li><a href="editing-course-in-hyderabad.php">Editing Course </a></li>
                        <li><a href="dubbing-and-voice-over-artist.php">Dubbing and Voice Over Artist</a></li>
                      </ul>
                    </li>
                    <li class="dropdown-submenu mul"> <a tabindex="-1" href="#">Fine Arts Courses</a>
                      <ul class="dropdown-menu">
                        <!--<li><a href="#">Drawing</a></li>
                        <li><a href="#">Painting</a></li>
                        <li><a href="#">Sculpturing</a></li>
                        <li><a href="#">Photography</a></li>-->
                        <li><a href="#">DFA</a></li>
                        <li><a href="#">BFA</a></li>
                        <!--<li><a href="#">Media Academics Inter & Degree</a></li>-->
                      </ul>
                    </li>
                  </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle">Multimedia</a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="multimedia-facts.php">Media Facts</a></li>
                     <li><a href="visual-media-concepts.php">Visual Media Concepts</a></li>
                    
                    <!--<li><a href="#">Media Opportunities</a></li>-->
                  </ul>
                </li>
                
                <li class="dropdown"><a href="#" class="dropdown-toggle">Placements</a>
                  <ul class="dropdown-menu" role="menu">
                  <li><a href="recruiters.php">Recruiters </a></li>
                    <li><a href="student-works.php">Students Works</a></li>
                  </ul>
                </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle">Blog</a></li>
                <li class="dropdown"><a href="contact.php" class="dropdown-toggle">Contact Us</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <!-- end Navigation Menu -->
    </div>
  </header>


<div class="clearfix"></div>