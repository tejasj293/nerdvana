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
                            <small>Shows</small>
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
                           <h2>Top Rated Shows</h2>
                            <table class="table table-bordered table-hover">
                               <thead>
                                   <tr>
                                       <th>Show Name</th>
                                       <th>Rating</th>
                                   </tr>
                               </thead>
                               <tbody>
                                    <?php 
                                    $query = "SELECT * FROM shows ORDER BY show_rating DESC";
                                    $getOrderedShows = mysqli_query($connection, $query);    
                                    while ($row = mysqli_fetch_assoc($getOrderedShows)) {
                                        $show_name = $row['show_name'];
                                        $show_rating = $row['show_rating'];
                                    ?>  
                                    <tr>
                                        <td><?php echo $show_name ?></td>
                                        <td><?php echo $show_rating ?></td>
                                    </tr>
                                    <?php } ?>
                               </tbody>
                           </table>
                       </div>
                       
                       <div class="col-xs-6">
                           <h2>Top Viewed Shows</h2>
                            <table class="table table-bordered table-hover">
                               <thead>
                                   <tr>
                                       <th>Show Name</th>
                                       <th>Views</th>
                                   </tr>
                               </thead>
                               <tbody>
                                    <?php 
                                    $query = "SELECT * FROM shows ORDER BY show_views DESC";
                                    $getOrderedShows = mysqli_query($connection, $query);    
                                    while ($row = mysqli_fetch_assoc($getOrderedShows)) {
                                        $show_name = $row['show_name'];
                                        $show_views = $row['show_views'];
                                    ?>  
                                    <tr>
                                        <td><?php echo $show_name ?></td>
                                        <td><?php echo $show_views ?></td>
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