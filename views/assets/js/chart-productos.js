    $.ajax({
    type: "POST",
    url: "index.php?c=productos&a=data",
    success: function(data){
        var data = JSON.parse(data);
        var dataProductos = {
            labels: ["2016", "2017", "2018", "Total"],
            datasets: [{
                label: 'Nueva variedad',
                backgroundColor: '#004d40',
                data: [
                    data[0]["2016"][0],
                    data[1]["2017"][0],
                    data[2]["2018"][0],
                    data[3]["Total"][0]
                ]
            }, {
                label: 'Producto tecnológico',
                backgroundColor: '#00695c',
                data: [
                    data[0]["2016"][1],
                    data[1]["2017"][1],
                    data[2]["2018"][1],
                    data[3]["Total"][1]
                ]
            }, {
                label: 'Prototipo',
                backgroundColor: '#00796b',
                data: [
                    data[0]["2016"][2],
                    data[1]["2017"][2],
                    data[2]["2018"][2],
                    data[3]["Total"][2]
                ]
            }, {
                label: 'Signos distintivos',
                backgroundColor: '#00897b',
                data: [
                    data[0]["2016"][3],
                    data[1]["2017"][3],
                    data[2]["2018"][3],
                    data[3]["Total"][3]
                ]
            }, {
                label: 'Software',
                backgroundColor: '#009688',
                data: [
                    data[0]["2016"][4],
                    data[1]["2017"][4],
                    data[2]["2018"][4],
                    data[3]["Total"][4]
                ]
            }, {
                label: 'Patente',
                backgroundColor: '#26a69a',
                data: [
                    data[0]["2016"][5],
                    data[1]["2017"][5],
                    data[2]["2018"][5],
                    data[3]["Total"][5]
                ]
            }, {
                label: 'Modelos de utilidad',
                backgroundColor: '#4db6ac',
                data: [
                    data[0]["2016"][6],
                    data[1]["2017"][6],
                    data[2]["2018"][6],
                    data[3]["Total"][6]
                ]
            }, {
                label: 'Talleres de creación',
                backgroundColor: '#80cbc4',
                data: [
                    data[0]["2016"][7],
                    data[1]["2017"][7],
                    data[2]["2018"][7],
                    data[3]["Total"][7]
                ]
            }, {
                label: 'Consultoría científico tecnológica e informe técnico',
                backgroundColor: '#b2dfdb',
                data: [
                    data[0]["2016"][8],
                    data[1]["2017"][8],
                    data[2]["2018"][8],
                    data[3]["Total"][8]
                ]
            }, {
                label: 'Diseño Industrial',
                backgroundColor: '#e0f2f1',
                data: [
                    data[0]["2016"][9],
                    data[1]["2017"][9],
                    data[2]["2018"][9],
                    data[3]["Total"][9]
                ]
            }, {
                label: 'Innovación de proceso o procedimiento',
                backgroundColor: '#fafafa',
                data: [
                    data[0]["2016"][10],
                    data[1]["2017"][10],
                    data[2]["2018"][10],
                    data[3]["Total"][10]
                ]
            }]

        };
        var productos = document.getElementById("productos").getContext("2d");
        window.myBar = new Chart(productos, {
            type: 'bar',
            data: dataProductos,
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
    }
})

