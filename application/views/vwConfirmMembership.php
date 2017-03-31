<style>
.congrats-image {
    max-width: 60%;
    height: auto;
    display: block;
    margin: 0 auto;
}



/* CSS for Credit Card Payment form */
.credit-card-box .panel-title {
    display: inline;
    font-weight: bold;
}
.credit-card-box .form-control.error {
    border-color: red;
    outline: 0;
    box-shadow: inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px rgba(255,0,0,0.6);
}
.credit-card-box label.error {
  font-weight: bold;
  color: red;
  padding: 2px 8px;
  margin-top: 2px;
}
.credit-card-box .payment-errors {
  font-weight: bold;
  color: red;
  padding: 2px 8px;
  margin-top: 2px;
}
.credit-card-box label {
    display: block;
}
/* The old "center div vertically" hack */
.credit-card-box .display-table {
    display: table;
}
.credit-card-box .display-tr {
    display: table-row;
}
.credit-card-box .display-td {
    display: table-cell;
    vertical-align: middle;
    width: 50%;
}
/* Just looks nicer */
.credit-card-box .panel-heading img {
    min-width: 180px;
}
.center {
    margin: auto;
    width: 50%;
    padding: 10px;
}

.panel2 {
    border: 0;
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
                    <div class="panel2 panel-default" id="info">
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                            <img class="congrats-image" src="<?php echo HTTP_IMAGES_PATH ?>Congratulations.jpg" alt=""><br>
                                            You have reached required number of bookings to qualify for a royal membership!
                                            We wanted to thank you for your trust and loyalty - please accept our Royal membership free for <b>first year</b> as a gift!
                                            Normally, all users have to pay the membership fee, but our company values their long-time customers!<br><br>
                                            To proceed with your application click the "Confirm" button below.<br>
                                            You can also cancel your request, by pressing "Cancel button.</p>       
                                            
                                            <?php $date = new DateTime; ?>
                                            <b>Membership start:</b> <?php echo $date->format("d.m.Y");
                                            $date->modify("+1 year");?><br>
                                            <b>Membership end:</b> <?php echo $date->format("d.m.Y");?>
                                </div>
                            </div>    
                        </div>

                                    



<div class="center">
<div class="container">
    <div class="row">
        <!-- You can make it whatever width you want. I'm making it full width
             on <= small devices and 4/12 page width on >= medium devices -->
        <div class="col-xs-12 col-md-4">

        
            <!-- CREDIT CARD FORM STARTS HERE -->
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table" >
                    <div class="row display-tr" >
                        <h3 class="panel-title display-td" >Payment Details</h3>
                        <div class="display-td" >                            
                            <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                        </div>
                    </div>                    
                </div>
                <div class="panel-body">
                    <form role="form" id="payment-form" method="POST" action="javascript:void(0);">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="card_number">CARD NUMBER</label>
                                    <div class="input-group">
                                        <input 
                                            type="tel"
                                            class="form-control"
                                            name="card_number"
                                            value="<?php echo $user_info['card_number'] ?>"
                                            placeholder="Valid Card Number"
                                            autocomplete="cc-number"
                                            required autofocus 
                                        />
                                        <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                    </div>
                                </div>                            
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-7 col-md-7">
                                <div class="form-group">
                                    <label for="expiry_date"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                    <input 
                                        type="tel" 
                                        class="form-control" 
                                        name="expiry_date"
                                        placeholder="MM / YY"
                                        autocomplete="cc-exp"
                                        value="<?php echo $user_info['expiry_date'] ?>"
                                        required 
                                    />
                                </div>
                            </div>
                            <div class="col-xs-5 col-md-5 pull-right">
                                <div class="form-group">
                                    <label for="security_code">CV CODE</label>
                                    <input 
                                        type="tel" 
                                        class="form-control"
                                        name="security_code"
                                        value="<?php echo $user_info['security_code'] ?>"
                                        placeholder="CVC"
                                        autocomplete="cc-csc"
                                        required
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">

                            </div>
                        </div>
                        <div class="row" style="display:none;">
                            <div class="col-xs-12">
                                <p class="payment-errors"></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>         
                                        <a href="/account" class="btn btn-default btn-block">Cancel</a> 
                                <button class="subscribe btn btn-success btn-lg btn-block" type="button">Start Membership</button>   
            <!-- CREDIT CARD FORM ENDS HERE -->


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



<?php if(0): ?>
                <!-- Alternative card info -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Debit card details
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    It looks like you haven't entered your debit card details yet. Please enter them now to proceed as they are required for the membership to continue. No charge will be taken from your account.
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
                                        </form>
                                        <a href="/account" class="btn btn">Cancel</a> 
                                        <a href="/membership/activate/2" class=" btn btn-success pull-right">Confirm</a> 
<?php endif; ?>