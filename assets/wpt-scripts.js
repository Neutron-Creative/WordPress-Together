(function($) {
    var started = true;
    $("li#wp-admin-bar-start-collab .ab-item").on( "click", function() {
        if(started) {
            $("li#wp-admin-bar-start-collab .ab-item").text('End collaboration');
        } else {
            $("li#wp-admin-bar-start-collab .ab-item").text('Begin collaboration');
        }

        TogetherJS(this);
        started = !started;
        return false;

    });
})(jQuery);