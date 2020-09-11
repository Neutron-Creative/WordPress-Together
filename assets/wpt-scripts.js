(function($) {
    var started = true;
    $("li#wp-admin-bar-start-collab .ab-item").on( "click", function() {
        if(started) {
            jQuery("li#wp-admin-bar-start-collab .ab-item").text('End collaboration');
        } else {
            jQuery("li#wp-admin-bar-start-collab .ab-item").text('Begin collaboration');
        }

        TogetherJS(this);
        started = !started;
        return false;

    });
})(jQuery);