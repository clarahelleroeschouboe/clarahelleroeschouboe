function initialSetup() {
            if (document.getElementById("popupboks") != null) {
                setTimeout(function() {
                    document.getElementById('popupboks').style.display = 'block';
                }, 1000);
            }
        }

        initialSetup();


$(document).ready(function(){
  $(".popupCloseButton").click(function(){
    $("#popupboks").hide();
  });
});

$(document).ready(function(){
  $("#tilmeldknap").click(function(){
    $("#popupboks").hide();
  });
});