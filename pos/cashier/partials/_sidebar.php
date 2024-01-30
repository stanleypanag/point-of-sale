<?php
  $staff_id = $_SESSION['staff_id'];
  //$login_id = $_SESSION['login_id'];
  $ret = "SELECT * FROM  rpos_staff  WHERE staff_id = '$staff_id'";
  $stmt = $mysqli->prepare($ret);
  $stmt->execute();
  $res = $stmt->get_result();
  while ($staff_id = $res->fetch_object()) {
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-/HYpcwWzg3v5l8l4ug1u/X+W5okJy+QrJSKggMi2PUi9pJgXtPA+oNwoXXGgQ6z3gscy7Tu8lzIsR7B7aS2bw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light" style="background-color: #e6a4b4;"  id="sidenav-main">
      <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="dashboard.php">
          <h1 style="font-family: 'Shrikhand', serif;color: #644735;font-size: 1.5rem;">Sweet Thumb</h1>
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
          <li class="nav-item dropdown">
            <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="ni ni-bell-55"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="../assets/img/">
                </span>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="change_profile.php" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="logout.php" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Collapse header -->
          <div class="navbar-collapse-header d-md-none">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="dashboard.php">
                  <img src="../admin/assets/img/brand/repos.png">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <!-- Form -->
          <form class="mt-4 mb-3 d-md-none">
            <div class="input-group input-group-rounded input-group-merge">
              <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <span class="fa fa-search"></span>
                </div>
              </div>
            </div>
          </form>
          <!-- Navigation -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" style="color:#644735" href="dashboard.php">
                <i class="ni ni-tv-2"></i> Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " style="color:#644735" href="customes.php">
                <i class="fas fa-users"></i> Customers
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color:#644735" href="products.php">
                <i class="ni ni-bullet-list-67"></i>Products
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color:#644735" href="orders.php">
                <i class="ni ni-cart"></i> Orders
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color:#644735" href="payments.php">
                <i class="ni ni-credit-card"></i> Payments
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color:#644735" href="receipts.php">
                <i class="fas fa-file-invoice-dollar"></i> Receipts
              </a>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading" style="color:#644735">Reporting</h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link" style="color:#644735" href="orders_reports.php">
                <i class="fas fa-shopping-basket"></i> Orders
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color:#644735" href="payments_reports.php">
                <i class="fas fa-funnel-dollar"></i> Payments
              </a>
            </li>
          </ul>
          <hr class="my-3">
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link text-black" href="logout.php">
                <i class="fas fa-sign-out-alt text-black"></i> Log Out
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  <?php } ?>

</body>

</html>