
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Gravityfeed | Home</title>

  <link rel="stylesheet" href="./css/font-awesome.min.css">
  <link rel="stylesheet" href="./css/ionicons.min.css">
  
  <link rel="stylesheet" href="/css/bulma.css">
  <link rel="stylesheet" href="/css/main.css">

  <link href="style/type/fontello.css" rel="stylesheet">
  <link href="style/type/budicons.css" rel="stylesheet">

</head>

<body class="layout-default">



  <section class="hero is-primary">
    <div class="hero-head">
      <div class="container">
        <nav class="nav">
          <div class="nav-left">
            
          </div>

          <div class="nav-center">
            <a class="nav-item is-brand" href="#">
              GRAVITYFEED
            </a>
          </div>

          <div class="nav-right nav-menu">
            <span class="nav-item">
             Welcome back, <?php echo $userRow['user_name']; ?>
            </span>
          </div>
        </nav>

      </div>
    </div>

    <div class="hero-body">

    </div>
    
    <div class="hero-foot">
    <div class="container">
      <nav class="tabs is-boxed is-centered">
        <ul>
          <li class="<?= (!isset($_GET['a']) && !isset($_GET['p']) && !isset($_GET['s'])) ? 'is-active' : '' ?>">
            <a  href="newsfeed.php">
              <span class="icon">
                <i class="ion-waterdrop"></i>
              </span>
              Droplets
            </a>
          <li class="<?= (isset($_GET['a'])) ? 'is-active' : '' ?>">
            <a class="nav-item is-tab " href="newsfeed.php?a=<?php echo $userRow['user_name']; ?>">
              <span class="icon">
                <i class="ion-planet"></i>
              </span>
              Asteroids
            </a>
          <li class="<?= (isset($_GET['p']) || isset($_GET['s'])) ? 'is-active' : '' ?>">
            <a class="nav-item is-tab " href="newsfeed.php?p=<?php echo $userRow['user_name']; ?>&d=true">
              <span class="icon">
                <i class="ion-ios-body"></i>
              </span>
              Profile
            </a>
          </li>
        </ul>
      </nav></div>
    </div>
  </section>



    <?php 
    if (isset($_GET['a'])):

      require './partials/asteroids.partials.php';
      require 'asteroids.view.php';

    elseif(isset($_GET['p'])):

      require './partials/profile.partials.php';
      require 'profile.view.php';

    elseif(isset($_GET['s'])):

      require './partials/settings.partials.php';
      require 'settings.view.php';
    
    else:

      require './partials/timeline.partials.php';
      require 'timeline.view.php';

    endif;
    ?>

  <?php require("includes/footer.php"); ?>


  <script src="/js/jquery-2.2.0.min.js"></script>
  <script src="/js/clipboard.min.js"></script>
  <script src="/js/bulma.js"></script>

  <script type="text/javascript">
    $('.model-button').click(function() {
      var target = $(this).data('target');
      $('html').addClass('is-clipped');
      $(target).addClass('is-active');
    });
    </script>

  </body>
</html>
