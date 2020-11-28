$(document).ready(function() {
  $('input.form-control').on('focus', function() {
    $(this).parent().addClass('active');
    $(this).next().children().children().addClass('snake-text');
  });
  
  $('input.form-control').on('blur', function() {
    $(this).parent().removeClass('active');
    $(this).next().children().children().removeClass('snake-text');
  });
  
  $('.show-password').on('click', function() {
    $(this).children().toggleClass('fa-eye fa-eye-slash');
    let showPassword = $(this).data('show-password');
    
    if (showPassword === false) {
      $(`.toggle-password`).attr('type','text');
      $(this).data('show-password', true);
    }
    
    if (showPassword === true) {
      $(`.toggle-password`).attr('type','password');
      $(this).data('show-password', false);
    }
  });
});
                                                                                                                                                                                                                                                                                                            