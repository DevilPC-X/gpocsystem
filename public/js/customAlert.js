function deleteSupplies(btn){
    desactivate(btn);
    swal(
        {
            title: "Seguro que desea eliminar el registro?",
            icon: "warning",
            buttons: {
                cancel: "Cancelar",
                catch: {
                    text: "Aceptar",
                    value: "catch",
                },
            },
        }
    )
    .then((value)=>{
        switch(value){
            case "catch":
                let id = btn.id;
                $("#formSupplies"+id).submit();
                break;
            case "cancel":
                break;
        }
    });
}

function desactivate(btn){
    let id = btn.id;    
    $('#formSupplies'+id+' button[type=submit]').click(function(){
        return false;
    });
}

function inputText(){
    swal({
        title: "An input!",
        text: "Write something interesting:",
        type: "input",
        showCancelButton: true,
        closeOnConfirm: false,
        animation: "slide-from-top",
        inputPlaceholder: "Write something"
      },
      function(inputValue){
        if (inputValue === false) return false;
      
        if (inputValue === "") {
          swal.showInputError("You need to write something!");
          return false
        }
      
        swal("Nice!", "You wrote: " + inputValue, "success");
      });
}

function deleteSuppliers(btn){
    desactivateSuppliers(btn);
    swal(
        {
            title: "Seguro que desea eliminar el registro?",
            icon: "warning",
            buttons: {
                cancel: "Cancelar",
                catch: {
                    text: "Aceptar",
                    value: "catch",
                },
            },
        }
    )
    .then((value)=>{
        switch(value){
            case "catch":
                let id = btn.id;
                $("#formSuppliers"+id).submit();
                break;
            case "cancel":
                break;
        }
    });
}

function desactivateSuppliers(btn){
    let id = btn.id;    
    $('#formSuppliers'+id+' button[type=submit]').click(function(){
        return false;
    });
}

function deleteProjects(btn){
    desactivateProjects(btn);
    swal(
        {
            title: "Seguro que desea eliminar el registro?",
            icon: "warning",
            buttons: {
                cancel: "Cancelar",
                catch: {
                    text: "Aceptar",
                    value: "catch",
                },
            },
        }
    )
    .then((value)=>{
        switch(value){
            case "catch":
                let id = btn.id;
                $("#formProjects"+id).submit();
                break;
            case "cancel":
                break;
        }
    });
}

function desactivateProjects(btn){
    let id = btn.id;    
    $('#formProjects'+id+' button[type=submit]').click(function(){
        return false;
    });
}

function deleteCategories(btn){
    desactivateCategories(btn);
    swal(
        {
            title: "Seguro que desea eliminar el registro?",
            icon: "warning",
            buttons: {
                cancel: "Cancelar",
                catch: {
                    text: "Aceptar",
                    value: "catch",
                },
            },
        }
    )
    .then((value)=>{
        switch(value){
            case "catch":
                let id = btn.id;
                $("#formCategories"+id).submit();
                break;
            case "cancel":
                break;
        }
    });
}

function desactivateCategories(btn){
    let id = btn.id;    
    $('#formCategories'+id+' button[type=submit]').click(function(){
        return false;
    });
}

function deleteUsers(btn){
    desactivateUsers(btn);
    swal(
        {
            title: "Seguro que desea eliminar el registro?",
            icon: "warning",
            buttons: {
                cancel: "Cancelar",
                catch: {
                    text: "Aceptar",
                    value: "catch",
                },
            },
        }
    )
    .then((value)=>{
        switch(value){
            case "catch":
                let id = btn.id;
                $("#formUsers"+id).submit();
                break;
            case "cancel":
                break;
        }
    });
}

function desactivateUsers(btn){
    let id = btn.id;    
    $('#formUsers'+id+' button[type=submit]').click(function(){
        return false;
    });
}


function validarPassword(){
    var valor1 = document.getElementById('password').value;
    var valor2 = document.getElementById('password_confirm').value;

    if (valor1 != valor2) {
        alert("La contraseñas no coinciden");
        return false;
    }else{
        $('#formUsers').submit();
        return true;
    }
};
