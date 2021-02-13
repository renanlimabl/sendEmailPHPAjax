$(document).ready(function(){
  $("#form").on('submit', function(e){
      e.preventDefault();
      var formData = $(this).serialize();
      $.ajax({
        type: "POST",
        url: "sendmail.php", /* endereço do script PHP */
        async: true,
        data: formData, /* informa Url */
        success: function(data) { /* sucesso */
            alert(data)
        }        
    });
})
});