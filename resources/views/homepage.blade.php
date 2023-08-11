<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>OurApp</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/main.css" />
  </head>
  <body>
    <nav class="navbar">
        <a href="/"><img class="logo" src="/img/logo.svg" /></a>
        <form class="form" action="#" method="POST">
            <div class="text-box">
              <input class="input1" name="loginusername"  type="text" placeholder="Username" />
            </div>
            <div class="text-box">
              <input class="input2" name="loginpassword" type="password" placeholder="Password" />
            </div>
            <div class="col-md-auto">
              <button class="button">Sign In</button>
            </div>
        </form>
    </nav>
    <!-- header ends here -->

    <div class="con-tainer">
      <div class="parallax-container" data-tilt data-tilt-max="3" data-tilt-full-page-listening>
        <div class="back-image-container">
          <img src="../img/back.png" class="image" width="430">
        </div>
        <div class="">
          <img src="../img/mid.png" class="image" width="420">
        </div>
        <div class="front-image-container">
          <img src="../img/front.png" class="image" width="480">
        </div>
      </div>
        <div class="form-container">
          <form action="#" method="POST" id="registration-form">
            <div class="form-group">
              <label for="username-register" class="text-muted mb-1"><small>Username</small></label>
              <div class="box">
                <input name="username" id="username-register" class="input" type="text" placeholder="Pick a username" autocomplete="off" />
              </div>
            </div>

            <div class="form-group">
              <label for="email-register" class="text-muted mb-1"><small>Email</small></label>
              <div class="box">
                <input name="email" id="email-register" class="input" type="text" placeholder="you@example.com" autocomplete="off" />

              </div>
            </div>

            <div class="form-group">
              <label for="password-register" class="text-muted mb-1"><small>Password</small></label>
              <div class="box">
              <input name="password" id="password-register" class="input" type="password" placeholder="Create a password" />
            </div>

            </div>

            <div class="form-group">
              <label for="password-register-confirm" class="text-muted mb-1"><small>Confirm Password</small></label>
              <div class="box">
              <input name="password" id="password-register-confirm" class="input" type="password" placeholder="Confirm password" />
            </div>
            </div>
            <div class="box">
            <button type="submit" class="button mt-2">Sign Up</button>
            </div>
          </form>
        </div>
    </div>

    <!-- footer begins -->
    <footer class="footer">
      <p class="footer-text"><a href="/" class="text-muted"></a> Made with 💜 by <a class="text-muted" target="_blank" href="https://github.com/abderrahmaneBouallaga">Abderrahmane BOUALLAGA</a></p>
    </footer>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.0/vanilla-tilt.min.js" integrity="sha512-RX/OFugt/bkgwRQg4B22KYE79dQhwaPp2IZaA/YyU3GMo/qY7GrXkiG6Dvvwnds6/DefCfwPTgCXnaC6nAgVYw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script type="text/javascript">
      VanillaTilt.init(document.querySelectorAll(".parallax-container"), {
        max: 3,
        speed: 400,
        perspective: 1000
      });
      
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
      $('[data-toggle="tooltip"]').tooltip()
    </script>
  </body>
</html>
