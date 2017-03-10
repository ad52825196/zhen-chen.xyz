// add target attribute to links pointing to other sites
$(document.links).filter(function() {
    return this.hostname != window.location.hostname;
}).attr('target', '_blank');

// leave space for footer
$('body')[0].style.paddingBottom = $('footer').outerHeight(true) + 'px';

// fade in index-item
$(document).ready(function() {
    $('#body .index-item').each(function(index) {
        $(this).delay(index * 500).fadeIn(500);
    });
});
