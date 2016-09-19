
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Bulma is a CSS framework based on Flexbox and built with Sass">

  <title>Gravityfeed | Home</title>

  <link rel="stylesheet" href="./css/font-awesome.min.css">
  <link rel="stylesheet" href="./css/ionicons.min.css">
  
  <link rel="stylesheet" href="/css/bulma.css">
  <link rel="stylesheet" href="/css/style.css">

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
  </section>

<nav class="nav has-shadow">
  <div class="container">
    <div class="nav-center">
      <a class="nav-item is-tab " href="newsfeed.php">
        <span class="icon">
          <i class="ion-waterdrop"></i>
        </span>
        Droplets
      </a>
      <a class="nav-item is-tab " href="newsfeed.php?a=<?php echo $userRow['user_name']; ?>">
        <span class="icon">
          <i class="ion-planet"></i>
        </span>
        Asteroids
      </a>
      <a class="nav-item is-tab " href="newsfeed.php?p=<?php echo $userRow['user_name']; ?>">
        <span class="icon">
          <i class="ion-ios-body"></i>
        </span>
        Profile
      </a>
      <a class="nav-item is-tab " href="newsfeed.php?s=<?php echo $userRow['user_name']; ?>">
        <span class="icon">
          <i class="ion-settings"></i>
        </span>
        Settings
      </a>
    </div>
  </div>
</nav>
  
  <section class="section">
    <div class="container">
    <?php 
    if (isset($_GET['a']))
    {
      require 'asteroids.view.php';
    }
    else if(isset($_GET['p']))
    {
      require 'profile.php';
      require 'profile.view.php';
    }
    else if(isset($_GET['s'])) 
    {
      require 'settings.php';
      require 'settings.view.php';
    }
    else
    {
      require 'timeline.view.php';
    }
    ?>
    </div>
  </section>

  <?php require("includes/footer.php"); ?>



        <script async id="twitter-wjs" src="https://platform.twitter.com/widgets.js"></script>
        <script async type="text/javascript" src="https://s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script>

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
