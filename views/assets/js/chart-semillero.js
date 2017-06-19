    $.ajax({
    type: "POST",
    url: "index.php?c=semillero&a=data",
    success: function(data){
        var data = JSON.parse(data);
            var dataSemillero = {
                labels: ["2012", "2013", "2014", "2015", "2016", "2017", "2018","Total"],
                datasets: [{
                    label: 'ADSI',
                    backgroundColor: '#ff6f00',
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
                    label: 'Sistemas de gestión ambiental',
                    backgroundColor: '#ff8f00',
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
                    label: 'Diseño de componentes para calzado',
                    backgroundColor: '#ffa000',
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
                    label: 'Inyección de plastico',
                    backgroundColor: '#ffb300',
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
                    label: 'Extrusión de plastico',
                    backgroundColor: '#ffc107',
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
                }, {
                    label: 'Formulación de proyectos',
                    backgroundColor: '#ffca28',
                    data: [
                        data[0]["2012"][6],
                        data[1]["2013"][6],
                        data[2]["2014"][6],
                        data[3]["2015"][6],
                        data[4]["2016"][6],
                        data[5]["2017"][6],
                        data[6]["2018"][6],
                        data[7]["Total"][6]
                    ]
                }, {
                    label: 'Contabilidad',
                    backgroundColor: '#ffd54f',
                    data: [
                        data[0]["2012"][7],
                        data[1]["2013"][7],
                        data[2]["2014"][7],
                        data[3]["2015"][7],
                        data[4]["2016"][7],
                        data[5]["2017"][7],
                        data[6]["2018"][7],
                        data[7]["Total"][7]
                    ]
                }, {
                    label: 'Recursos Humanos',
                    backgroundColor: '#01579b',
                    data: [
                        data[0]["2012"][8],
                        data[1]["2013"][8],
                        data[2]["2014"][8],
                        data[3]["2015"][8],
                        data[4]["2016"][8],
                        data[5]["2017"][8],
                        data[6]["2018"][8],
                        data[7]["Total"][8]
                    ]
                }, {
                    label: 'Logística',
                    backgroundColor: '#0277bd',
                    data: [
                        data[0]["2012"][9],
                        data[1]["2013"][9],
                        data[2]["2014"][9],
                        data[3]["2015"][9],
                        data[4]["2016"][9],
                        data[5]["2017"][9],
                        data[6]["2018"][9],
                        data[7]["Total"][9]
                    ]
                }, {
                    label: 'Salud Ocupacional',
                    backgroundColor: '#0288d1',
                    data: [
                        data[0]["2012"][10],
                        data[1]["2013"][10],
                        data[2]["2014"][10],
                        data[3]["2015"][10],
                        data[4]["2016"][10],
                        data[5]["2017"][10],
                        data[6]["2018"][10],
                        data[7]["Total"][10]
                    ]
                }, {
                    label: 'Producción de calzado y marroquinería',
                    backgroundColor: '#039be5',
                    data: [
                        data[0]["2012"][11],
                        data[1]["2013"][11],
                        data[2]["2014"][11],
                        data[3]["2015"][11],
                        data[4]["2016"][11],
                        data[5]["2017"][11],
                        data[6]["2018"][11],
                        data[7]["Total"][11]
                    ]
                }, {
                    label: 'Diseño de calzado y marroquinería',
                    backgroundColor: '#03a9f4',
                    data: [
                        data[0]["2012"][12],
                        data[1]["2013"][12],
                        data[2]["2014"][12],
                        data[3]["2015"][12],
                        data[4]["2016"][12],
                        data[5]["2017"][12],
                        data[6]["2018"][12],
                        data[7]["Total"][12]
                    ]
                }, {
                    label: 'Diseño de productos industriales',
                    backgroundColor: '#29b6f6',
                    data: [
                        data[0]["2012"][13],
                        data[1]["2013"][13],
                        data[2]["2014"][13],
                        data[3]["2015"][13],
                        data[4]["2016"][13],
                        data[5]["2017"][13],
                        data[6]["2018"][13],
                        data[7]["Total"][13]
                    ]
                }, {
                    label: 'Producción y consumo sostenible',
                    backgroundColor: '#4fc3f7',
                    data: [
                        data[0]["2012"][14],
                        data[1]["2013"][14],
                        data[2]["2014"][14],
                        data[3]["2015"][14],
                        data[4]["2016"][14],
                        data[5]["2017"][14],
                        data[6]["2018"][14],
                        data[7]["Total"][14]
                    ]
                }, {
                    label: 'Decoración y adecuación de especies comerciales',
                    backgroundColor: '#006064',
                    data: [
                        data[0]["2012"][15],
                        data[1]["2013"][15],
                        data[2]["2014"][15],
                        data[3]["2015"][15],
                        data[4]["2016"][15],
                        data[5]["2017"][15],
                        data[6]["2018"][15],
                        data[7]["Total"][15]
                    ]
                }, {
                    label: 'Gestión y seguridad de bases de datos',
                    backgroundColor: '#00838f',
                    data: [
                        data[0]["2012"][16],
                        data[1]["2013"][16],
                        data[2]["2014"][16],
                        data[3]["2015"][16],
                        data[4]["2016"][16],
                        data[5]["2017"][16],
                        data[6]["2018"][16],
                        data[7]["Total"][16]
                    ]
                }, {
                    label: 'Diagnóstico y análisis organizacional',
                    backgroundColor: '#0097a7',
                    data: [
                        data[0]["2012"][17],
                        data[1]["2013"][17],
                        data[2]["2014"][17],
                        data[3]["2015"][17],
                        data[4]["2016"][17],
                        data[5]["2017"][17],
                        data[6]["2018"][17],
                        data[7]["Total"][17]
                    ]
                }, {
                    label: 'Mercadeo estrátegico para el sistema de moda',
                    backgroundColor: '#00acc1',
                    data: [
                        data[0]["2012"][18],
                        data[1]["2013"][18],
                        data[2]["2014"][18],
                        data[3]["2015"][18],
                        data[4]["2016"][18],
                        data[5]["2017"][18],
                        data[6]["2018"][18],
                        data[7]["Total"][18]
                    ]
                }, {
                    label: 'Diseño y desarrollo de investigaciones de mercado',
                    backgroundColor: '#00bcd4',
                    data: [
                        data[0]["2012"][19],
                        data[1]["2013"][19],
                        data[2]["2014"][19],
                        data[3]["2015"][19],
                        data[4]["2016"][19],
                        data[5]["2017"][19],
                        data[6]["2018"][19],
                        data[7]["Total"][19]
                    ]
                }, {
                    label: 'Sistemas integrados de gestión de calidad',
                    backgroundColor: '#26c6da',
                    data: [
                        data[0]["2012"][5],
                        data[1]["2013"][5],
                        data[2]["2014"][5],
                        data[3]["2015"][5],
                        data[4]["2016"][5],
                        data[5]["2017"][5],
                        data[6]["2018"][5],
                        data[7]["Total"][5]
                    ]
                }, {
                    label: 'Otro',
                    backgroundColor: '#4dd0e1',
                    data: [
                        data[0]["2012"][20],
                        data[1]["2013"][20],
                        data[2]["2014"][20],
                        data[3]["2015"][20],
                        data[4]["2016"][20],
                        data[5]["2017"][20],
                        data[6]["2018"][20],
                        data[7]["Total"][20]
                    ]
                }]

            };
            var dataVinculados = {
                labels: ["Técnico", "Tecnólogo", "Especialización tecnológica"],
                datasets: [{
                    label: 'Aprendices del semillero',
                    backgroundColor: '#00897b',
                    data: [
                        data[8]["Nivel"][0],
                        data[8]["Nivel"][1],
                        data[8]["Nivel"][2]
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
    }
})
    
