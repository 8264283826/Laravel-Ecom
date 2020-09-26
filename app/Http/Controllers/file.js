<script src="https://malsup.github.com/jquery.form.js"></script>
<script type="text/javascript">
  jQuery("body").on("click","#submit",function(e)
  {
    jQuery(this).parents("form").ajaxForm
    ({
        complete: function(response) 
        {
    	      if($.isEmptyObject(response.responseJSON.error))
            {
                jQuery('.alert-danger').hide(); 
    		        jQuery("input[name='name']").val('');
                jQuery("input[name='price']").val('');
        
    		        alert('Image has been successfully uploaded');
        
    	      }
            else
            {
                jQuery('.alert-danger').html('');
    		        jQuery.each(response.responseJSON.error, function(key, value)
                {
                  jQuery('.alert-danger').show();
                  jQuery('.alert-danger').append('<p>'+value+'</p>');
                });
    	    }
        }
    });
  });
</script>