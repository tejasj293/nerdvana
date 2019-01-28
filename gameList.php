<?php include "includes/db.php" ?>
<?php include "includes/header.php"?>

<?php include "includes/nav.php"; ?>

<?php 
    if (isset($_GET['universe'])) {
        $the_universe_id = $_GET['universe'];
    }
?>

<?php
    
    $query1 = "SELECT * FROM universe WHERE universe_id = {$the_universe_id}";
    $select_universe = mysqli_query($connection, $query1);
    while ($row = mysqli_fetch_assoc($select_universe)) {
        $universe_name = $row['universe_name'];
    }
?>

<div class="container">
    <header class="jumbotron">
        <div class="container">
             <h1><?php echo $universe_name; ?> Universe</h1>
            <p>Check out all the games of the <?php echo $universe_name ?> Universe!</p>
            <p>
                <a class="btn btn-primary btn-lg" href="/campgrounds/new">Add New Game</a>
            </p>
        </div>
    </header>
    
    <div class="row text-center" style="display: flex; flex-wrap: wrap;">
    <?php 
        $query2 = "SELECT * FROM games WHERE universe_id = {$the_universe_id}";
        $select_games = mysqli_query($connection, $query2);
        while ($row = mysqli_fetch_assoc($select_games)) {
            $game_id = $row['game_id'];
            $game_name = $row['game_name'];
            $game_image = $row['game_img'];
    ?>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                 <img src="<?php echo $game_image; ?>">
                 <div class="caption">
                     <?php echo "<h4>{$game_name}</h4>" ?>
                 </div>
                 <p>
                     <a href="game.php?game=<?php echo $game_id ?>" class="btn btn-primary">More Info</a>
                 </p>
            </div>
        </div>
        
    <?php } ?>
    </div>
</div>

<?php include "includes/footer.php"?>
