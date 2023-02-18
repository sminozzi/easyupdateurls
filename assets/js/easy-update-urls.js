jQuery(document).ready(function(jQuery){
   // easy-update-urls-run-update



    jQuery('*').click(function(event) {
        var clsname = event.target.className;
        var idname = event.target.id;
        if(idname === 'easy-update-urls-run-update')
        {
            event.stopPropagation();
            event.preventDefault();
            console.log('id '+idname);
            jQuery('#easy-update-urls-spinner').show(); 
            jQuery('#easy-update-urls-help-run').hide(); 
            jQuery('#easy-update-urls-spinner').css("display", "block");
            jQuery('#easy-update-urls-run-update').prop( "disabled", true );



            setTimeout(function() {
                document.getElementById("easy-update-urls-form-run").submit();
            }, 5000);

        }
    });
   /* jQuery('#easy-update-urls-spinner-help2').hide(); */
    jQuery( document ).ajaxStart(function() {
      jQuery( "#easy-update-urls-spinner-help2" ).show();
    });
    jQuery( document ).ajaxComplete(function( event,request, settings ) {
        jQuery( "#easy-update-urls-spinner-help2" ).hide();
    });
}); // end jQuery ready  
