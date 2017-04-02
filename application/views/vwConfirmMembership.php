<style>
.congrats-image {
    max-width: 60%;
    height: auto;
    display: block;
    margin: 0 auto;
}

.panel {
    text-align: center;
    margin: 0 auto;
}
</style>
<body>

    <div id="wrapper">

        <?php $this->view('snippets/navigation') ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-lg-10">
                                <h1 class="remove-margin"><a href="/account">Account</a> > Confirm Membership</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                <?php echo validation_errors(); ?>
                <?php
                    if (isset($status) && $status) {
                        echo "<div class='alert alert-success' role='alert'>". $status ."</div>";
                    }
                ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                            <img class="congrats-image" src="<?php echo HTTP_IMAGES_PATH ?>Congratulations.jpg" alt=""><br>
                                            You have reached required number of bookings to qualify for a royal membership!<br>
                                            We wanted to thank you for your trust and loyalty. <br>Please accept our Royal membership free for <b>first year</b> as a gift!<br><br>
                                            
                                            <?php $date = new DateTime; ?>
                                            <b>Membership start:</b> <?php echo $date->format("d.m.Y");
                                            $date->modify("+1 year");?><br>
                                            <b>Membership end:</b> <?php echo $date->format("d.m.Y");?><br><br>
                                    

                                        <a href="/account" class="btn btn-default pull-left">Cancel</a> 
                                        <a href="/membership/activate/2" class="btn btn-success pull-right">Confirm</a>
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

<!--


