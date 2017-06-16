    var dataSemillero = {
        labels: ["2012", "2013", "2014", "2015", "2016", "2017", "2018"],
        datasets: [{
            label: 'Producción de calzado',
            backgroundColor: '#e53935 ',
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
            backgroundColor: '#d81b60',
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
            backgroundColor: '#8e24aa',
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
            backgroundColor: '#3949ab',
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
            label: 'Formulación de proyectos',
            backgroundColor: '#00897b',
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
            backgroundColor: '#43a047',
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
            backgroundColor: '#cddc39',
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
            backgroundColor: '#ffb300',
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
            backgroundColor: '#f4511e',
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
            backgroundColor: '#00acc1',
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
        labels: ["Semillero BIOMATIC", "Producción de Calzado"],
        datasets: [{
            label: 'Tipo de Ponencia',
            backgroundColor: 'steelblue',
            data: [
                34,
                13
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
                text:"Aprendices vincualados al semillero por Año"
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