$(document).ready(function(){
  $("#form").on('submit', function(e){
      e.preventDefault();
      var buttonEmail = document.querySelector("#button")
      var buttonWhatsApp = document.querySelector("#whatsapp")
      var spanWarning = document.querySelector('#warning')
      var nome = document.querySelector('#nome')
      var telefone = document.querySelector('#telefone')
      var email = document.querySelector('#email')
      var formData = $(this).serialize();
      $.ajax({
        type: "POST",
        url: "sendmail.php", /* endereço do script PHP */
        async: true,
        data: formData, /* informa Url */
        success: function(data) { /* sucesso */
            buttonEmail.classList.add('remove')
            buttonWhatsApp.classList.add('apper')
            spanWarning.style.color = 'red'
            nome.value = ''
            telefone.value = ''
            email.value = ''
        }        
    });
})
});