<style>
img {
    max-width: 50%;
    height: auto;
    display: block;
    margin: 0 auto;
}

.center {
    text-align: center;
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
                                <h1 class="remove-margin"><a href="/dashboard">Dashboard</a> > Update your account</h1>
                            </div>
                            <div class="col-lg-2">
                                <a class="update_details_button btn btn-default pull-right" href="#">Update information</a>
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
                        <div class="panel-heading">
                            Update information
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form method="post" action="/account" role="form">
                                        <div class="form-group">
                                            <label>First name</label>
                                            <input name="first_name" class="form-control" value="<?php echo $user_info['first_name'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Last name</label>
                                            <input name="last_name" class="form-control" value="<?php echo $user_info['last_name'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input name="email_address" class="form-control" value="<?php echo $user_info['email_address'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Mobile Phone</label>
                                            <div class="row">
                                                <div class="col-lg-2">
                                                    <select name="mobile_number_code" class="form-control">
                                                        <?php foreach ($countries as $key => $country): ?>
                                                            <?php $current_mobile_code = $user_info['mobile_number_code']; ?>
                                                            <option value="<?php echo $key ?>" <?php echo $key == $current_mobile_code ? "selected" : "" ?>>+<?php echo $key ?></option>
                                                        <?php endforeach ?>
                                                    </select> 
                                                </div>
                                                <div class="col-lg-10">
                                                    <input name="mobile_number" class="form-control" value="<?php echo $user_info['mobile_number'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input name="current_address" class="form-control" value="<?php echo $user_info['current_address'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Town</label>
                                            <input name="current_town" class="form-control" value="<?php echo $user_info['current_town'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Postcode</label>
                                            <input name="address_postcode" class="form-control" value="<?php echo $user_info['address_postcode'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Country</label>
                                            <select name="current_country" class="form-control">
                                                <?php foreach ($countries as $country): ?>
                                                    <?php $current_country = $user_info['current_country']; ?>
                                                    <option <?php echo $country == $current_country ? "selected" : "" ?>><?php echo $country ?></option>
                                                <?php endforeach ?>
                                            </select> 
                                        </div>
                                        <button type="submit" class="update_details_button_trigger btn btn-default hide">Submit Button</button>
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
                <div class="col-lg-6">


                    <!-- MEMBERSHIP PART - TOMEK'S PROPERTY - TURN BACK -->
                    
                    <?php  //$count_memberships = 10 ?>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Membership information
                        </div>
                        <div class="panel-body">
                        <div class="center"><br><br>
                            <h2 style="margin-top: 0;">Current membership:</h2><br>
                     

                            <?php if ($membership_type == 1):
                                ?><img src="<?php echo HTTP_IMAGES_PATH ?>Basic.png" alt="">
                                <?php $progress = $count_memberships * 10;
                                

                                
                                if ($count_memberships<10):?>

                                    <br>
                                    <h2 style="margin-top: 0;">Progress:</h2><br>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-info" style="width:<?php echo $progress; ?>%">
                                            <?php echo $count_memberships; ?> out of 10
                                        </div>
                                    </div>
                                    <p>You currently have <b><?php echo $count_memberships ?></b> bookings. <br>To be able to apply for Royal membership you need to have at least <b>10</b> bookings.<br>
                                        Royal membership gives its users wide range of new features - but most importantly it gives you a lower rate for standard or training sessions.
                                        Normally, one needs to pay loyalty fee, but if you will book at least <b>10</b> bookings within our system, you will gain it for <b>free</b>. </p>
                                        <br>
                                        If you wish to pay loyalty fee to gain Royalty Membership, click below button:<br><br>
                                        <a href="/membership/pay" class="btn btn-info">Pay Loyalty Fee</a> 

                                <?php else:?>

                                    <br>
                                    <h2 style="margin-top: 0;">Progress:</h2><br>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-success" style="width:<?php echo $progress; ?>%">
                                            <?php echo $count_memberships; ?> out of 10
                                        </div>
                                    </div>
                                    <p><b>You can apply for Royal membership!</b><br> 
                                        We wanted to thank you for your trust and loyalty - please accept our Royal membership for free as a gift.
                                        Normally, all users have to pay the membership fee.
                                        To proceed with your application click the button below.</p><br>
                                    <a href="/membership" class="btn btn-success">Apply now</a> 

                                <?php endif;
                                
                                
                            else: ?>
                                <img src="<?php echo HTTP_IMAGES_PATH ?>Royal.png" alt=""><br>
                                <p><b>Your Royal membership is active!</b><br> <br>
                                        We wanted to thank you for your trust and loyalty.<br>
                                        Your membership is active until: <b> <?php echo $user_info['membership_end']; ?><br></b><br>
                                        
                                        To cancel your membership click the button below.</p>
                                <br><a href="/membership/activate/1" class="btn btn-success">Cancel Royal membership</a> 
                                <?php
                                
                            endif;
                            
                            ?>
                        </div>
                        <br><br>
                    </div>
                    </div>

                    <!-- END OF TOMEK'S PROPERTY -->
                    
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    
    </div>
    <!-- /#wrapper -->