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
                                <a class="create_booking_button btn btn-default pull-right" href="#">Submit Booking</a>
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
                            Make a booking
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form method="POST" action="" role="form">
                                        <div class="form-group">
                                            <label>Full name</label>
                                            <p class="form-control-static"><?php echo $user_info['first_name'] . " " . $user_info['last_name']; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Mobile phone</label>
                                            <p class="form-control-static">+<?php echo $user_info['mobile_number_code'] . " " . $user_info['mobile_number']; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <p class="form-control-static"><?php echo $user_info['email_address']; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <p class="form-control-static"><?php echo $user_info['current_address'] . ", " . $user_info['current_town'] . ", " . $user_info['current_country'] . " - " . $user_info['address_postcode']; ?></p>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                             <p class="form-control-static">If you wish to update any of the above details, please update your <a href="/account">profile</a>.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Date</label>
                                            <input name="booking_date" class="form-control datepicker" type="text" placeholder="Pick a date">
                                        </div>
                                        <div class="form-group">
                                            <label>Session type</label>
                                            <?php $discount = 1.0;
                                            if ($user_info["membership_level"] == "2"):
                                                $discount = 0.7; ?><br>
                                                <?php echo  '<span style="color:green;"> Royal membership detected. 30% discount applied! </span>' ?><br>
                                            <?php endif; ?>
                                            <select name="booking_type" class="form-control booking_type_dropdown">
                                                <?php foreach ($booking_types as $type): ?>
                                                    <option data-instructor="<?php echo $type['instructor_option'] ?>" value="<?php echo $type['id'] ?>"><?php echo $type['title'] ?> - £<?php echo money_format('%i', $type['price'] * $discount) ?></option>
                                                <?php endforeach ?>
                                            </select>
                                            <input type="hidden" value="0" class="is_instructor" name="is_instructor">
                                        </div>
                                        <div class="form-group bookings_instructor">
                                            <label>Choose instructor</label>
                                            <select name="instructor_option" class="form-control">
                                                <?php foreach ($instructors_list as $instructor): ?>
                                                    <option value="<?php echo $instructor['id'] ?>"><?php echo $instructor['first_name'] . " " . $instructor['last_name'] ?></option>
                                                <?php endforeach ?>
                                            </select> 
                                        </div>
                                        <button type="submit" class="create_booking_trigger btn btn-default hide">Submit Button</button>
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