<!DOCTYPE html>
<html>

<head>
  <title><?php if (isset($page) && is_string($page)) {
            echo $page;
          } else {
            echo 'project ';
          } ?></title>
  <meta name="description" content=<?php if (isset($pageDesc) && is_string($pageDesc)) {
                                      echo $pageDesc;
                                    } else {
                                      echo 'desired description';
                                    } ?> />
  <meta name="keywords" content=<?php if (isset($pageTag) && is_string($pageTag)) {
                                  echo $pageTag;
                                } else {
                                  echo 'desired tag';
                                } ?> />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <link rel="icon" href="images/logo.png" type="image/png" sizes="114*114">
  <link href="css/custom.css" rel="stylesheet" type="text/css">
  <link href="css/animate.css" rel="stylesheet" type="text/css">
  <!-- link owl carasoul  -->
  <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css">
  <link href="css/owl.theme.default.min.css" rel="stylesheet" type="text/css">
  <!-- link slick carasoul  -->
  <link href="css/slick.css" rel="stylesheet" type="text/css">
  <link href="css/slick-theme.css" rel="stylesheet" type="text/css">

  <link href="https://site-assets.fontawesome.com/releases/v6.0.0/css/all.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
</head>


<header>
        <nav class="header1 navbar navbar-expand-lg ">
            <div class="container">
                <a class="navbar-brand" href="index.php">LOGO HERE</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav1_menu mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Entrepreneurial Services
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Services</a></li>
                                <li><a class="dropdown-item" href="manufacturers .php">Manufacturer</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="marketing .php">Marketing</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="service.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Corporations
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="legal.php">Legal</a></li>
                                <li><a class="dropdown-item" href="sales.php">Sales</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="business.php">Business</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Mega Projects
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="bank.php">Bank</a></li>
                                <li><a class="dropdown-item" href="venture.php">Venture</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="profit.php">Profit</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="header2">
            <nav class="navbar navbar-expand-lg ">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav2_menu">
                            <!--   <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#"><img src="images/Layer6.png"
                                        alt="">Chatgpt</a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link" href="food.php"><img src="images/Layer7.png" alt="">Chatgpt</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="discussion.php"><img src="images/Layer9.png" alt="">Go Fund Me</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="loan.php"><img src="images/Layer10.png" alt="">Sell Advertising</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tecnology.php"><img src="images/Layer12.png" alt="">Infuencers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="member.php"><img src="images/Layer13.png" alt="">Event/Guest Seminars</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="diseases.php"><img src="images/Layer21.png" alt="">Innovation Engine</a>
                            </li>
                        </ul>
                        <form class="d-flex gap-2 nav2_form" role="search">
                            <a href="hunger .php" class="btn btn-theme" type="submit">Login / Profile</a>
                            <a href="green.php" class="btn btn-theme" type="submit">App Store</a>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </header>
<body>
  