<body>

    <div id="wrapper">

        <?php $this->view('snippets/navigation') ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-lg-10">
                                <h1 class="remove-margin"><a href="/bookings">Bookings</a> > New Booking</h1>
                            </div>
                            <div class="col-lg-2">
                                <a class="btn btn-default pull-right" href="/bookings/new">Submit Booking</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Make a booking
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" value="<?php echo $this->session->userdata('username'); ?>">
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                        <div class="form-group">
                                            <label>Date</label>
                                            <input class="form-control datepicker" type="text" placeholder="Pick a date">
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                        <button type="submit" class="btn btn-default hide">Submit Button</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->