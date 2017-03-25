<body>

    <div id="wrapper">

        <?php $this->view('snippets/navigation') ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Members</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List of all members
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th style="width: 40px;">#</th>
                                            <th>Username</th>
                                            <th>Full name</th>
                                            <th>Email address</th>
                                            <th>User type</th>
                                            <th>Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($all_users as $user): ?>
                                            <?php $more_user_info = $this->level_management->get_user_information($user['id']); ?>
                                            <tr>
                                                <td><?php echo $user['id'] ?></td>
                                                <td><?php echo $user['username'] ?></td>
                                                <td><?php echo $more_user_info['first_name'] ?> <?php echo $more_user_info['last_name'] ?></td>
                                                <td><?php echo $more_user_info['email_address'] ?></td>
                                                <td><?php echo $this->level_management->get_user_level($user['id']) ?></td>
                                                <td>Options</td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
