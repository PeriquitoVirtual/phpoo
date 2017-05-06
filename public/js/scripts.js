
$(function () {
    $('[data-toggle="popover"]').popover();
});



$(document).ready(function(){
    $('#nome').keyup(function(){
        var query = $(this).val();
        if(query != '')
        {
            $.ajax({
                url:"listaCliente.php",
                method:"POST",
                data:{query:query},
                success:function(data)
                {
                    $('#listaNomes').fadeIn();
                    $('#listaNomes').html(data);
                }
            });
        }
    });
    $(document).on('click', 'li', function(){
        $('#nome').val($(this).text());
        $('#listaNomes').fadeOut();
    });
});



$(document).ready(function(){
    $('#item').keyup(function(){
        var query2 = $(this).val();
        if(query2 != '')
        {
            $.ajax({
                url:"listaProduto.php",
                method:"POST",
                data:{query2:query2},
                success:function(data)
                {
                    $('#listaItens').fadeIn();
                    $('#listaItens').html(data);
                }
            });
        }
    });
    $(document).on('click', 'p', function(){
        $('#item').val($(this).text());
        $('#listaItens').fadeOut();
    });
});

