jQuery(function($){

    //Image to svg
    jQuery('img.svg').each(function(){
        var $img = jQuery(this);
        var imgID = $img.attr('id');
        var imgClass = $img.attr('class');
        var imgURL = $img.attr('src');

        jQuery.get(imgURL, function(data) {
            // Get the SVG tag, ignore the rest
            var $svg = jQuery(data).find('svg');

            // Add replaced image's ID to the new SVG
            if(typeof imgID !== 'undefined') {
                $svg = $svg.attr('id', imgID);
            }
            // Add replaced image's classes to the new SVG
            if(typeof imgClass !== 'undefined') {
                $svg = $svg.attr('class', imgClass+' replaced-svg');
            }

            // Remove any invalid XML tags as per http://validator.w3.org
            $svg = $svg.removeAttr('xmlns:a');

            // Replace image with new SVG
            $img.replaceWith($svg);

        }, 'xml');
    });

    jQuery('body').on('mouseover', 'nav > ul > li', function(){
        $(this).attr('style', 'border-left : solid 5px transparent; border-image : linear-gradient(37.23deg, #FD9C9C 25.57%, #F681A9 56.39%) 0 0 0 100%; padding-left:35px;');
        $(this).find('.svg').attr('style', 'fill: #F681A9;');
        $(this).find('.svg .st0').attr('style', 'fill: #F681A9;');
    });

    jQuery('body').on('mouseout', 'nav > ul > li', function(){
        $(this).attr('style', 'background-color:#3F4867');
        $(this).find('.svg').attr('style', 'fill: #FFFFFF;');
        $(this).find('.svg .st0').attr('style', 'fill: #FFFFFF;');
    });

    jQuery('body').on('click', '.chevronProfile', function(){
        if($(this).parent().next().css('display') == "none"){
            $(this).parent().find('.openProfile').hide();
            $(this).parent().find('.closeProfile').show();
            $('#profileSettings').slideDown();
        }
        else{
            $(this).parent().find('.closeProfile').hide();
            $(this).parent().find('.openProfile').show();
            $('#profileSettings').hide();
        }
    });

    var burgerMenuActive = false;
    jQuery('body').on('click', '#burgerMenu', function(){
        if($('#mainNavigation').css('display') == "none"){
            $('#mainNavigation').show();
            burgerMenuActive = true;
        }
        else{
            $('#mainNavigation').hide();
            burgerMenuActive = false;
        }
    });

    // Fonction exécutée au redimensionnement
    function redimensionnement() {
        if("matchMedia" in window) {
            if(window.matchMedia("(max-width: 576px)").matches) {
                if(!burgerMenuActive){
                   $('#mainNavigation').hide();
                }
            }

            if(window.matchMedia("(min-width: 576px)").matches) {
                $('#mainNavigation').show();
                if(burgerMenuActive){
                    burgerMenuActive = false;
                    $('#burgerMenu').click();
                }
            }
        }
    }
    // On lie l'événement resize à la fonction
    window.addEventListener('resize', redimensionnement, false);

});



