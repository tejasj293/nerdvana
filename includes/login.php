<?php include "db.php"; ?>
<?php session_start(); ?>

<?php 

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);
    
    $hashFormat = "$2y$10$";
    $salt = "iusesomecrazystrings22";
    $hashF_and_salt = $hashFormat . $salt;
    $password = crypt($password, $hashF_and_salt);
    
    $query = "SELECT * FROM users WHERE firstName = '{$username}'";
    $select_user_query = mysqli_query($connection, $query);
    
    if (!$select_user_query) {
        die("QUERY FAILED " . mysqli_error($connection));
    }
    
    while ($row = mysqli_fetch_assoc($select_user_query)) {
        $db_emailAdd = $row['emailAdd'];
        $db_firstName = $row['firstName'];
        $db_password = $row['password'];
        $db_gender = $row['gender'];
        $db_phoneNumber = $row['phoneNumber'];
    }
    
    if ($username !== $db_firstName && $password !== $db_password) {
        header("Location: ../login.php");
    } else if ($username == $db_firstName && $password == $db_password) {
        $_SESSION['username'] = $db_firstName;
        header("Location: ../admin");
    } else {
        header("Location: ../login.php");
    }
    
}

?>
