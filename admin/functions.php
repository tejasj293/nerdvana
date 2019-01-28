<?php

function insert_universe() {
    
    global $connection;
    
    if (isset($_POST['submit'])) {
        $universe_name = $_POST['universe_name'];
        $universe_image = $_POST['universe_image'];
        $universe_desc = $_POST['universe_description'];
        
        $universe_name = mysqli_real_escape_string($connection, $universe_name);
        $universe_image = mysqli_real_escape_string($connection, $universe_image);
        $universe_desc = mysqli_real_escape_string($connection, $universe_desc);
        
        if ($universe_name == "" || empty($universe_name)) {
            echo "This field cannot be empty";
        } else {
            $query = "INSERT INTO universe(universe_name, universe_img, universe_description) ";
            $query .= "VALUES ('{$universe_name}', '{$universe_image}', '{$universe_desc}')";

            $create_universe_query = mysqli_query($connection, $query);

            if (!$create_universe_query) {
                die("QUERY FAILED " . mysqli_error($connection));
            }
        }
    }  
}

function findAllUniverse() {
    
    global $connection;
    
    $query = "SELECT * FROM universe";
    $select_universe = mysqli_query($connection, $query); 
    while($row = mysqli_fetch_assoc($select_universe)) {
        $universe_id = $row["universe_id"];
        $universe_name = $row["universe_name"];
        $universe_image = $row["universe_img"];
        $universe_desc = $row["universe_description"];
        
        $universe_desc = substr($universe_desc, 0, 100);
        
        echo "<tr>";
        echo "<td>{$universe_id}</td>";
        echo "<td>{$universe_name}</td>";
        echo "<td>{$universe_image}</td>";
        echo "<td>{$universe_desc}...</td>";
        echo "<td><a href='categories.php?delete={$universe_id}'>Delete</a></td>";
        echo "<td><a href='categories.php?edit={$universe_id}'>Edit</a></td>";
        echo "</tr>";
    }
}

function deleteCategories() {
    
    global $connection;
    
    if (isset($_GET['delete'])) {
        $the_cat_id = $_GET['delete'];
        $query = "DELETE FROM categories WHERE cat_id = {$the_cat_id} ";
        $delete_query = mysqli_query($connection, $query);
        header("Location: categories.php");
    }
}


// ........................... MOVIES .........................................


function findAllMovies($universe_id) {
    
    global $connection;
    
    $query = "SELECT * FROM movies WHERE universe_id = {$universe_id}";
    $select_movies = mysqli_query($connection, $query); 
    while($row = mysqli_fetch_assoc($select_movies)) {
        $movie_id = $row["movie_id"];
        $movie_name = $row["movie_name"];
        $movie_image = $row["movie_img"];
        $movie_desc = $row["movie_description"];
        
        $movie_desc = substr($movie_desc, 0, 100);
        
        echo "<tr>";
        echo "<td>{$movie_id}</td>";
        echo "<td>{$movie_name}</td>";
        echo "<td>{$movie_image}</td>";
        echo "<td>{$movie_desc}...</td>";
        echo "<td><a href='movies.php?delete={$movie_id}'>Delete</a></td>";
        echo "<td><a href='movies.php?universe={$universe_id}&edit={$movie_id}'>Edit</a></td>";
        echo "</tr>";
    }
}

function insert_movie($universe_id) {
    
    global $connection;
    
    if (isset($_POST['submit'])) {
        $movie_name = $_POST['movie_name'];
        $movie_image = $_POST['movie_image'];
        $movie_desc = $_POST['movie_description'];
        
        $movie_name = mysqli_real_escape_string($connection, $movie_name);
        $movie_image = mysqli_real_escape_string($connection, $movie_image);
        $movie_desc = mysqli_real_escape_string($connection, $movie_desc);
        
        if ($movie_name == "" || empty($movie_name)) {
            echo "This field cannot be empty";
        } else {
            $query = "INSERT INTO movies(universe_id, movie_name, movie_img, movie_description) ";
            $query .= "VALUES ('{$universe_id}', '{$movie_name}', '{$movie_image}', '{$movie_desc}')";

            $create_movie_query = mysqli_query($connection, $query);

            if (!$create_movie_query) {
                die("QUERY FAILED " . mysqli_error($connection));
            }
        }
    }  
}

// ........................... TV SHOW .........................................


function findAllShows($universe_id) {
    
    global $connection;
    
    $query = "SELECT * FROM shows WHERE universe_id = {$universe_id}";
    $select_shows = mysqli_query($connection, $query); 
    while($row = mysqli_fetch_assoc($select_shows)) {
        $show_id = $row["show_id"];
        $show_name = $row["show_name"];
        $show_image = $row["show_img"];
        $show_desc = $row["show_description"];
        
        $show_desc = substr($show_desc, 0, 100);
        
        echo "<tr>";
        echo "<td>{$show_id}</td>";
        echo "<td>{$show_name}</td>";
        echo "<td>{$show_image}</td>";
        echo "<td>{$show_desc}...</td>";
        echo "<td><a href='shows.php?delete={$show_id}'>Delete</a></td>";
        echo "<td><a href='shows.php?universe={$universe_id}&edit={$show_id}'>Edit</a></td>";
        echo "</tr>";
    }
}

function insert_show($universe_id) {
    
    global $connection;
    
    if (isset($_POST['submit'])) {
        $show_name = $_POST['show_name'];
        $show_image = $_POST['show_image'];
        $show_desc = $_POST['show_description'];
        
        $show_name = mysqli_real_escape_string($connection, $show_name);
        $show_image = mysqli_real_escape_string($connection, $show_image);
        $show_desc = mysqli_real_escape_string($connection, $show_desc);
        
        if ($show_name == "" || empty($show_name)) {
            echo "This field cannot be empty";
        } else {
            $query = "INSERT INTO shows(universe_id, show_name, show_img, show_description) ";
            $query .= "VALUES ('{$universe_id}', '{$show_name}', '{$show_image}', '{$show_desc}')";

            $create_show_query = mysqli_query($connection, $query);

            if (!$create_show_query) {
                die("QUERY FAILED " . mysqli_error($connection));
            }
        }
    }  
}

// ........................... BOOKS .........................................


function findAllBooks($universe_id) {
    
    global $connection;
    
    $query = "SELECT * FROM books WHERE universe_id = {$universe_id}";
    $select_books = mysqli_query($connection, $query); 
    while($row = mysqli_fetch_assoc($select_books)) {
        $book_id = $row["book_id"];
        $book_name = $row["book_name"];
        $book_image = $row["book_img"];
        $book_desc = $row["book_description"];
        
        $book_desc = substr($book_desc, 0, 100);
        
        echo "<tr>";
        echo "<td>{$book_id}</td>";
        echo "<td>{$book_name}</td>";
        echo "<td>{$book_image}</td>";
        echo "<td>{$book_desc}...</td>";
        echo "<td><a href='books.php?delete={$book_id}'>Delete</a></td>";
        echo "<td><a href='books.php?universe={$universe_id}&edit={$book_id}'>Edit</a></td>";
        echo "</tr>";
    }
}

function insert_book($universe_id) {
    
    global $connection;
    
    if (isset($_POST['submit'])) {
        $book_name = $_POST['book_name'];
        $book_image = $_POST['book_image'];
        $book_desc = $_POST['book_description'];
        
        $book_name = mysqli_real_escape_string($connection, $book_name);
        $book_image = mysqli_real_escape_string($connection, $book_image);
        $book_desc = mysqli_real_escape_string($connection, $book_desc);
        
        if ($book_name == "" || empty($book_name)) {
            echo "This field cannot be empty";
        } else {
            $query = "INSERT INTO books(universe_id, book_name, book_img, book_description) ";
            $query .= "VALUES ('{$universe_id}', '{$book_name}', '{$book_image}', '{$book_desc}')";

            $create_book_query = mysqli_query($connection, $query);

            if (!$create_book_query) {
                die("QUERY FAILED " . mysqli_error($connection));
            }
        }
    }  
}

// ........................... GAMES .........................................


function findAllGames($universe_id) {
    
    global $connection;
    
    $query = "SELECT * FROM games WHERE universe_id = {$universe_id}";
    $select_games = mysqli_query($connection, $query); 
    while($row = mysqli_fetch_assoc($select_games)) {
        $game_id = $row["game_id"];
        $game_name = $row["game_name"];
        $game_image = $row["game_img"];
        $game_desc = $row["game_description"];
        
        $game_desc = substr($game_desc, 0, 100);
        
        echo "<tr>";
        echo "<td>{$game_id}</td>";
        echo "<td>{$game_name}</td>";
        echo "<td>{$game_image}</td>";
        echo "<td>{$game_desc}...</td>";
        echo "<td><a href='games.php?delete={$game_id}'>Delete</a></td>";
        echo "<td><a href='games.php?universe={$universe_id}&edit={$game_id}'>Edit</a></td>";
        echo "</tr>";
    }
}

function insert_game($universe_id) {
    
    global $connection;
    
    if (isset($_POST['submit'])) {
        $game_name = $_POST['game_name'];
        $game_image = $_POST['game_image'];
        $game_desc = $_POST['game_description'];
        
        $game_name = mysqli_real_escape_string($connection, $game_name);
        $game_image = mysqli_real_escape_string($connection, $game_image);
        $game_desc = mysqli_real_escape_string($connection, $game_desc);
        
        if ($game_name == "" || empty($game_name)) {
            echo "This field cannot be empty";
        } else {
            $query = "INSERT INTO games(universe_id, game_name, game_img, game_description) ";
            $query .= "VALUES ('{$universe_id}', '{$game_name}', '{$game_image}', '{$game_desc}')";

            $create_game_query = mysqli_query($connection, $query);

            if (!$create_book_query) {
                die("QUERY FAILED " . mysqli_error($connection));
            }
        }
    }  
}

?>