<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=3.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>Document</title>
</head>
<style>
  body {
    background-color: rgba(255, 255, 128, .5);
  }

  .echo-text {
    font-size: 1rem;
    font-family: sans-serif;

  }

  .container {
    overflow-x: hidden;
    overflow-y: hidden;
    top: 40%;
    height: 50%;
    width: 50%;
    position: absolute;
    left: 25%;
  }

  .shadow-box {
    width: 90%;
    height: 50%;
  }

  .modal-title {
    margin-left: 25%;
    width: 50%;
  }
</style>

<body>

  <!-- Button trigger modal -->
  <div class="container text-center">
    <h1 class="my-text text-center">WOULD YOU LIKE TO KNOW YOUR INPUT DETAILS</h1>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Click me
    </button>
    <button type="button" class="btn btn-link"><a href="form.html">Home page</a></button>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-3" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title bg-dark text-center text-white" id="exampleModalLabel">YOUR INPUT DETAILS</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <!-- modal body content -->
        <div class="modal-body" style="background-color:#efefef;">
          <div class="shadow-lg p-3 mb-4 ms-4 bg-body rounded shadow-box">
            <h4 class="text">YOUR NAME : <span class="echo-text text-primary"><?php echo $_POST["Uname"]; ?></span> </h3>
              <h4 class="text">YOUR EMAIL : <span class="echo-text text-primary"><?php echo $_POST["email"]; ?></span></h3>
                <h4 class="text">YOUR PASSWORD : <span class="echo-text text-primary"><?php echo $_POST["password"]; ?></span></h3>
          </div>
        </div>
        <!-- end modal body content -->
      </div>
    </div>
  </div>


  <script src="js/bootstrap.min.js"></script>
</body>

</html>