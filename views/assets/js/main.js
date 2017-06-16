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

    // Participación de ponencias en los eventos
    var dataParticipacion = {
        labels: ["2012", "2013", "2014", "2015", "2016", "2017", "2018"],
        datasets: [{
            label: 'Nacionales',
            backgroundColor: 'tomato',
            data: [
                5,
                10,
                2,
                8,
                3,
                8,
                6
            ]
        }, {
            label: 'Internacionales',
            backgroundColor: 'steelblue',
            data: [
                6,
                5,
                3,
                7,
                10,
                3,
                1
            ]
        }]

    };
    // Tipo ponencia
    var dataTipoPonencia = {
        labels: ["Ponencia Oral", "Ponencia Póster"],
        datasets: [{
            label: 'Tipo de Ponencia',
            backgroundColor: 'steelblue',
            data: [
                12,
                6
            ]
        }]

    };

    var dataOtra = {
        labels: ["Ponencia Oral", "Ponencia Póster"],
        datasets: [{
            label: 'Tipo de Ponencia',
            backgroundColor: 'steelblue',
            data: [
                12,
                6
            ]
        }]

    };

    var participacion = document.getElementById("participacion").getContext("2d");
    window.myBar = new Chart(participacion, {
        type: 'bar',
        data: dataParticipacion,
        options: {
            title:{
                display:true,
                text:"Participación en eventos"
            },
            tooltips: {
                mode: 'index',
                intersect: false
            },
            responsive: true,
            scales: {
                xAxes: [{
                    stacked: true,
                }],
                yAxes: [{
                    stacked: true
                }]
            }
        }
    });
    var tipoPonencia = document.getElementById("tipoPonencia").getContext("2d");
    window.myBar = new Chart(tipoPonencia, {
        type: 'bar',
        data: dataTipoPonencia,
        options: {
            title:{
                display:true,
                text:"Ponencias del grupo de investigación en congresos nacionales e internacionales"
            },
            tooltips: {
                mode: 'index',
                intersect: false
            },
            responsive: true,
            scales: {
                xAxes: [{
                    stacked: true,
                }],
                yAxes: [{
                    stacked: true
                }]
            }
        }
    });
    var otra = document.getElementById("otra").getContext("2d");
    window.myBar = new Chart(otra, {
        type: 'bar',
        data: dataOtra,
        options: {
            title:{
                display:true,
                text:"Ponencias del grupo de investigación en congresos nacionales e internacionales"
            },
            tooltips: {
                mode: 'index',
                intersect: false
            },
            responsive: true,
            scales: {
                xAxes: [{
                    stacked: true,
                }],
                yAxes: [{
                    stacked: true
                }]
            }
        }
    });

$(".email").focus(function(){
   $(".email").siblings("small").remove();
   $(".form-button").attr("disabled",false);
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
