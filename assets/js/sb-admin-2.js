/*!
 * Start Bootstrap - SB Admin 2 v3.3.7+1 (http://startbootstrap.com/template-overviews/sb-admin-2)
 * Copyright 2013-2016 Start Bootstrap
 * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap/blob/gh-pages/LICENSE)
 */
$(function() {
    $('#side-menu').metisMenu();
});

//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size
$(function() {
    $(window).bind("load resize", function() {
        var topOffset = 50;
        var width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.navbar-collapse').addClass('collapse');
            topOffset = 100; // 2-row-menu
        } else {
            $('div.navbar-collapse').removeClass('collapse');
        }

        var height = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) - 1;
        height = height - topOffset;
        if (height < 1) height = 1;
        if (height > topOffset) {
            $("#page-wrapper").css("min-height", (height) + "px");
        }
    });

    var url = window.location;
    // var element = $('ul.nav a').filter(function() {
    //     return this.href == url;
    // }).addClass('active').parent().parent().addClass('in').parent();
    var element = $('ul.nav a').filter(function() {
        return this.href == url;
    }).addClass('active').parent();

    while (true) {
        if (element.is('li')) {
            element = element.parent().addClass('in').parent();
        } else {
            break;
        }
    }

    // activate datepickers for all elements with a class of `datepicker`
    $('.datepicker').pikaday({ firstDay: 1 });

    $('.update_details_button').click(function(event) {
        event.preventDefault();
        $('.update_details_button_trigger').click();
    });

    $('.create_booking_button').click(function(event) {
        event.preventDefault();
        $('.create_booking_trigger').click();
    });

    $('.booking_type_dropdown').change(function() {
        var is_instructor = $('.booking_type_dropdown option:selected').data('instructor');
        console.log(is_instructor);
        if (is_instructor == 0) {
            $('.bookings_instructor').hide();
            $('.is_instructor').val('0');
        } else {
            $('.bookings_instructor').show();
            $('.is_instructor').val('1');
        }
    });

    $('.trigger-payment-panel').click(function(event) { // if pay now button clicked
        event.preventDefault(); // preventing anchor from redirecting to another page
        $('.payment-panel-booking').removeClass('hide'); // showing the panel for payment information

        // setting the value of the hidden input to 1 helps to detemine wether to check for the payment info
        $('input[name="is_payment_now"]').val("1"); 
    });

});