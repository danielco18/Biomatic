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

$('#emailSignUp').focusout(function(){
    $('#emailSignUp').siblings("small").remove()
    var data = $('#emailSignUp').val()
    if (data.length > 0) {
        $.post("index.php?c=user&a=validEmailSignUp",{data:data},function(response){
            var response = JSON.parse(response)
            $('#emailSignUp').after("<small>"+response[0]+"</small>")
            if (response[1] == false) {
                $('#butonSignUp').attr("disabled",true)
            } else {
                $('#butonSignUp').attr("disabled",false)
            }
        })
    }
})
