<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="home.css" type="text/css"> </head>

<body class="">
    <?php require 'navigation.php';?>
  <div class="py-5 text-white bg-secondary">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>Contact us</h1>
          <p>Suggest a meme!</p>
          <form>
            <div class="form-group"> <label for="InputName">Your name</label>
              <input type="text" class="form-control" id="InputName" placeholder="Your name"> </div>
            <div class="form-group"> <label for="InputEmail1">Email address</label>
              <input type="email" class="form-control" id="InputEmail1" placeholder="Enter email"> </div>
            <div class="form-group"> <label for="Textarea">Write here</label> <textarea class="form-control" id="Textarea" rows="3" placeholder="Type here"></textarea> </div>
            <button type="submit" class="btn btn-info">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php require 'footer.php' ?>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>

</html>
