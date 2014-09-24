(function(){
  $.fn.bootstart_submit = function(){
    $(this).submit(function(){
      $(this).ajaxSubmit({
        context:$(this),
        dataType:'json',
        success:function(o){
          $(this).find('.has-error').removeClass('has-error');
          $(this).find('.help-block').remove();
         	var form = $(this);
          if('1' != o.state){
            $.each(o.info,function(k,v){
              var target = $(form).find("input[name='" + k + "']");
              target.parent().addClass('has-error');
              $('<span class="help-block" style="display:none;">' + v +'</span>').insertAfter(target);
            });
            $(form).find('.help-block').fadeIn(700);
          }
        }
      });
    return false;
    });
  }
})(jQuery);
