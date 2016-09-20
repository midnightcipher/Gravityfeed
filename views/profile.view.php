<?php

?>

<nav class="nav has-shadow">
  <div class="container">
    <div class="nav">

      <a class="nav-item is-tab " href="newsfeed.php">
        <div class="media-content">

          <p class="title is-5 has-text-centered"><?= $PersonalDropletCount ?></p>
          <p class="subtitle is-6 has-text-centered">
            Droplets
          </p>
        </div>
      </a>



      <a class="nav-item is-tab" href="newsfeed.php?a=<?php echo $userRow['user_name']; ?>">

        <div class="media-content">
          <p class="title is-5 has-text-centered"><?php echo $userRow['user_pulling']; ?></p>
          <p class="subtitle is-6 has-text-centered">
            Pulling
          </p>
        </div>
      </a>

      <a class="nav-item is-tab " href="newsfeed.php?p=<?php echo $userRow['user_name']; ?>">        
      <div class="media-content">
          <p class="title is-5 has-text-centered"><?php echo $userRow['user_pulled']; ?></p>
          <p class="subtitle is-6 has-text-centered">Pulled</p>
        </div>
      </a>
      
      <a class="nav-item is-tab " href="newsfeed.php?s=<?php echo $userRow['user_name']; ?>">        
      <div class="media-content">
          <p class="title is-5 has-text-centered"><?php echo $userRow['user_love']; ?></p>
          <p class="subtitle is-6 has-text-centered">
            Love
          </p>
        </div>
      </a>
    </div>
    <div class="nav-right">
      <a class="nav-item is-tab has-text-centered" href="newsfeed.php?s=<?php echo $userRow['user_name']; ?>">
        <span class="icon">
          <i class="ion-settings"></i>
        </span>
        Settings
      </a>
    </div>
  </div>
</nav>


<div class="section">
<div class="">

 <section class="section main">
  <div class="container">
    <div class="columns">
      <div class="column is-3">
        <div class="card is-fullwidth">
          <div class="card-content">
            <a class="card-avatar">
              <img src="https://placehold.it/256x256" class="card-avatar-img">
            </a>

            <div class="card-user">
              <div class="card-user-name">
                <a href="http://gravityfeed.dev/newsfeed.php?p=<?php echo $userRow['user_name']; ?>">@<?php echo $userRow['user_name']; ?></a>
              </div>
            </div>

            <div class="card-stats">
              <ul class="card-stats-list">
                <li class="card-stats-item">
                  <a href="#" title="9.840 Tweet">
                    <span class="card-stats-key">Droplets</span>
                    <span class="card-stats-val"><?= $PersonalDropletCount ?></span>
                  </a>
                </li>
                <li class="card-stats-item">
                  <a href="#/following" title="885 Following">
                    <span class="card-stats-key">Pulling</span>
                    <span class="card-stats-val"><?php echo $userRow['user_pulling']; ?></span>
                  </a>
                </li>
                <li class="card-stats-item">
                  <a href="#">
                    <span class="card-stats-key">Pulled</span>
                    <span class="card-stats-val"><?php echo $userRow['user_pulled']; ?></span>
                  </a>
                </li>
                <li class="card-stats-item">
                  <a href="#">
                    <span class="card-stats-key">Love</span>
                    <span class="card-stats-val"><?php echo $userRow['user_love']; ?></span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="spacer"></div>
        <div class="box">
          <p>
            <span class="title is-5">
              <strong><?= $PersonalDropletCount ?></strong> droplets 
            </span> · <a href="#">View All</a>
          </p>
          <nav class="level">
            <div class="level-left">
              <div class="level-item">
                <form action="/newsfeed.php?p=<?php echo $userRow['user_name']; ?>" method="post">
                  <p class="control has-addons">   
                    <input name="profileSearchDroplets" id="SearchString" class="input" type="text" placeholder="Find a droplet">
                    <button type="submit" class="button">Search</button>
                  </p>
                </form>
              </div>
            </div>
          </nav>
        </div>
      </div>

      <div class="column is-9">
 <!--          <div class="notification is-danger">
            <button class="delete"></button>
            This template is not yet finished, it may change. Please check the readme for more information.
          </div> -->

    
    <?php
    if (isset($_POST['profileSearchDroplets'])):
      if ($SearchedUsersDroplets):
        foreach ($SearchedUsersDroplets as $searchedDroplet):
          require "snippets/profile_user_searched_droplets_snippet.php";
        endforeach;
        else:
          ?>

         <div class="notification is-danger has-text-centered">
            <span class="icon is-large">
            <i class="fa fa-space-shuttle"></i>
          </span><br>
          Result is lost in space...
        </div> 
        <?php
        endif;
        else:
          foreach ($UserDroplets as $droplet):
            require "snippets/profile_user_droplet_snippet.php";
          endforeach;
          endif;
          ?>
          <div class="columns">

          </div>
        </div>

        
      </div>
    </div>

  </div>
</div>
</div>
</section>


