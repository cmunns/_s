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

    // open mobile nav.
    var slideout = new Slideout({
      'panel': document.getElementById('page'),
      'menu': document.getElementById('mobile-nav'),
      'padding': 256,
      'tolerance': 70
    });

    slideout.on('open', function() {
      document.querySelector('.slideout-panel').classList.add('opened');
    });

    slideout.on('beforeclose', function() {
      document.querySelector('.slideout-panel').classList.remove('opened');
    });

    // Toggle button
    $('.mobile-nav-toggle').on('click', function() {
        slideout.toggle();
        $(this).toggleClass('open');
    });

})(jQuery);