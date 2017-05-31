// leave space for header and footer
$('body')[0].style.paddingTop = $('nav').outerHeight(false) + 'px';
$('body')[0].style.paddingBottom = $('footer').outerHeight(true) + 'px';

// add target attribute to links pointing to other sites
function linkTarget() {
    $(document.links).filter(function() {
        return this.hostname != window.location.hostname;
    }).attr('target', '_blank');
}
$(linkTarget);
