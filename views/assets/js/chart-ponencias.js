$.ajax({
    type: "POST",
    url: "index.php?c=ponencias&a=data",
    success: function(data){
        var data = JSON.parse(data);
        var dataParticipacion = {
            labels: ["2012", "2013", "2014", "2015", "2016", "2017", "2018"],
            datasets: [{
                label: 'Regionales',
                backgroundColor: '#004d40',
                data: [
                    data["2012"][0],
                    data["2013"][0],
                    data["2014"][0],
                    data["2015"][0],
                    data["2016"][0],
                    data["2017"][0],
                    data["2018"][0]
                ]
            }, {
                label: 'Nacionales',
                backgroundColor: '#00897b',
                data: [
                    data["2012"][1],
                    data["2013"][1],
                    data["2014"][1],
                    data["2015"][1],
                    data["2016"][1],
                    data["2017"][1],
                    data["2018"][1]
                ]
            }, {
                label: 'Internacionales',
                backgroundColor: '#80cbc4',
                data: [
                    data["2012"][2],
                    data["2013"][2],
                    data["2014"][2],
                    data["2015"][2],
                    data["2016"][2],
                    data["2017"][2],
                    data["2018"][2]
                ]
            }]
        };
        var dataTipoPonencia = {
            labels: ["Ponencia Oral", "Ponencia Póster"],
            datasets: [{
                label: 'Tipo de Ponencia',
                backgroundColor: '#009688',
                data: [
                    data["Tipo"][0],
                    data["Tipo"][1]
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
    }
})
