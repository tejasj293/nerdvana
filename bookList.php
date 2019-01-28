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
            <p>Check out all the books and comics of the <?php echo $universe_name ?> Universe!</p>
            <p>
                <a class="btn btn-primary btn-lg" href="/campgrounds/new">Add New Book</a>
            </p>
        </div>
    </header>
    
    <div class="row text-center" style="display: flex; flex-wrap: wrap;">
    <?php 
        $query2 = "SELECT * FROM books WHERE universe_id = {$the_universe_id}";
        $select_books = mysqli_query($connection, $query2);
        while ($row = mysqli_fetch_assoc($select_books)) {
            $book_id = $row['book_id'];
            $book_name = $row['book_name'];
            $book_image = $row['book_img'];
    ?>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                 <img src=<?php echo $book_image; ?>>
                 <div class="caption">
                     <?php echo "<h4>{$book_name}</h4>" ?>
                 </div>
                 <p>
                     <a href="book.php?book=<?php echo $book_id ?>" class="btn btn-primary">More Info</a>
                 </p>
            </div>
        </div>
        
    <?php } ?>
    </div>
</div>

<?php include "includes/footer.php"?>
