<?php

?>
<div class="container profile">
    <div class="section profile-heading">
      <div class="columns">
        <div class="column is-2">
          <div class="image is-128x128 avatar">
            <img src="https://placehold.it/256x256">
          </div>
        </div>
        <div class="column is-4 name">
          <p>
            <span class="title is-bold"><?php echo $userRow['user_name']; ?></span>
            <span class="button is-primary is-outlined follow">Pull</span>
          </p>
          <p class="tagline"><?php echo $userRow['user_tagline']; ?></p>
        </div>
        <div class="column is-2 followers has-text-centered">
          <p class="stat-val"><?php echo $userRow['user_pulling']; ?></p>
          <p class="stat-key">pullers</p>
        </div>
        <div class="column is-2 following has-text-centered">
          <p class="stat-val"><?php echo $userRow['user_pulled']; ?></p>
          <p class="stat-key">pulled</p>
        </div>
        <div class="column is-2 likes has-text-centered">
          <p class="stat-val"><?php echo $userRow['user_love']; ?></p>
          <p class="stat-key">love</p>
        </div>
      </div>
    </div>

    <div class="profile-options">
      <div class="tabs is-fullwidth">
        <ul>
          <li class="link"><a><span class="icon"><i class="ion ion-waterdrop"></i></span> <span>My Droplets</span></a></li>
        </ul>
       <!--  
       <ul>
          <li class="link"><a><span class="icon"><i class="fa fa-square"></i></span> <span>Mentions</span></a></li>
        </ul> -->
      </div>
    </div>

    <div class="box">
      <nav class="level">
        <div class="level-left">
          <div class="level-item">
            <p class="subtitle is-5">
              <strong><?= $PersonalDropletCount ?></strong> droplets
            </p>
          </div>
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
    <?php
    if (isset($_POST['profileSearchDroplets'])):
      if ($SearchedUsersDroplets):
        foreach ($SearchedUsersDroplets as $searchedDroplet):
          require "snippets/profile_user_searched_droplets_snippet.php";
        endforeach;
      else:
      ?>

      <div class="box has-text-centered">
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
