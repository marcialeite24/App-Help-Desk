<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="../images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form action="login_validation.php" method="post">
                <div class="form-group">
                  <input name="email" type="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                  <input name="password" type="password" class="form-control" placeholder="Password">
                </div>
                <?php if(isset($_GET['login']) && $_GET['login'] == 'error') { ?>
                  <div class="text-danger">
                    User or password invalid!
                  </div>
                <?php } ?>

                <?php if(isset($_GET['login']) && $_GET['login'] == 'error2') { ?>
                  <div class="text-danger">
                    Sign in before accessing private pages!
                  </div>
                <?php } ?>
                <button class="btn btn-lg btn-info btn-block" type="submit">Sign in</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>