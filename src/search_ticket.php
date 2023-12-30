<?php
  require_once "validator.php"
?>

<?php
  $tickets = array();
  $file = fopen('../../../app_help_desk/tickets.txt','r');
  while(!feof($file)) {
    $content = fgets($file);  
    $content_details = explode('#', $content); 
    if($_SESSION['type_id'] == 2) {
      if($ticket_data[0] != $_SESSION['id']) {
        continue;
      } else {
        $tickets[] = $content;
      }
    } else {
      $tickets[] = $content;
    }    
  }
  fclose($file);
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-open-ticket {
        padding: 30px 0 0 0;
        width: 100%;
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
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Log out</a>
        </li>
      </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-open-ticket">
          <div class="card">
            <div class="card-header">
              Open tickets
            </div>
            
            <div class="card-body">
              <?php foreach($tickets as $ticket) {?>
                <?php 
                  $ticket_data = explode('#', $ticket); 
                  if(count($ticket_data) < 3) {
                    continue;
                  }                    
                ?>
                <div class="card mb-3 bg-light">
                  <div class="card-body">
                    <h5 class="card-title"><?=$ticket_data[1]?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?=$ticket_data[2]?></h6>
                    <p class="card-text"><?=$ticket_data[3]?></p>
                  </div>
                </div>
              <?php } ?>
              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="home.php">Back</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>