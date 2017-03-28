<body>

    <div id="wrapper">

        <?php $this->view('snippets/navigation') ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-lg-10">
                                <h1 class="remove-margin">Bookings</h1>
                            </div>
                            <div class="col-lg-2">
                                <a class="btn btn-default pull-right" href="/bookings/create">Create a Booking</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List of bookings
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th style="width: 30px">#</th>
                                            <th style="width: 150px">Date</th>
                                            <th>Booked by</th>
                                            <th>Instructor</th>
                                            <th>Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($bookings_data as $booking): ?>
                                            <tr>
                                                <td><?php echo $booking['id'] ?></td>
                                                <td><?php echo $booking['session_date'] ?></td>
                                                <td><?php echo $booking['member_booked']['first_name']. " ".$booking['member_booked']['last_name'] ?></td>
                                                <td><?php echo $booking['instructor_id'] == 0 ? "No instructor" : "<b>".$booking['instructor']['first_name']." ".$booking['instructor']['last_name']. "</b>" ?></td>
                                                <td>Options</td>
                                            </tr>
                                        <?php endforeach; ?>
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
