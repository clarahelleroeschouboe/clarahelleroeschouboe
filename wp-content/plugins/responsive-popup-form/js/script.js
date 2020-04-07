$(document).ready(function() {

    $('#closepopupbutton').click(function(){

        $('#popupboks').hide();

    });

});
        function initialSetup() {
            if (document.getElementById("popupboks") != null) {
                setTimeout(function() {
                    document.getElementById('popupboks').style.display = 'block';
                }, 1000);
            }
        }


$(document).ready(function() {

    $('#tilmeldknap').click(function(){

        $('#popupboks').hide();

    });

});

