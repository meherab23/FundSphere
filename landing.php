<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Home Page</title>
    <style>

    .content {
      text-align: center;
    }

    body {
      background-color: #f8f9fa;
    }
    .navbar {
      padding: 1rem;
    }
    .content {
      padding: 2rem 0;
      text-align: center;
    }
    .features {
      background-color: #fff;
      padding: 3rem 0;
    }
    .features img {
      max-width: 100%;
      height: auto;
    }
    .features ul {
      list-style: none;
      padding-left: 0;
    }
    .features ul li {
      margin-bottom: 1rem;
    }
    .financing {
      background-color: #f8f9fa;
      padding: 3rem 0;
    }
    .financing h1, .financing h2 {
      color: #004085;
    }
    .financing ul {
      list-style: none;
      padding-left: 0;
    }
    .financing ul li {
      margin-bottom: 0.5rem;
    }

  </style>
  </head>
  <body>
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand logo" href="landing.php">CrowdFunding</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
        <a class="btn btn-primary ml-3" href="create_donation.php">Make Donation</a>
          <li class="nav-item">
            <a class="nav-link" href="landing.php">Home</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="index.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<br><br><br>

<!-- Hero Section -->
<div class="container content">
    <h2>Loan and CrowdFunding</h2>
    <p>Welcome to our website! We are a loan and donation management platform that makes it easy for you to lend money or donate to your favorite causes.</p>
  </div>

  <!-- Features Section -->
  <div class="container features">
    <div class="row">
      <div class="col-12 col-md-6">
        <img src="images/pic.jpg" alt="About Mission Vision" class="img-fluid">
      </div>
      <div class="col-12 col-md-6">
        <ul>
          <li><i class="fa fa-caret-right"></i> Apply for a loan quickly and easily</li>
          <li><i class="fa fa-caret-right"></i> Track your loan progress</li>
          <li><i class="fa fa-caret-right"></i> Make donations</li>
          <li><i class="fa fa-caret-right"></i> See how your donations are making a difference</li>
          <li><i class="fa fa-caret-right"></i> We work with a variety of charities to make sure your donations go to good use</li>
          <li><i class="fa fa-caret-right"></i> Our platform is secure and easy to use</li>
        </ul>
      </div>
    </div>
  </div>
  <br>

  <div class="container content">
    <h2>Give a helping hand to those <br> who need it!</h2>
    <p>When a child gets access to good food, it can <br> change just about everything.</p>
    <a class="btn btn-primary mt-3" href="create_donation.php">Make Donation</a>
</div>

  <!-- Education Financing Section -->
  <div class="container financing">
    <div class="row">
      <div class="col-12 col-md-6 mx-auto text-center">
        <h1 class="text-primary">Where You Need It</h1>
        <h2 class="text-secondary">Education Financing</h2>
        <ul>
          <li>Student Loans</li>
          <li>Student Loan Refinancing</li>
          <li>Scholarships</li>
          <li>Financial Solutions</li>
        </ul>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>




  </body>
</html>
