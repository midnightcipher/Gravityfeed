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
                    <a href="#" title="">
                      <span class="card-stats-key">Droplets</span>
                      <span class="card-stats-val"><?= $PersonalDropletCount ?></span>
                    </a>
                  </li>
                  <li class="card-stats-item">
                    <a href="#/following" title="">
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
          <!-- <div class="spacer"></div>
          <div class="box trending">
            <p class="trend-title"><span class="title is-5">Trends</span> · <a href="#">change</a></p>
            <p class="trend-hashtag"><a href="#">#hashtag1</a><br>13k statuses</p>
            <p class="trend-hashtag"><a href="#">#hashtag2</a><br>29k statuses</p>
            <p class="trend-hashtag"><a href="#">#hashtag3</a><br>2k statuses</p>
            <p class="trend-hashtag"><a href="#">#hashtag4</a><br>9k statuses</p>
            <p class="trend-hashtag"><a href="#">#hashtag5</a><br>18k statuses</p>
            <p class="trend-hashtag"><a href="#">#hashtag6</a><br>168k statuses</p>
          </div> -->
        </div>
        <div class="column is-6">
        
        <!-- POST A DROPLET -->
        <form action="/newsfeed.php" method="post">
          <div class="">
            <div class="card is-fullwidth">
              <p class="control">
                <textarea name="timelineNewDropletPost" class="textarea" placeholder="What's happening?"></textarea>
              </p>
              <footer class="card-footer">
                <button type="submit" class="card-footer-item">Drop</button>
              </footer>
                            <?php 
              if (isset($updatePostNewDropletMessage)):
                echo $updatePostNewDropletMessage;
              endif;
              ?>
            </div>
          </div>
        </form>

        <div class="spacer"></div>

          <div class="box">
            <article class="media">
              <div class="media-left">
                <figure class="image is-64x64">
                  <img src="http://placehold.it/128x128" alt="Image">
                </figure>
              </div>
              <div class="media-content">
                <div class="content">
                    <p>
                    <strong>@username</strong> <small><a id="user" href="">@username</a></small> <small style="float:right;">31m</small>
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
                  </p>
                </div>
                <nav class="level">
                  <div class="level-left">
                    <a class="level-item">
                      <span class="icon is-small"><i class="ion-waterdrop"></i></span>
                    </a>
                    <a class="level-item">
                      <span class="icon is-small"><i class="ion-ios-heart"></i></span>
                    </a>
                    <a class="level-item">
                      <span class="icon is-small"><i class="ion-ios-chatboxes"></i></span>
                    </a>
                  </div>
                </nav>
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>
  </section>