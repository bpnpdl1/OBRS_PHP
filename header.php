<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title; ?></title>
  <?php require 'links.php'; ?>
</head>

<body>
  <div class="d-flex" style="flex-direction: column;min-height:100vh">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
      <div class="container-fluid d-flex justify-content-center">
        <a class="navbar-brand" href="index.php">
          <div>
            <p class="h1" style="padding-bottom: -10px;">OBRS</p>

          </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link active" href="index.php">Home
                <span class="visually-hidden">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="signin.php">Signin</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main style="flex: 1">