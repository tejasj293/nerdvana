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
                           
                             <?php insert_book($universe_id); ?>
                           
                            <form action="" method="post">
                               <label for="book_name">Book Name</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="book_name">
                                </div>
                                <label for="book_image">Book Image</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="book_image">
                                </div>
                                <label for="book_description">Book Information</label>
                                <div class="form-group">
                                    <textarea rows="6" class="form-control" name="book_description"></textarea>
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Add Book">
                                </div>
                            </form>
                            
                            <?php 
                            if (isset($_GET['edit'])) {
                                $book_id = $_GET['edit'];
                                include "includes/update_books.php";
                            }
                            ?>
                            
                       </div>
                       <div class="col-xs-6">
                           <table class="table table-bordered table-hover">
                               <thead>
                                   <tr>
                                       <th>Id</th>
                                       <th>Book Name</th>
                                       <th>Book Image</th>
                                       <th>Book Information</th>
                                   </tr>
                               </thead>
                               <tbody>
                                    <?php findAllBooks($universe_id); ?>  
                                    
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