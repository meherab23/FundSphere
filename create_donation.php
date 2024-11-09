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
    .donation-form {
      background-color: #fff;
      padding: 3rem;
      border-radius: 8px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
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
            <a class="nav-link" href="#">About Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<br><br>


<!-- Hero Section -->
<div class="container donation-form mt-5">
    <h3 class="mb-4">Make a Donation</h3>
    <form action="process_donation.php" method="post">
      <div class="mb-3">
        <label for="name" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="mb-3">
        <label for="phone" class="form-label">Phone Number</label>
        <input type="tel" class="form-control" id="phone" name="phone" required>
      </div>
      <div class="mb-3">
        <label for="card_name" class="form-label">Card Name</label>
        <input type="text" class="form-control" id="card_name" name="card_name" required>
      </div>
      <div class="mb-3">
        <label for="card_number" class="form-label">Card Number</label>
        <input type="text" class="form-control" id="card_number" name="card_number" required>
      </div>
      <div class="mb-3">
        <label for="card_cvv" class="form-label">CVV</label>
        <input type="text" class="form-control" id="card_cvv" name="card_cvv" required>
      </div>
      <div class="mb-3">
        <label for="card_expire_date" class="form-label">Card Expiry Date</label>
        <input type="date" class="form-control" id="card_expire_date" name="card_expire_date" required>
      </div>
      <div class="mb-3">
        <label for="amount" class="form-label">Amount</label>
        <input type="number" step="0.01" class="form-control" id="amount" name="amount" required>
      </div>
      <button type="submit" class="btn btn-primary">Donate Now</button>
    </form>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>