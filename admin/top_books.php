<?php include "includes/admin_header.php" ?>

    <div id="wrapper">

        <!-- Navigation -->
<?php include "includes/admin_navigation.php" ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin 
                            <small>Books</small>
                        </h1>
<!--
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
-->
                    <?php
                    if (isset($_GET['universe'])) {
                        $universe_id = $_GET['universe'];
                    }
                    ?>
                      
                       <div class="col-xs-6">
                           <h2>Top Rated Books</h2>
                            <table class="table table-bordered table-hover">
                               <thead>
                                   <tr>
                                       <th>Book Name</th>
                                       <th>Rating</th>
                                   </tr>
                               </thead>
                               <tbody>
                                    <?php 
                                    $query = "SELECT * FROM books ORDER BY book_rating DESC";
                                    $getOrderedBooks = mysqli_query($connection, $query);    
                                    while ($row = mysqli_fetch_assoc($getOrderedBooks)) {
                                        $book_name = $row['book_name'];
                                        $book_rating = $row['book_rating'];
                                    ?>  
                                    <tr>
                                        <td><?php echo $book_name ?></td>
                                        <td><?php echo $book_rating ?></td>
                                    </tr>
                                    <?php } ?>
                               </tbody>
                           </table>
                       </div>
                       
                       <div class="col-xs-6">
                           <h2>Top Viewed Books</h2>
                            <table class="table table-bordered table-hover">
                               <thead>
                                   <tr>
                                       <th>Book Name</th>
                                       <th>Views</th>
                                   </tr>
                               </thead>
                               <tbody>
                                    <?php 
                                    $query = "SELECT * FROM books ORDER BY book_views DESC";
                                    $getOrderedBooks = mysqli_query($connection, $query);    
                                    while ($row = mysqli_fetch_assoc($getOrderedBooks)) {
                                        $book_name = $row['book_name'];
                                        $book_views = $row['book_views'];
                                    ?>  
                                    <tr>
                                        <td><?php echo $book_name ?></td>
                                        <td><?php echo $book_views ?></td>
                                    </tr>
                                    <?php } ?>
                               </tbody>
                           </table>
                       </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php include "includes/admin_footer.php" ?>