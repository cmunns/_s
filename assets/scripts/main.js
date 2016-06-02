(function($){

    $('.gform_footer').on('click', 'a.x-btn', function(e){
        e.preventDefault();
        $(e.delegateTarget).find('[type="submit"]').trigger('click');
    });

    $('a[href^="#"]').on('click', function(e){
        e.preventDefault();
        var get_div = $(this).attr('href');
        $(get_div).velocity('scroll', {offset: -60});
    });


})(jQuery);