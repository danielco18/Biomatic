$('[data-toggle="tooltip"]').tooltip()

$('#menu-icon').click(function(){
    $('.menu-responsive-container').toggleClass('hidden')
});

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

$(".email").focus(function(){
   $(this).siblings("span").remove();
   $(".form-button").attr("disabled",false);
   // swal("Good job!", "You clicked the button!", "success")
})

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
