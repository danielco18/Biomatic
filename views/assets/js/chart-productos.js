    var dataVinculados = {
        labels: ["2012", "2013", "2014", "2015", "2016", "2017", "2018", "Total"],
        datasets: [{
            label: 'SENA',
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
            label: 'Confinanciados x Empresas',
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
            label: 'Confinanciación de otras entidades',
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
        }]

    };
    var vinculados = document.getElementById("productos").getContext("2d");
    window.myBar = new Chart(vinculados, {
        type: 'bar',
        data: dataVinculados,
        options: {
            title:{
                display:true,
                text:"Proyectos por Año"
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
