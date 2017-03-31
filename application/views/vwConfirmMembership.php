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
                        echo "<div class='alert alert-" . $status['type'] . "' role='alert'>". $status['message'] ."</div>";
                    }
                ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Royal Membership
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                            <br><label>Congratulations!</label><br><br>
                                            You have reached required number of bookings to qualify for a royal membership!
                                            We wanted to thank you for your trust and loyalty - please accept our Royal membership for free as a gift.
                                            Normally, all users have to pay the membership fee, but our company values their long-time customers!<br><br>
                                            To proceed with your application click the "Confirm" button below.<br>
                                            You can also cancel your request, by pressing "Cancel button.</p><br>       
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
                                    

                                    <!-- CARD DETAILS -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Royal Membership
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">

                                     <?php if ($user['card_number']==NULL): ?>
                                    <form method="POST" action="" role="form">
                                        <div class="form-group">                                   
                                            
                                            

                                            <div>
                                                 <label>Card number</label>
                                                <input name="card_number" class="form-control" value="<?php echo $user_info['card_number'] ?>">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Card Type</label>
                                                <select name="card_type" class="form-control">
                                                    <?php foreach (array("VISA", "MasterCard", "Visa Debit", "Maestro", "Visa Electron (UKE)", "American Express") as $country): ?>
                                                        <?php $current_card = $user_info['card_type']; ?>
                                                        <option <?php echo $country == $current_card ? "selected" : "" ?>><?php echo $country ?></option>
                                                    <?php endforeach ?>
                                                </select> 
                                            </div>

                                            <div class="form-group">
                                                <label>Security code</label>
                                                <input name="security_code" class="form-control" value="<?php echo $user_info['security_code'] ?>" placeholder="3 digits code on the back of the card">
                                            </div>

                                            <div class="form-group">
                                                <label>Expiry Date</label>
                                                <input name="expiry_date" class="form-control datepicker" value="<?php echo $user_info['expiry_date'] ?>" placeholder="Expiry Date">
                                            </div>

                                            <button type="submit" class="update_details_button_trigger btn btn-default">Submit Button</button>


                                            <?php endif; ?>
                                        </div>
                                        <a href="/account" class="btn btn">Cancel</a> 
                                        <a href="/membership/activate/2" class=" btn btn-success pull-right">Confirm</a> 
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