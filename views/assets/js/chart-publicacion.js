    $.ajax({
    type: "POST",
    url: "index.php?c=publicacion&a=data",
    success: function(data){
        var data = JSON.parse(data);
        var dataPublicacion = {
            labels: ["2012", "2013", "2014", "2015", "2016", "2017", "2018", "Total"],
            datasets: [{
                label: 'Artículos',
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
                label: 'Capítulos',
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
                label: 'Libros',
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
            }, {
                label: 'Otros',
                backgroundColor: '#4db6ac',
                data: [
                    data[0]["2012"][3],
                    data[1]["2013"][3],
                    data[2]["2014"][3],
                    data[3]["2015"][3],
                    data[4]["2016"][3],
                    data[5]["2017"][3],
                    data[6]["2018"][3],
                    data[7]["Total"][3]
                ]
            }, {
                label: 'Tesis',
                backgroundColor: '#e0f2f1',
                data: [
                    data[0]["2012"][4],
                    data[1]["2013"][4],
                    data[2]["2014"][4],
                    data[3]["2015"][4],
                    data[4]["2016"][4],
                    data[5]["2017"][4],
                    data[6]["2018"][4],
                    data[7]["Total"][4]
                ]
            }]

        };
        var publicacion = document.getElementById("publicacion").getContext("2d");
        window.myBar = new Chart(publicacion, {
            type: 'bar',
            data: dataPublicacion,
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
    }
})
    
    
