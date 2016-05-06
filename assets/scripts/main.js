(function($){

    $('.gform_footer').on('click', 'a.x-btn', function(e){
        e.preventDefault();
        $(e.delegateTarget).find('[type="submit"]').trigger('click');
    });

})(jQuery);