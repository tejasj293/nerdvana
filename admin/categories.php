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
                            <small>Universe</small>
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
                       <div class="col-xs-6">
                           
                           <?php insert_universe(); ?>
                           
                            <form action="" method="post">
                               <label for="universe_name">Universe Name</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="universe_name">
                                </div>
                                <label for="universe_image">Universe Image</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="universe_image">
                                </div>
                                <label for="universe_description">Universe Information</label>
                                <div class="form-group">
                                    <textarea rows="6" class="form-control" name="universe_description"></textarea>
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Add Universe">
                                </div>
                            </form>
                            
                            <?php 
                            if (isset($_GET['edit'])) {
                                $cat_id = $_GET['edit'];
                                include "includes/update_categories.php";
                            }
                            ?>
                            
                       </div>
                       <div class="col-xs-6">
                           <table class="table table-bordered table-hover">
                               <thead>
                                   <tr>
                                       <th>Id</th>
                                       <th>Universe Name</th>
                                       <th>Image</th>
                                       <th>Information</th>

                                   </tr>
                               </thead>
                               <tbody>
                                    <?php findAllUniverse(); ?>  
                                    
                                    <?php deleteCategories(); ?>
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
