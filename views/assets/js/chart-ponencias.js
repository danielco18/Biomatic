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
