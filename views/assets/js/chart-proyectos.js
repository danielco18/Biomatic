    $.ajax({
    type: "POST",
    url: "index.php?c=proyectos&a=data",
    success: function(data){
        var data = JSON.parse(data);
        var dataProyectos = {
            labels: ["2012", "2013", "2014", "2015", "2016", "2017", "2018", "Total"],
            datasets: [{
                label: 'SENA',
                backgroundColor: '#004d40',
                data: [
                    data[0]["2012"][0],
                    data[1]["2013"][0],
                    data[2]["2014"][0],
                    data[3]["2015"][0],
                    data[4]["2016"][0],
                    data[5]["2017"][0],
                    data[6]["2018"][0],
                    data[7]["Total"][0]
                ]
            }, {
                label: 'Confinanciados x Empresas',
                backgroundColor: '#00796b',
                data: [
                    data[0]["2012"][1],
                    data[1]["2013"][1],
                    data[2]["2014"][1],
                    data[3]["2015"][1],
                    data[4]["2016"][1],
                    data[5]["2017"][1],
                    data[6]["2018"][1],
                    data[7]["Total"][1]
                ]
            }, {
                label: 'Confinanciación de otras entidades',
                backgroundColor: '#009688',
                data: [
                    data[0]["2012"][2],
                    data[1]["2013"][2],
                    data[2]["2014"][2],
                    data[3]["2015"][2],
                    data[4]["2016"][2],
                    data[5]["2017"][2],
                    data[6]["2018"][2],
                    data[7]["Total"][2]
                ]
            }]
        };
        var proyecto = document.getElementById("proyecto").getContext("2d");
        window.myBar = new Chart(proyecto, {
            type: 'bar',
            data: dataProyectos,
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
