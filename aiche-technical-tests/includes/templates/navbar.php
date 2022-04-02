<nav class="navbar navbar-inverse">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="app-nav" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><?php echo 'aiche' ?></a>
    </div>

    <div class="collapse navbar-collapse" id="app-nav">
      <ul class="nav navbar-nav">
        <li class="active"><a href="dashboard.php"><?php echo  'dash'?></a></li>
       >
      </ul>
      <ul class="nav navbar-nav navbar-right">
             <li><a href="members.php?do=Edit&userid=<?php echo $_SESSION['ID'] ?>";">Edit Profile</a></li>
            <li><a href=" logout.php">Logout</a></li>
        </ul>
    </div>

  </div>
</nav>