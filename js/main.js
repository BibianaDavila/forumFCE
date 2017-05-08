function panelSize(){
	/*=== calcula tamanho do folder ===*/
	var windowHeight = $(window).outerHeight(),
		footerHeight = $('.menu').outerHeight(),
		folderWidth = $('.folder-container').width();

	/* altura */
	var folderHeight = windowHeight-footerHeight-50; /*50 ->  margin*/ 
	$('.folder-panel').css('height', folderHeight + 'px');

	/* largura */
	folderWidth = folderWidth-50; /*50 ->  margin*/ 
	$('.folder-panel').css('width', folderWidth + 'px');
}
$(document).ready(function(){
	panelSize();	

	 $('a[href*="#"]:not([href="#"])').click(function(){
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');

            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 500);
                return false;
            }
        }
    });
});

$(window).resize(function() {
	panelSize();
});