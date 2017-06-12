// $("#emailSignUp").focusout(function(){
//     $("#emailSignUp").siblings("small").remove();
//     var email = "prueba@gmail.com";
//     if (email.length > 0) {
//         $.post("index.php?c=user&a=validEmailSignUp",{email:email},function(response){            var response = JSON.parse(response);
//             $("#emailSignUp").after("<small id='emailHelp' class='form-text text-muted'>"+response[0]+"</small>")
//             if (response[1] == false) {
//                 $("#butonSignUp").attr("disabled",true);
//             } else {
//                 $("#butonSignUp").attr("disabled",false);
//             }
//         });
//     }
// })

// $(".email").focus(function(){
//    $(this).siblings("small").remove();
//    $(".form-button").attr("disabled",false);
// })

// $("#frmSignUp").submit(function(e){
//     e.preventDefault();
//     var data =  [
//                     $("#name").val(),
//                     $("#lastName").val(),
//                     $("#emailSignUp").val(),
//                     $("#passSignUp").val(),
//                     $("#passSignUpR").val()
//                 ];
//     $.post("index.php?c=user&a=create",{data:data},function(response){
//         var response = JSON.parse(response);
//         if (response[0] == true) {
//             alert("Datos ingresados correctamente");
//             document.location.href = response[1];
//         } else {
//             alert(response[1]);
//         }
//     })
// })

 $('[data-toggle="tooltip"]').tooltip()

 $('#menu-icon').click(function(){
    $('.menu-responsive-container').toggleClass('hidden')
 })

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
