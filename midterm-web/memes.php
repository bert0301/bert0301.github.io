<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="home.css" type="text/css"> </head>


<body class="">

    <?php require 'navigation.php';?>

      <!-- First row of memes -->
  <div class="py-5 bg-light text-dark">
    <div class="container">
      <div class="row">

     <!--  Pepe card -->
        <div class="col-md-4 my-3">
          <div class="card">
           <a href="pepe.php">
                <img class="img-fluid" src="Images/pepe.jpg" alt="Card image">
                <div class="card-body"> <b>Pepe the Frog</b>
                    <p class="card-text p-y-1">Find out more about Pepe and why he looks so sad :(</p>
                </div>
           </a>

          </div>

        </div>

        <!-- Math Lady  -->
        <div class="col-md-4 my-3">
          <div class="card">
           <a href="math-lady.php">
            <div class="card-body">
              <img class="img-fluid d-block mb-4" src="Images/math%20lady.jpg">
              <h5><b>Confused Math Lady</b></h5>
              <p class="mt-1">Why does she look so confused? Is it bacause she's blonde? Click to find out!</p>
            </div>
           </a>

          </div>
        </div>

        <!-- Doge -->
        <div class="col-md-4 my-3">
          <div class="card">
             <a href="doge.php">
                <div class="card-body">
                  <img class="img-fluid d-block mb-4 img-thumbnail" src="Images/doge.jpg">
                  <h5><b>Doge</b></h5>
                  <p class=" p-y-1">Sso Wow. Much curious. Many clicks.</p>
                </div>
             </a>

          </div>
        </div>
      </div>
    </div>
  </div>

      <!-- Second row of memes -->
  <div class="py-5 bg-light text-dark">
    <div class="container">

         <!--Guess i'll die -->
      <div class="row">
        <div class="col-md-4 my-3">
         <a href="guess.php">
            <div class="card">
                <img class="img-fluid" src="Images/guess ill die.jpg" alt="Card image">
                <div class="card-body"> <b>Guess I'll Die</b>
                  <p class="card-text p-y-1">Time to give up on life! Click to find out why!</p>
                </div>
            </div>
         </a>

        </div>
            <!-- Spongebob -->
        <div class="col-md-4 my-3">
             <a href="mockingSponge.php">
                <div class="card">
                    <div class="card-body">
                      <img class="img-fluid d-block mb-4" src="Images/Mocking-spongebob.jpg">
                      <h5><b>Mocking Spongebob&nbsp;</b></h5>
                      <p class=" p-y-1">CLicK hErE tO mAsTEr tHe ArT oF MoCkInG .</p>
                    </div>
                  </div>
             </a>

        </div>
            <!-- Brain -->
        <div class="col-md-4 my-3">
         <a href="brain.php">
            <div class="card">
                <div class="card-body">
                  <img class="img-fluid d-block mb-4 img-thumbnail" src="Images/brain.jpg">
                  <h5><b>Expanding Brain</b></h5>
                  <p class=" p-y-1">Want to be smarter and expand your brain? Click here! .</p>
                </div>
            </div>
         </a>

        </div>
      </div>
    </div>
  </div>

  <!-- footer -->
<?php require 'footer.php' ?>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>

</html>
