
$('.letter').on('input', function() {
   $(this).val($(this).val().replace(/[0-9-A-z/.,?<>:|+-_()#@!$%^&*`~ЁёэЭЫыъЪ₴№№'";{}]/, ''))
});
