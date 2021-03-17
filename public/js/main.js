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

    $(".verifyNombre").change(function(){
        var idsupplie = document.getElementById('vnombre');
        var valuesupp = idsupplie.options[idsupplie.selectedIndex].value;

        if(valuesupp == 1){
            document.getElementById('vsupplie').addEventListener('click', function(e){
                idsupplie.disable = false;
            });
        }else{
            document.getElementById('vsupplie').addEventListener('click', function(e){
                idsupplie.disable = true;
            });
        }
    });

    $(".verifySupplie").change(function(){
        var idsupplie = document.getElementById('vsupplie');
        var valuesupp = idsupplie.options[idsupplie.selectedIndex].value;

        if(valuesupp == 1){
            $('.verifyIndex').prop('disabled', false);
        }else{
            $('.verifyIndex').prop('disabled', true);
        }
        console.log(valuesupp);
    });
};
