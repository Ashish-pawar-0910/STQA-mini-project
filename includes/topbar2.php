<nav class="navbar bg-gradient-success navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand text-white" href="#"><i class="fas fa-virus"></i> COVID19-TMS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <!-- <?php if($_SESSION['aid']):?> -->
      <li class="nav-item">
        <a class="nav-link text-white" href="dashboard.php"><i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#"><i class="fas fa-fw fa-users"></i>
                    <span>Phlebotomist</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-fw fa-users"></i>
                    <span>Phlebotomist</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="add-phlebotomist.php">Add</a>
          <a class="dropdown-item" href="manage-phlebotomist.php">Manage</a>
          <!-- <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div> -->
      </li>
      <li class="nav-item">
        <a class="nav-link disabled text-white" href="#">Disabled</a>
      </li>
      <!-- <?php else:    ?>    -->
        <li class="nav-item">
                <a class="nav-link" href="live-test-updates.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>