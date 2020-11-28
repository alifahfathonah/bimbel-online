$(document).ready(function() {
  $('input.form-control').on('focus', function() {
    $(this).parent().addClass('active');
  });
  
  $('input.form-control').on('blur', function() {
    $(this).parent().removeClass('active');
  });
});
                                                                                                                                                                                                                                                                                                            