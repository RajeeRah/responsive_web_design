/* 
 * Using jQuery to get selected Value and pass to the Controller
 */

$(document).ready(function () {

    // Do something by Button Click - this example calls ajax request 
    $("input[type='button']").click(function () {

        var amountValue = $("input[name='donamtionAmount']:checked").val();

        if (amountValue) {

            // send ajaxRequest with selected Data -> Donation Controller is
            // called to work with this data
            $.ajax({
                type: "POST",
                url: '../controller/donation_controller.php',
                data: ({donation: amountValue}),

                success: function (response) {

                    var x = screen.width / 2 - 700 / 2;
                    var y = screen.height / 2 - 450 / 2;
                    //open a new window note:this is a popup so it may be blocked by your browser
                    var newWindow = window.open("", "new window", 'width=200, height=100, left=' + x + ',top=' + y);

                    //write the data to the document of the newWindow
                    //a new form must be created to successfully execute the donation
                    newWindow.document.write("Donated Amount: ");
                    newWindow.document.write(response);
                },
                // Alert status code and error if fail
                error: function (xhr, ajaxOptions, thrownError) {
                    alert("Error 1 " + xhr.status);
                    alert("Error 2 " + thrownError);
                }
            });
        }
    });

    // Do something when the window is resized
    $(window).resize(function () {
        var viewportWidth = $(window).width();

        if (viewportWidth < 480) {
           // Responsive changes - remove big images via class etc.
        } 
             
    });
});

