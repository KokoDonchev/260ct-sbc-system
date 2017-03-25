<body>

    <div id="wrapper">

        <?php $this->view('snippets/navigation') ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard (<?php echo $this->level_management->get_user_level(); ?>)</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <?php
                    $tile_managers = array('style' => 'panel-primary', 'title' => 'Managers', 'value' => $count_managers);
                    $this->view('snippets/dashboard_tile', $tile_managers);
  
                    $tile_two = array('style' => 'panel-green', 'title' => 'Registered members', 'value' => $count_members);
                    $this->view('snippets/dashboard_tile', $tile_two);

                    $tile_three = array('style' => 'panel-yellow', 'title' => 'Ski Instructors', 'value' => $count_instructors);
                    $this->view('snippets/dashboard_tile', $tile_three);
                    
                    $tile_four = array('style' => 'panel-red', 'title' => 'Slope Operators', 'value' => $count_operators);
                    $this->view('snippets/dashboard_tile', $tile_four);

                    $tile_bookings = array('style' => 'panel-pink', 'title' => 'Bookings', 'value' => $count_bookings);
                    $this->view('snippets/dashboard_tile', $tile_bookings);
                ?>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <?php
                        echo $user_info['username'];
                    ?>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
