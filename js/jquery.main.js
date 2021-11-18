$(document).ready(function () {

});


jQuery(function(){			
    jQuery('nav').on("click", function(b) {
        console.log(b.target.nodeName);
        if(b.target.nodeName != 'A'){
            b.stopPropagation(), b.preventDefault();
        }
    })
    jQuery(".navToggle").each(function() {
        jQuery(this).on("click", function(b) {
            b.stopPropagation(), b.preventDefault(), 
            jQuery(".navToggleWrap").toggleClass("navToggleWrapActive") &&
            jQuery("nav").toggleClass("navActive")
        })
    }), jQuery(".navToggleWrap").click(function() {
        jQuery(".navToggleWrap").removeClass("navToggleWrapActive") &&
        jQuery("nav").removeClass("navActive")
    })
})


jQuery(function(){			
    $('.searchToggle').on('click', function(e) {
        $('.searchOverlay').toggleClass("searchOverlayActive");
        e.preventDefault();
    });
    $('.closeSearch').on('click', function(e) {
        $('.searchOverlay').toggleClass("searchOverlayActive");
        e.preventDefault();
    });
})
