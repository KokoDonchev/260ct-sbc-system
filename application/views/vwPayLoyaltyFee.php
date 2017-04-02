<style>
.congrats-image {
    max-width: 60%;
    height: auto;
    display: block;
    margin: 0 auto;
}


.row {
    margin: auto;
    width: 100%;
}
.panel2 {
    border: 0;
    text-align: center;
    

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
                                <h1 class="remove-margin"><a href="/account">Account</a> > Pay Loyalty Fee</h1>
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
                                            Thank you for your interest in purchasing Royalty membership!<br><br>
                                            Loyalty fee is yearly payment of <b>£50</b> that gives you <br> 
                                            access to all additional features provided by royalty membership. <br><br>
                                            
                                            <?php $date = new DateTime; ?>
                                            <b>Membership start:</b> <?php echo $date->format("d.m.Y");
                                            $date->modify("+1 year");?><br>
                                            <b>Membership end:</b> <?php echo $date->format("d.m.Y");?><br><br>
                                            Before continuing, please make sure your debit card details are up to date.<br>
                                    
            <div class="row">
                <div class="col-lg-8 col-md-offset-2" style="width: 70%;">
                    <div class="panel center panel-default" style="border: 0;">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form method="POST" action="" role="form">
                                        <div class="form-group center-block" style="width: 60%;">       
                                            <div>
                                                 <label>Card number</label>
                                                <input name="card_number" class="form-control" value="<?php echo $user_info['card_number'] ?>" placeholder="16 digits on the front of card" maxlength="16">
                                            </div>
                                            <div class="form-group"><br>
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
                                                <input name="security_code" class="form-control" value="<?php echo $user_info['security_code'] ?>" placeholder="3 digits on the back of card" maxlength="3">
                                            </div>

                                            <div class="form-group">
                                                <label>Expiry Date</label>
                                                <input name="expiry_date" class="form-control datepicker" value="<?php echo $user_info['expiry_date'] ?>" placeholder="Expiry Date">
                                            <br></div></div></div>
                                            
                                        <a href="/account" class="btn btn-default pull-left">Cancel</a> 
                                        <button  type="submit" class="btn btn-info pull-right">Pay Loyalty Fee!</button>
                                            


                                           
                                        </div>

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

<!--


