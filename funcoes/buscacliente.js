$(document).ready(function(){

    $('#campo').keyup(function(){

        $('form').submit(function(){
            var dados = $(this).serialize();

            $.ajax({
                url: '../actions/processaBuscaCliente.php',
                method: 'post',
                dataType: 'html',
                data: dados,
                success: function(data){
                    $('#resultado').empty().html(data);
                }
            });

            return false;
        });

        $('form').trigger('submit');

    });
});


$(function() {
   $( "#pesquisa_cliente" ).autocomplete({
     source: '../funcoes/functions.php',
   });
});
