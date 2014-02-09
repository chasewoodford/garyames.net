
	jQuery(document).ready(function($) {

        $('body').addClass('js');

        var $menu = $('#menu'),
            $menulink = $('.menu-link'),
            $wrap = $('#wrap');

        $menulink.click(function() {
            $menulink.toggleClass('active');
            $wrap.toggleClass('active');
            return false;
        });

        var path = window.location.href; // Just grabbing a handy reference to it
        $('ul.ca-menu li a').each(function() {
            if (this.href === path) {
                $(this).parent('li').addClass('active');
            }
        });

	});

