        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Nerdvana Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
               <li><a href="../index.php">Home</a></li>
               
               
<!--
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
-->
                
                
<!--
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
-->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Rhaegar Targaryen <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
<!--
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
-->
<!--
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
-->
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    
                    <li>
                        <a href="categories.php"><i class="fa fa-globe"></i> Universe</a>
                    </li>
                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#movies_dropdown"><i class="fa fa-film"></i> Movies <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="movies_dropdown" class="collapse">
                            <?php
                            $query = "SELECT * FROM universe";
                            $getAllUniverse = mysqli_query($connection, $query);
                            while ($row = mysqli_fetch_assoc($getAllUniverse)) {
                                $universe_id = $row['universe_id'];
                                $universe_name = $row['universe_name'];
                            ?>
                            <li>
                                <a href="movies.php?universe=<?php echo $universe_id; ?>"><?php echo $universe_name; ?></a>
                            </li>
                            <?php } ?>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#shows_dropdown"><i class="fa fa-tv"></i> TV Shows <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="shows_dropdown" class="collapse">
                            <?php
                            $query = "SELECT * FROM universe";
                            $getAllUniverse = mysqli_query($connection, $query);
                            while ($row = mysqli_fetch_assoc($getAllUniverse)) {
                                $universe_id = $row['universe_id'];
                                $universe_name = $row['universe_name'];
                            ?>
                            <li>
                                <a href="shows.php?universe=<?php echo $universe_id; ?>"><?php echo $universe_name; ?></a>
                            </li>
                            <?php } ?>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#games_dropdown"><i class="fa fa-gamepad"></i> Games <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="games_dropdown" class="collapse">
                            <?php
                            $query = "SELECT * FROM universe";
                            $getAllUniverse = mysqli_query($connection, $query);
                            while ($row = mysqli_fetch_assoc($getAllUniverse)) {
                                $universe_id = $row['universe_id'];
                                $universe_name = $row['universe_name'];
                            ?>
                            <li>
                                <a href="games.php?universe=<?php echo $universe_id; ?>"><?php echo $universe_name; ?></a>
                            </li>
                            <?php } ?>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#books_dropdown"><i class="fa fa-book"></i> Books <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="books_dropdown" class="collapse">
                            <?php
                            $query = "SELECT * FROM universe";
                            $getAllUniverse = mysqli_query($connection, $query);
                            while ($row = mysqli_fetch_assoc($getAllUniverse)) {
                                $universe_id = $row['universe_id'];
                                $universe_name = $row['universe_name'];
                            ?>
                            <li>
                                <a href="books.php?universe=<?php echo $universe_id; ?>"><?php echo $universe_name; ?></a>
                            </li>
                            <?php } ?>
                        </ul>
                    </li>
                    
                    <li class="active">
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Profile</a>
                    </li>
                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#top_dropdown"><i class="fa fa-line-chart"></i> Top Charts <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="top_dropdown" class="collapse">
                            <li>
                                <a href="top_universe.php">Universe</a>
                            </li>
                            <li>
                                <a href="top_movies.php">Movies</a>
                            </li>
                            <li>
                                <a href="top_books.php">Books/Comics</a>
                            </li>
                            <li>
                                <a href="top_games.php">Games</a>
                            </li>
                            <li>
                                <a href="top_shows.php">TV Shows</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>