<?php include "includes/header.php"; ?>
<?php include "includes/db.php"; ?>

<?php include "includes/nav.php"; ?>

<?php
    if (isset($_GET['universe'])) {
        $universe_id = $_GET['universe'];
    }
?>

<?php
    $query = "SELECT * FROM quiz WHERE universe_id = {$universe_id}";
    $getQuiz = mysqli_query($connection, $query);
    $answers = array();
?>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <p class="lead">Quiz</p>
            <div class="list-group">
                <li class="list-group-item active">Info 1</li>
                <li class="list-group-item">Info 1</li>
                <li class="list-group-item">Info 1</li>
            </div>
        </div>
        
        <div class="col-md-9">
            <form action="quiz.php?universe=<?php echo $universe_id ?>" method="post">
            <?php
            while ($row = mysqli_fetch_assoc($getQuiz)) {
                $question_id = $row['question_id'];
                $question = $row['question'];
                $option_a = $row['option_a'];
                $option_b = $row['option_b'];
                $option_c = $row['option_c'];
                $answers[$question_id] = $row['correct_option'];
            ?>
            <div class="well">
                <div class="row">
                    <div class="col-md-12">
                        <h3><?php echo $question; ?></h3>
                        <hr>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <input type="radio" name="<?php echo $question_id; ?>" value="1">
                            </span>
                            <span class="form-control"><?php echo $option_a; ?></span>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <input type="radio" name="<?php echo $question_id; ?>" value="2">
                            </span>
                            <span class="form-control"><?php echo $option_b; ?></span>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <input type="radio" name="<?php echo $question_id; ?>" value="3">
                            </span>
                            <span class="form-control"><?php echo $option_c; ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?> 
            
            <button class="btn btn-primary" type="submit" name="submit">Check your Score</button>
            </form>           
            <hr>
        </div>
    </div>
</div>

<?php
    $query = "SELECT * FROM quiz WHERE universe_id = {$universe_id}";
    $getQuiz = mysqli_query($connection, $query);
?>

<?php 
    if (isset($_POST['submit'])) {
        
        $count = 0;
        
        while ($row = mysqli_fetch_assoc($getQuiz)) {
            $question_id = $row['question_id'];
            if ($answers[$question_id] === $_POST[$question_id]) {
                $count++;
            } 
        } 
?> 

<div class="container">
   <div class="row">
       <div class="col-md-3">
       </div>
       <div class="col-md-9">
            <div class="well">
                <?php echo "<h1>Your score is {$count}</h1>"; ?>
            </div>
       </div>
   </div>
</div>

<?php } ?>

<?php include "includes/footer.php"; ?>