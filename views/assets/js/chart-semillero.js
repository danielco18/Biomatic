    var dataSemillero = {
        labels: ["2012", "2013", "2014", "2015", "2016", "2017", "2018"],
        datasets: [{
            label: 'Producción de calzado',
            backgroundColor: '#0d47a1',
            data: [
                6,
                5,
                3,
                7,
                10,
                3,
                1
            ]
        }, {
            label: 'Diseño de calzado',
            backgroundColor: '#1565c0',
            data: [
                6,
                5,
                3,
                7,
                10,
                3,
                1
            ]
        }, {
            label: 'Sistemas integrados',
            backgroundColor: '#1976d2',
            data: [
                6,
                5,
                3,
                7,
                10,
                3,
                1
            ]
        }, {
            label: 'ADSI',
            backgroundColor: '#1e88e5',
            data: [
                6,
                5,
                3,
                7,
                10,
                3,
                1
            ]
        }, {
            label: 'Contabilidad',
            backgroundColor: '#2196f3',
            data: [
                6,
                5,
                3,
                7,
                10,
                3,
                1
            ]
        }, {
            label: 'Formulación de proyectos',
            backgroundColor: '#42a5f5',
            data: [
                6,
                5,
                3,
                7,
                10,
                3,
                1
            ]
        }, {
            label: 'Recursos Humanos',
            backgroundColor: '#64b5f6',
            data: [
                6,
                5,
                3,
                7,
                10,
                3,
                1
            ]
        }, {
            label: 'Logística',
            backgroundColor: '#90caf9',
            data: [
                6,
                5,
                3,
                7,
                10,
                3,
                1
            ]
        }, {
            label: 'Salud Ocupacional',
            backgroundColor: '#bbdefb',
            data: [
                6,
                5,
                3,
                7,
                10,
                3,
                1
            ]
        }, {
            label: 'Diseño de productos',
            backgroundColor: '#e3f2fd',
            data: [
                6,
                5,
                3,
                7,
                10,
                3,
                1
            ]
        }, {
            label: 'Otro',
            backgroundColor: '#eeeeee',
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
    var dataVinculados = {
        labels: ["Ténico", "Tecnólogo", "Especialización tecnológica"],
        datasets: [{
            label: 'Aprendices del semillero',
            backgroundColor: '#248275',
            data: [
                13,
                25,
                8
            ]
        }]

    };

    var semillero = document.getElementById("semillero").getContext("2d");
    window.myBar = new Chart(semillero, {
        type: 'bar',
        data: dataSemillero,
        options: {
            title:{
                display:true,
                text:"Aprendices vinculados dependiendo del nivel de formación"
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
    var vinculados = document.getElementById("vinculados").getContext("2d");
    window.myBar = new Chart(vinculados, {
        type: 'bar',
        data: dataVinculados,
        options: {
            title:{
                display:true,
                text:"Aprendices vinculados al semillero de Investigación"
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
