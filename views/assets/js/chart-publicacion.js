    var dataVinculados = {
        labels: ["2012", "2013", "2014", "2015", "2016", "2017", "2018", "Total"],
        datasets: [{
            label: 'Artículos',
            backgroundColor: 'yellow',
            data: [
                13,
                25,
                8,
                5,
                10,
                3,
                4,
                1
            ]
        }, {
            label: 'Libros',
            backgroundColor: 'tomato',
            data: [
                13,
                25,
                8,
                5,
                10,
                3,
                4,
                1
            ]
        }, {
            label: 'Capítulos',
            backgroundColor: 'steelblue',
            data: [
                13,
                25,
                8,
                5,
                10,
                3,
                4,
                1
            ]
        }, {
            label: 'Tesis',
            backgroundColor: 'green',
            data: [
                13,
                25,
                8,
                5,
                10,
                3,
                4,
                1
            ]
        }, {
            label: 'Otros',
            backgroundColor: 'purple',
            data: [
                13,
                25,
                8,
                5,
                10,
                3,
                4,
                1
            ]
        }]

    };
    var vinculados = document.getElementById("publicacion").getContext("2d");
    window.myBar = new Chart(vinculados, {
        type: 'bar',
        data: dataVinculados,
        options: {
            title:{
                display:true,
                text:"Tipos de publicaciones por año"
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
