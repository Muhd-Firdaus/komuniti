$(document).ready(function() {
    // Add a click event listener to the button
    $("#increment").click(function() {
        // Make an AJAX request to the Laravel route
        $.ajax({
            type: "POST",
            url: "/increment", // Update the URL to match your Laravel route
            success: function(result) {
                // Update the value displayed on the page
                $("#result").html("Value: " + result);
            }
        });
    });
});
