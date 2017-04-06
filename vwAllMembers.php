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
                                            <th>Access level</th>
                                            <th>Membership</th>
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
                                                <td><?php if($user['membership_level']==1): echo "Basic"; else: echo "Royal"; endif; ?></td>
                                                <td>
													<a href="<?= base_url()."members/remove/".$user['id'] ?>" title="Remove"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                	/
													<a href="<?= base_url()."members/make_instructor/".$user['id'] ?>" title="Make insructor"><i class="fa fa-user-md" aria-hidden="true"></i></a>
													/
													<a href="<?= base_url()."members/make_slope/".$user['id'] ?>" title="Make slope operator"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
                                                </td>
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
