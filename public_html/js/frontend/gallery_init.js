$(document).ready(function() {
	$('#myRoundabout').roundabout({
		 shape: 'figure8',
		 minOpacity: 1,
		 autoplay: true,
		 autoplayDuration: 2400,
	     autoplayPauseOnHover: true
		 
	});
	
    /*
     * Scroll To Code
     */
    
    $('.scrollTo').bind('click', function(event){
        event.preventDefault();
        
        var targetId = this.hash;
        var customOffset = 0;
        switch( targetId ){
            case '#dropbox':
            case '#principles':
                customOffset = -80;
            break;
            default:
                customOffset = -20;
        }


            $(window).scrollTo( targetId, {
                duration: 1000,
                offset: customOffset
            });

    });	
});