<?php

$query = "SELECT * FROM universe";
$getAllUniverse = mysqli_query($connection, $query);
if (!$getAllUniverse) {
    die("QUERY FAILED " . mysqli_error($connection));
}

?>

<nav class="navbar navbar-inverse navbar-fixed-top">
<div class = "container">
<div class = "navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-nav-demo" aria-expanded="false">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
    <a href="#" class = "navbar-brand">NERDVANA</a>
</div>
<div class="collapse navbar-collapse" id="bs-nav-demo">
<ul class = "nav navbar-nav">
    <li><a href="about.php">About</a></li>
    <li><a href="contact.php">Contact</a></li>
    
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Universe <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <?php while ($row = mysqli_fetch_assoc($getAllUniverse)) {
                $universe_id = $row['universe_id'];
                $universe_name = $row['universe_name']; 
            ?>
            <li role="separator" class="divider"></li>
            <li><a href="universe.php?universe=<?php echo $universe_id; ?>"><?php echo $universe_name; ?></a></li>
            <?php } ?>
        </ul>
    </li>
</ul>
<form class="navbar-form navbar-left" action="search.php" method="post">
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Search" name="searchText">
    </div>
    <button type="submit" class="btn btn-default" name="search">Search</button>
</form>

<ul class = "nav navbar-nav navbar-right">
    <?php //if ($_SESSION['username']) { ?>
    <?php //} else { ?>
    <li><a href="signup.php">Sign Up</a></li>
    <li><a href="login.php">Login</a></li>
    <?php //} ?>
</ul>

</div> </div>
</nav>