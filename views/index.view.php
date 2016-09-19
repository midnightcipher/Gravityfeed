
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

	<section class="hero is-primary is-fullheight header-image">
    <div class="hero-head">

      <header class="nav">
        <div class="container">
          <div class="nav-left">
          
          </div>
          <div class="nav-center">
						<a class="nav-item is-brand" href="#">
							GRAVITYFEED
						</a>
					</div>
          <span class="nav-toggle">
            <span></span>
            <span></span>
            <span></span>
          </span>
          <div class="nav-right nav-menu">

							<a class="button is-primary" href="login.php">
								<span class="icon">
									<i class="fa fa-sign-in"></i>
								</span>
								<span>Login</span>
							</a>
            <span class="nav-item">
              <a href="signup.php" class="button is-outlined">
                <span class="icon">
                  <i class="fa fa-user-plus"></i>
                </span>
								<span>Sign Up</span>
              </a>
            </span>
          </div>
        </div>
      </header>

    </div>
    <div class="hero-body">
      <div class="container has-text-centered">
        <h1 class="title is-2">
          Gravityfeed
        </h1>
        <h2 class="subtitle is-5">
          A new way of connecting people
        </h2>

      </div>
    </div>
  </section>


  <div class="section main">
    <div class="container">
      <div class="columns">
        <div class="column is-4">
          <div class="panel">
            <div class="panel-block section">
              <p class="has-text-centered"><i class="fa fa-camera-retro icon-block"></i></p>
              <br>
              <p>Share photos with friends, love them and post them all around for everyone to share</p>
            </div>
          </div>
        </div>
        <div class="column is-4">
          <div class="panel">
            <div class="panel-block section">
              <p class="has-text-centered"><i class="fa fa-bar-chart icon-block"></i></p>
              <br>
              <p>Our users are raising everyday so join us for the future of connecting people</p>
            </div>
          </div>

        </div>
        <div class="column is-4">
          <div class="panel">
            <div class="panel-block section">
              <p class="has-text-centered"><i class="fa fa-cloud icon-block"></i></p>
              <br>
              <p>All your infomation is store up in the cloud so you can access everything when ever it suits you</p>            
              </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <?php require("includes/footer.php"); ?>


	<script src="/js/jquery-2.2.0.min.js"></script>
	<script src="/js/clipboard.min.js"></script>
	<script src="/js/bulma.js"></script>


  </body>
</html>
