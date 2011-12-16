
jQuery(document).ready(function($) {
        function load(num) {
            $('#container').load(num +".html");
        }

        $.history.init(function(url) {
                load(url == "" ? "presentacion" : url);
            });

        $('#ajax-links a').live('click', function(e) {
                var url = $(this).attr('href');
                url = url.replace(/^.*#/, '');
                $.history.load(url);
                return false;
            });
    });
