 function slugify(text) { return text.toString().toLowerCase()
    .replace(/\s+/g, '-')         
    .replace(/[^\w\-]+/g, '')      
    .replace(/\-\-+/g, '-')       
    .replace(/^-+/, '')            
    .replace(/-+$/, '');            
}

 $('.fb-share').click(function(e) {
        e.preventDefault();
        window.open($(this).attr('href'), 'fbShareWindow', 'height=600, width=600, top=' + ($(window).height() / 2 - 275) + ', left=' + ($(window).width() / 2 - 225) + ', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0');
        return false;
});


 $('.twitter').click(function(event) {
  event.preventDefault();
    var width  = 600,
        height = 600,
        left   = ($(window).width()  - width)  / 2,
        top    = ($(window).height() - height) / 2,
        url    = this.href,
        opts   = 'status=1' +
                 ',width='  + width  +
                 ',height=' + height +
                 ',top='    + top    +
                 ',left='   + left;
    
    window.open(url, 'twitter', opts);
 
    return false;
  });

    $(document).ready(function() {

      $('form').find("input[type='text']").focus();

      var inner = $.find('.inner');

      if (inner) {
        $('.button-share.fb-share').trigger("click");
      }

      var form = $('form').find('input[type="submit"]');

      form.on("click", function(e) {
        e.preventDefault();
        var name = form.parent().find("input[type='text']");
        if (!name.val()) {
          name.focus();
        } else {
          form.parent().attr("action", "/index.php?name="+slugify(name.val()))
          form.parent().submit();
        }
      });

    });