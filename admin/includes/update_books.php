<form action="" method="post">

   <?php 
   if (isset($_GET['edit'])) {
       $book_id = $_GET['edit'];
       $query = "SELECT * FROM books WHERE book_id = {$book_id}";
       $select_book_id = mysqli_query($connection, $query); 
       while($row = mysqli_fetch_assoc($select_book_id)) {
           $book_id = $row["book_id"];
           $book_name = $row["book_name"];
           $book_image = $row["book_img"];
           $book_desc = $row["book_description"];
    ?>
    <div class="form-group">
        <input value="<?php if(isset($_GET['edit'])) {echo $book_name;} ?>" type="text" class="form-control" name="book_name">
    </div>
    
    <div class="form-group">
        <input value="<?php if(isset($_GET['edit'])) {echo $book_image;} ?>" type="text" class="form-control" name="book_image">
    </div>
    
    <div class="form-group">
        <textarea rows="6" class="form-control" name="book_desc"></textarea>
    </div>

    <?php } } ?>

    <?php  // UPDATE MOVIE
        if (isset($_POST['update_book'])) {
            $book_name = $_POST['book_name'];
            $book_image = $_POST['book_image'];
            $book_desc = $_POST['book_desc'];
            
            $book_name = mysqli_real_escape_string($connection, $book_name);
            $book_image = mysqli_real_escape_string($connection, $book_image);
            $book_desc = mysqli_real_escape_string($connection, $book_desc);

            $query = "UPDATE books SET book_name = '{$book_name}', book_img = '{$book_image}', book_description = '{$book_desc}' WHERE book_id = {$book_id} ";
            $update_query = mysqli_query($connection, $query);
            if (!$update_query) {
                die('QUERY FAILED ' . mysqli_error($connection));
            }
            header("Location: books.php?universe={$universe_id}");
        }
    ?>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="update_book" value="Update Book">
    </div>
</form>