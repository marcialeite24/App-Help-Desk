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
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-open-ticket">
          <div class="card">
            <div class="card-header">
              Open ticket
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  
                  <form>
                    <div class="form-group">
                      <label>Title</label>
                      <input type="text" class="form-control" placeholder="Title">
                    </div>
                    
                    <div class="form-group">
                      <label>Category</label>
                      <select class="form-control">
                        <option>Create User</option>
                        <option>Printer</option>
                        <option>Hardware</option>
                        <option>Software</option>
                        <option>Network</option>
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <label>Description</label>
                      <textarea class="form-control" rows="3"></textarea>
                    </div>

                    <div class="row mt-5">
                      <div class="col-6">
                        <button class="btn btn-lg btn-warning btn-block" type="submit">Back</button>
                      </div>

                      <div class="col-6">
                        <button class="btn btn-lg btn-info btn-block" type="submit">Open</button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>