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
                <form action="/newsfeed.php?p=<?php echo $userRow['user_name']; ?>&d=true" method="post">
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

    <div class="column is-6">
  
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
        </div>

        
      </div>
    </div>

  </div>
</div>