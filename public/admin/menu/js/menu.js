function notifymenu(from, align, icon, type, animIn, animOut){
      $.growl({
          icon: icon,
          title: ' <strong>Task Done!</strong> ',
          message: "Order Updated Successfully",
          url: ''
      },{
          element: 'body',
          type: type,
          allow_dismiss: true,
          placement: {
              from: from,
              align: align
          },
          offset: {
              x: 30,
              y: 30
          },
          spacing: 10,
          z_index: 999999,
          delay: 2500,
          timer: 1000,
          url_target: '_blank',
          mouse_over: false,
          animate: {
              enter: animIn,
              exit: animOut
          },
          icon_type: 'class',
          template: '<div data-growl="container" class="alert" role="alert">' +
          '<button type="button" class="close" data-growl="dismiss">' +
          '<span aria-hidden="true">&times;</span>' +
          '<span class="sr-only">Close</span>' +
          '</button>' +
          '<span data-growl="icon"></span>' +
          '<span data-growl="title"></span>' +
          '<span data-growl="message"></span>' +
          '<a href="#" data-growl="url"></a>' +
          '</div>'
      });
  };
$(function() {
  $('.dd').nestable({ 
    dropCallback: function(details) {
        console.log(details);
       var order = new Array();
       $("li[data-id='"+details.destId +"']").find('ol:first').children().each(function(index,elem) {
         order[index] = $(elem).attr('data-id');
       });

       if (order.length === 0){
        var rootOrder = new Array();
        $("#nestable > ol > li").each(function(index,elem) {
          rootOrder[index] = $(elem).attr('data-id');
        });
       }

       $.post(base_url + '/admin/menus/post_index', 
        { '_token': $('input[name=_token]').val(),
          source : details.sourceId, 
          destination: details.destId, 
          order:JSON.stringify(order),
          rootOrder:JSON.stringify(rootOrder) 
        }, 
        function(data) {
          console.log('data '+data); 
        })
       .done(function() { 
        var nFrom = 'top';
        var nAlign = 'right';
        var nIcons = $(this).attr('data-icon');
        var nType = 'success';
        var nAnimIn = 'animated flipInY';
        var nAnimOut = 'animated flipOutY';

        notifymenu(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut);
          //$( "#success-indicator" ).fadeIn(100).delay(1000).fadeOut();
       })
       .fail(function() {  })
       .always(function() {  });
     }
   });

  $('.delete_toggle').each(function(index,elem) {
      $(elem).click(function(e){
        e.preventDefault();
        $('#postvalue').attr('value',$(elem).attr('rel'));
        $('#deleteModal').modal('toggle');
      });
  });
});
