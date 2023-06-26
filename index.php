<?php
require 'includes/header.php';
?>

<div class="about">
   <h3>yo!</h3>
   <p>
      Welcome to my portfolio. I am a self-taught web developer based in Cheshire, UK. Here, you will discover a collection of projects I have created. My preferred tools for development include PHP and React.
   </p>
</div>

<div class="index_projects">
   <div class="project">
      <a class="project_img" href="/projects/ehsan_portfolio.php">
         <img src="/imgs/projects/ehsan.png">
      </a>
      <div class="project_info">
         <h2>Ehsan Photography</h2>
         <p>A photography portfolio created to exhibit diverse collections of Ehsan's work.</p>
         <a class="view_details_btn" href="/projects/ehsan_portfolio.php">View Details <i class="fa-solid fa-chevron-right fa-xs"></i></a>
      </div>
   </div>

   <div class="project">
      <a href="/projects/meal_mate.php" class="project_img">
         <img src="/imgs/projects/meal_mate.png">
      </a>
      <div class="project_info">
         <h2>Meal Mate</h2>
         <p>Discover a variety of meal ideas through this recipe app designed to inspire.</p>
         <a class="view_details_btn" href="/projects/meal_mate.php">View Details <i class="fa-solid fa-chevron-right fa-xs"></i></a>
      </div>
   </div>

   <a class="more_projects_btn" href='/projects.php'>More projects <i class="fa-solid fa-chevron-right fa-xs"></i></a>
</div>

<?php
require 'includes/footer.php';
?>