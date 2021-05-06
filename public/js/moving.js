$('.external-link').on('click',function(){

    event.preventDefault();

    var href = $(this).attr('href');

    window.location=base_url+ href;

  }) 