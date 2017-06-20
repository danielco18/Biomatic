// se utilizan librerias y/o frameworks como Jquery, sweetaler, chartjs, boostrap, tether y DataTable
// mostrar un tooltip
$('[data-toggle="tooltip"]').tooltip()
// ocultar y mostrar menu en responsive
$('#menu-icon').click(function(){
    $('.menu-responsive-container').toggleClass('hidden')
});
// metodo para modificar la tabla de la libreria DataTable
$.extend( true, $.fn.dataTable.defaults, {
    "ordering": true,
    "lengthChange": false,
    "info": false
});


$('#dataTable').DataTable({
    "language": {
        "responsive" : true,
        "search" : "Buscar",
        "zeroRecords": "No se encontró ningún resultado",
        "paginate" : {
            "first" : "<i class='material-icons'>first_page</i>",
            "last" : "<i class='material-icons'>last_page</i>",
            "next" : "<i class='material-icons'>chevron_right</i>",
            "previous" : "<i class='material-icons'>chevron_left</i>"
        }
    }
});
// Acá se temina la edicion
// metodo para borrar los mensajes de error generados cuando se le de clic en los input con la clase email
$(".email").focus(function(){
   $(".email").siblings("small").remove();
   $(".form-button").attr("disabled",false);
})
// metodo para generar mensajes si el correo ya existe en la aplicación
$('#emailSignUp').focusout(function(){
    $('#emailSignUp').siblings("small").remove();
    var data = $('#emailSignUp').val();
    if (data.length > 0) {
        $.post("index.php?c=user&a=validEmailSignUp",{data:data},function(response){
            var response = JSON.parse(response);
            $('#emailSignUp').after("<small id='emailHelp' class='form-text text-muted'>"+response[0]+"</small>");
            if (response[1] == false) {
                $('#butonSignUp').attr("disabled",true);
            } else {
                $('#butonSignUp').attr("disabled",false);
            }
        });
    }
})
// Enviar los datos al controlador de usuario para que se registre
$("#signUp").submit(function(e){
    e.preventDefault();
    var data =  [
                    $("#name").val(),
                    $("#lastName").val(),
                    $("#emailSignUp").val(),
                    $("#passSignUp").val(),
                    $("#passSignUpR").val()
                ];
    $.post("index.php?c=user&a=create",{data:data},function(response){
        var response = JSON.parse(response);
        if (response[0] == true) {
            swal(response[1],"", "success");
            $(".confirm").click(function(){
                document.location.href = response[2];
            })
        } else {
            swal(response[1],"", "error");
        }
    })
})
// metodo para generar mensajes si el correo no existe en la aplicación
$('#emailSignIn').focusout(function(){
    $('#emailSignIn').siblings("small").remove();
    var data = $('#emailSignIn').val();
    if (data.length > 0) {
        $.post("index.php?c=user&a=validEmail",{data:data},function(response){
            var response = JSON.parse(response);
            $('#emailSignIn').after("<small id='emailHelp' class='form-text text-muted'>"+response[0]+"</small>");
            if (response[1] == false) {
                $('#butonSignIn').attr("disabled",true);
            } else {
                $('#butonSignIn').attr("disabled",false);
            }
        });
    }
})
// para que se loguea en la aplicacion
$("#signIn").submit(function(e){
    e.preventDefault();
    $('#passSignIn').siblings("small").remove();
    var data = [ $("#emailSignIn").val(), $("#passSignIn").val() ]
    $.post("index.php?c=user&a=validSignIn",{data:data},function(response){
        var response = JSON.parse(response);
        if (response[0] == true) {
            document.location.href = response[1];
        } else {
            $('#passSignIn').after("<small id='passHelp' class='form-text text-muted'>"+response[1]+"</small>");
        }
    })
})
