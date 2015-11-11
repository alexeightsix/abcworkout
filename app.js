 function slugify(text) { return text.toString().toLowerCase()
    .replace(/\s+/g, '-')           // Replace spaces with -
    .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
    .replace(/\-\-+/g, '-')         // Replace multiple - with single -
    .replace(/^-+/, '')             // Trim - from start of text
    .replace(/-+$/, '');            // Trim - from end of text
}

    $(document).ready(function() {

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