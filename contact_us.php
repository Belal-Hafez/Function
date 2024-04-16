
        <!DOCTYPE html>
<html>
  <head>
    <title>Contact US</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <style>
        body {
            background: url("https://wallpapers.com/images/featured/nice-background-61m89tafknmauh0h.jpg") center/cover no-repeat;
        }
    </style>
  </head>
  <body>
  
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Contact</h1>
          </div>
          <div class="panel-body">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
              <div class="form-group">
                <label for="firstName">First Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="firstName"
                  name="firstName"
                />
              </div>
              <div class="form-group">
                <label for="lastName">Last Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="lastName"
                  name="lastName"
                />
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email"
                />
              </div>
              <div class="form-group">
                <label for="number">Phone Number</label>
                <input
                  type="number"
                  class="form-control"
                  id="number"
                  name="number"
                />
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="" style="width: 100%; min-height: 200px; resize: none;"></textarea>
              </div>
              <input type="submit" class="btn btn-primary" />
            </form>
            <?php
            include "connect.php";
            
            ?>

          </div>
        </div>
      </div>
    </div>
  </body>
</html>
