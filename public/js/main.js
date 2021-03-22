$(document).ready(main);

var contador = 1;

function main(){
    $('.menu_bar').click(function(){
        if(contador == 1){
            $('nav').animate({
                left: '0'
            });
            contador = 0;
        }else{
            contador = 1;
            $('nav').animate({
                left: '-100%'
            });
        }
    });

    $(".btn-update-item").on('click', function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        var href = $(this).data('href');
        var cantidad = $('#insumo_' + id).val();
        window.location.href = href + "/" + cantidad;
    });

    $(".verifySupplie").change(function(){
        var idsupplie = document.getElementById('vsupplie');
        var valuesupp = idsupplie.options[idsupplie.selectedIndex].value;

        if(valuesupp == 1){
            $('.verifyIndex').prop('disabled', false);
            $('.verificarProveedor').prop('disabled', false);
        }else{
            $('.verifyIndex').prop('disabled', true);
            $('.verificarProveedor').prop('disabled', true);
        }        
    });
};
