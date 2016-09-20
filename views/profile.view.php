<?php

?>

<nav class="nav has-shadow">
  <div class="container">
    <div class="nav">

      <a class="nav-item is-tab " href="newsfeed.php?p=<?php echo $userRow['user_name']; ?>&d=true">
        <div class="media-content">

          <p class="title is-5 has-text-centered"><?= $PersonalDropletCount ?></p>
          <p class="subtitle is-6 has-text-centered">
            Droplets
          </p>
        </div>
      </a>

      <a class="nav-item is-tab" href="#">

        <div class="media-content">
          <p class="title is-5 has-text-centered"><?php echo $userRow['user_pulling']; ?></p>
          <p class="subtitle is-6 has-text-centered">
            Pulling
          </p>
        </div>
      </a>

      <a class="nav-item is-tab " href="#">        
      <div class="media-content">
          <p class="title is-5 has-text-centered"><?php echo $userRow['user_pulled']; ?></p>
          <p class="subtitle is-6 has-text-centered">Pulled</p>
        </div>
      </a>
      
      <a class="nav-item is-tab " href="#">        
      <div class="media-content">
          <p class="title is-5 has-text-centered"><?php echo $userRow['user_love']; ?></p>
          <p class="subtitle is-6 has-text-centered">
            Love
          </p>
        </div>
      </a>
    </div>
    <div class="nav-right">
      <a class="nav-item is-tab has-text-centered" href="newsfeed.php?p=<?php echo $userRow['user_name']; ?>&s=true">
        <span class="icon">
          <i class="ion-settings"></i>
        </span>
        Settings
      </a>
      <a class="nav-item is-tab has-text-centered" href="logout.php">
        <span class="icon">
          <i class="ion-log-out"></i>
        </span>
        Logout
      </a>
    </div>
  </div>
</nav>


<section class="section">

    <?php 
    if (isset($_GET['p']) && isset($_GET['d'])):
      if ($_GET['d'] == 'true'):
        require 'views/profile/droplets.view.php';
      else:
        echo 'url not set';
      endif;

      

    elseif(isset($_GET['p']) && isset($_GET['s'])):
      if ($_GET['s'] == 'true'):

        require './partials/settings.partials.php';
        require 'views/profile/settings.view.php';

      else:
        echo 'url not set';
      endif;
      
    // elseif(isset($_GET['s'])):

    //   require './partials/settings.partials.php';
    //   require 'settings.view.php';
    
    else:

     echo "lol";

    endif;
    ?>

</section>


