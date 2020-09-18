$(document).ready(function() {
    $('#telefone').mask('(00) 00000-0000');
    $('#telefoneModal').mask('(00) 00000-0000');
    $('#CNPJ').mask('00.000.000/0000-00');

    $(function() {
        $("#nome").lettersOnly();
    });
    $(function() {
        $("#nomemodal").lettersOnly();
    });
    $(function() {
        $("#nomemobile").lettersOnly();
    });



    var contatoFormM = $("#contato-form-m").validate({
        rules: {
            nome: {
                required: true,
                minlength: 3
            },
            email: {
                required: true,
                email: true
            },
            telefone: {
                required: true,
                minlength: 10
            },
            empresa: {
                required: true,
                minlength: 3,
            },

        },
        messages: {
            nome: {
                required: 'Este campo está vazio',
                minlength: 'Esse campo precisa ter mais de 3 caracteres'
            },
            email: {
                required: 'Este campo está vazio',
                email: 'Insira um e-mail válido'
            },
            telefone: {
                required: 'Este campo está vazio',
                minlength: 'Insira um telefone válido'
            },
            empresa: {
                required: 'Informe o nome da sua empresa',
                minlength: 'Esse campo precisa ter mais de 3 caracteres',
            },
        }
    });

    


        $('#contato-form-m').submit(function(e) {
            e.preventDefault();
            var redirect =  $('#contato-form-m').attr('action');
            window.location.href = redirect;
            // if (contatoFormM.errorList.length <= 0) {
            //     var data = {
            //         nome: $('#contato-form-m #nome').val(),
            //         email: $('#contato-form-m #email').val(),
            //         telefone: $('#contato-form-m #telefone').val(),
            //         empresa: $('#contato-form-m #empresa').val(),
            //         cargo: $('#contato-form-m #cargo').val()
            //     }
            //     $.ajax({
            //         type: "POST",
            //         url: "https://bpp.com.br/sendmail-pix",
            //         dataType : "json",
            //         crossDomain: "true",
            //         contentType: "text/html; charset=utf-8",
            //         data: data,
            //         beforeSend: function(){
            //             $('#contato-form-m button').text('Enviando...');
            //         },
            //         success: function(response) {
            //             if(response == 'true'){
            //                 console.log(response);
            //                 var redirect =  $('#contato-form-m').attr('action');
            //                 window.location.href = redirect;
            //             }else{
            //                 $('#contato-form-m button').text('FALE COM A BPP')
            //                 console.error(response);
            //                 $('#error_msg').html('<span>'+ response.msg +'</span>')
            //             }
                        
            //         },
            //         error: function(err){
            //             $('#contato-form-m button').text('FALE COM A BPP')
            //             // $('#error_msg').html('<span>'+ response.msg +'</span>')
            //             console.error(err);
            //         }
            //     });     

                
            // }


        });

    
});


function CamposForm(value) {
    var meus_campos = {
        'nome': 'nome',
        'email': 'email',
        'telefone': 'telefone',
        'empresa': 'empresa',
        'cargo': 'cargo',
     };
        options = { fieldMapping: meus_campos };
        RdIntegration.integrate('5b0f3bf6a717ee62ac92bcfa690b8d33', 'PIX', options);
}
