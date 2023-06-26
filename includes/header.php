<?php

function getPageTitle()
{
   $pageTab = 'Portfolio';
   if (
      $_SERVER['REQUEST_URI'] == '/projects.php' ||
      strpos($_SERVER['REQUEST_URI'], 'projects')
   ) {
      $pageTab = 'Projects';
   } elseif ($_SERVER['REQUEST_URI'] == '/contact.php') {
      $pageTab = 'Contact';
   };

   return $pageTab;
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://kit.fontawesome.com/846f3c9da4.js" crossorigin="anonymous"></script>
   <link rel="icon" type="image/png" href="/imgs/favicon.png">
   <link rel="stylesheet" href="/css/style.css">
   <title>Connor Atkins | <?php echo getPageTitle(); ?></title>
</head>

<body>
   <div class="content_container">
      <header>
         <h1 class='logo'>
            <a href="/">Connor Atkins</a>
         </h1>
         <nav>
            <ul>
               <li>
                  <a class="<?php if (
                                 $_SERVER['REQUEST_URI'] == '/projects.php' ||
                                 strpos($_SERVER['REQUEST_URI'], 'projects')
                              )
                                 echo 'active' ?>" href="/projects.php">
                     <i class="fa-solid fa-folder-open fa-xs"></i> Projects
                  </a>
               </li>
               <li>
                  <a class="<?php if ($_SERVER['REQUEST_URI'] == '/contact.php') echo 'active' ?>" href="/contact.php">
                     <i class="fa-solid fa-envelope fa-xs"></i> Contact
                  </a>
               </li>
            </ul>
         </nav>
         <hr>
      </header>