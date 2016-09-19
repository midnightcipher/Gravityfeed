
<div class="columns">

  <div class="column is-12">
    <section class="section">
      <div class="column">
        
        <section class="panel">
          <p class="panel-heading">
           Account
         </p>
         <div class="panel-block">
           <form method="post" action="/newsfeed.php?s=<?php echo $userRow['user_name']; ?>">
            <label class="label">Username</label>
            <p class="control has-icon">
              <input name="newUsername" class="input" type="text" placeholder="Username" value="">
              <i class="fa fa-user"></i>
            </p>
            <?php 
            if (isset($updateUsernameMessage)){
              echo $updateUsernameMessage;
            } 
            ?>
              <!-- 
              Set input class to "is-success or is-danger"
              <span class="help is-success">This username is available</span>
              <span class="help is-danger">This username is unavailable</span> -->

              <p class="control">
                <button type="submit" class="button">Submit</button>
              </p>
            </form>
          </div>
        </section>
        <section class="panel">

         <div class="panel-block">
           <form method="post" action="/newsfeed.php?s=<?php echo $userRow['user_name']; ?>">
            <label class="label">Current Password</label>
            <p class="control has-icon">
              <input name="currentPassword" class="input" type="password" placeholder="Current password" value="">
              <i class="fa fa-lock"></i>
              <a class="help">Forgot Password?</a>
            </p>

            <label class="label">New Password</label>
            <p class="control has-icon">
              <input name="newPassword" class="input" type="password" placeholder="New password" value="">
              <i class="fa fa-user"></i>
            </p>

            <label class="label">Confirm Password</label>
            <p class="control has-icon">
              <input name="confirmNewPassword" class="input" type="password" placeholder="Confirm new password" value="">
              <i class="fa fa-user"></i>
            </p>

            <p class="control">
              <button type="submit" class="button">Submit</button>
            </p>
          </form>
        </div>
      </section>
    </div>
  </section>
</div>
</div>