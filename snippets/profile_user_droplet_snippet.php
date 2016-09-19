      <div class="spacer"></div>
        <div id="modal-<?= $droplet['id'] ?>" class="modal">
          <div class="modal-background"></div>
          <div class="modal-container">
            <div class="modal-content">
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
                      <strong>@<?= $droplet['username'] ?></strong> <small><a id="user" href="">@<?= $droplet['username'] ?></a></small> <small style="float:right;"><?= $droplet['timestamp'] ?></small>
                      <br>
                      <?= $droplet['droplet'] ?>
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
          <button class="modal-close"></button>
        </div>

        <div class="pointer box modal-button" data-target="#modal-<?= $droplet['id'] ?>">
          <article class="media">
            <div class="media-left">
              <figure class="image is-64x64">
                <img src="http://placehold.it/128x128" alt="Image">
              </figure>
            </div>
            <div class="media-content">
              <div class="content">
                <p>
                  <strong>@<?= $droplet['username'] ?></strong> <small><a id="user" href="">@<?= $droplet['username'] ?></a></small> <small style="float:right;"><?= $droplet['timestamp'] ?></small>
                  <br>
                  <?= $droplet['droplet'] ?>
                </p>
              </div>
              <nav class="level">
                <div class="level-left">
                  <a class="level-item">
                    <span class="icon is-small"><i class="ion-waterdrop"></i></span>
                  </a>
                  <a class="level-item" href="./index.php">
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