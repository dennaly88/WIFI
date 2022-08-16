<?php

    //creamos la sesion
    session_start();
    //validamos si se ha hecho o no el inicio de sesion correctamente
    //si no se ha hecho la sesion nos regresará a login.php
    if(!isset($_SESSION['usuario'])) 
    {
        
        header('Location: index.php'); 
        
        exit();
     }

?>

<br><br><br>
<center><div class="card border-dark text-center  w-50">
  <div class="card-header bg-dark">
  <button class="btn mr-3 btn-light btn-sm"  >TIC</button>  
  </div>
  <div class="card-body">
  
	<body>
    <script src="graficas/code/highcharts.js"></script>
<script src="graficas/code/highcharts-more.js"></script>
<script src="graficas/code/modules/exporting.js"></script>

<div id="container"></div>


		<script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        type: 'packedbubble',
        height: '40%'
    },
    title: {
        text: 'Señales de Wifi'
    },
    tooltip: {
        useHTML: true,
        pointFormat: '<b>{point.name}:</b> {point.value}m CO<sub>2</sub>'
    },
    plotOptions: {
        packedbubble: {
            minSize: '150%',
            maxSize: '100%',
            zMin: 0,
            zMax: 1000,
            layoutAlgorithm: {
                splitSeries: false,
                gravitationalConstant: 0.02
            },
            dataLabels: {
                enabled: true,
                format: '{point.name}',
                filter: {
                    property: 'y',
                    operator: '>',
                    value: 250
                },
                style: {
                    color: 'black',
                    textOutline: 'none',
                    fontWeight: 'normal'
                }
            }
        }
    },
    series: [{
        name: 'Sotano ',
        data: [{
            name: 'Escuelita',
            value: 767.1
        }, {
            name: 'Seguridad',
            value: 20.7
        },
        {
            name: "Seguridad",
            value: 97.2
        },
        {
            name: "",
            value: 111.7
        },
        {
            name: "Escuelita",
            value: 158.1
        },
        {
            name: "",
            value: 241.6
        },
        {
            name: "",
            value: 249.1
        },
        {
            name: "Escuelita",
            value: 298.1
        },
        {
            name: "",
            value: 323.7
        },
        {
            name: "",
            value: 78.3
        },
        {
            name: "Escuelita",
            value: 415.4
        }, {
            name: "",
            value: 353.2
        }, {
            name: "",
            value: 337.6
        },
        {
            name: "",
            value: 71.1
        },
        {
            name: "Escuelita",
            value: 69.8
        },
        {
            name: "",
            value: 67.7
        },
        {
            name: "Escuelita",
            value: 59.3
        },
        {
            name: "",
            value: 54.8
        },
        {
            name: "",
            value: 51.2
        },
        {
            name: "",
            value: 48.3
        },
        {
            name: "Seguridad ",
            value: 44.4
        },
        {
            name: "Escuelita",
            value: 44.3
        },
        {
            name: "",
            value: 43.7
        },
        {
            name: "",
            value: 40.2
        },
        {
            name: "",
            value: 40
        },
        {
            name: "",
            value: 34.7
        },
        {
            name: "Escuelita",
            value: 34.6
        },
        {
            name: "",
            value: 20.7
        },
        {
            name: "",
            value: 19.4
        },
        {
            name: "",
            value: 16.7
        },
        {
            name: "",
            value: 12.3
        },
        {
            name: "",
            value: 10.4
        },
        {
            name: "Escuelita",
            value: 9.5
        },
        {
            name: "Escuelita",
            value: 7.8
        },
        {
            name: "Escuelita",
            value: 7.5
        },
        {
            name: "Escuelita",
            value: 7.2
        }]
    }, {
        name: 'Planta Baja',
        data: [{
            name: "Transporte",
            value: 8
        },
        {
            name: "Maquillaje",
            value: 9.2
        },
        {
            name: "Estudio 2",
            value: 13.1
        },
        {
            name: "Estudio 4",
            value: 14.1
        },
        {
            name: "Arepera",
            value: 14.1
        },
        {
            name: "LOBBY",
            value: 17.3
        },
        {
            name: "Atencion Ciudadano",
            value: 24.3
        },
        {
            name: "Servicios Informativos",
            value: 25
        },
        {
            name: "Transporte",
            value: 50
        },
        {
            name: "Servicios Informativos",
            value: 7.3
        },
        {
            name: "LOBBY",
            value: 60.7
        },
        {
            name: "Estudio 4",
            value: 8.9
        },
        {
            name: "LOBBY",
            value: 9.1
        },
        {
            name: "Transporte",
            value: 93.9
        },
        {
            name: "Servicios Informativos",
            value: 392.7
        }, {
            name: "Arepera",
            value: 225.1
        }, {
            name: "Estudio 4",
            value: 141.5
        }]
    }, {
        name: 'Piso 1',
        data: [{
            name: "Programas",
            value: 409.4
        },
        {
            name: "Programacion",
            value: 34.1
        },
        {
            name: "Multimedios",
            value: 7.1
        }]
    }, {
        name: 'Piso 2',
        data: [{
            name: "GERENCIA_TIC",
            value: 7.6
        },
        {
            name: "Desarrollo",
            value: 8.4
        },
        {
            name: "Multimedios",
            value: 8.3
        },
        {
            name: "Servicio Informativo",
            value: 10.2
        },
        {
            name: "Telepuerto",
            value: 12
        },
        {
            name: "Desarrollo",
            value: 23.4
        },
        {
            name: "Estudio 5",
            value: 30.2
        },
        {
            name: "GERENCIA_TIC",
            value: 5334.5
        }, {
            name: "GERENCIA_TIC",
            value: 566
        }, {
            name: "Desarrollo",
            value: 456.3
        }]
    }, {
        name: 'Piso 3',
        data: [{
            name: "VICEPRECIDENCIA",
            value: 7.2
        },
        {
            name: "telepuerto",
            value: 8.1
        },
        {
            name: "AF",
            value: 17.8
        },
        {
            name: "Piso 3",
            value: 34
        },
        {
            name: "PROGRAMAS",
            value: 43
        },
        {
            name: "VICEPRECIDENCIA",
            value: 78.6
        },
        {
            name: "Piso 4",
            value: 52
        },
        {
            name: "GERENCIA_GH",
            value: 74.1
        },
        {
            name: "ESTUDIO04-INVITADO",
            value: 501.1
        }, {
            name: "GERENCIA_GH",
            value: 199
        },
        {
            name: "IMAGEN VTV",
            value: 195.2
        }]
    }, {
        name: 'Piso 4',
        data: [{
            name: "Sala R Presidencia",
            value: 6.5
        },
        {
            name: "Vice_Presidencia",
            value: 6.5
        },
        {
            name: "Sala Situacional",
            value: 7.4
        },
        {
            name: "Piso 3",
            value: 7.4
        },
        {
            name: "",
            value: 7.9
        },
        {
            name: "",
            value: 9.1
        },
        {
            name: "",
            value: 14.7
        },
        {
            name: "",
            value: 16.6
        },
        {
            name: "",
            value: 20.5
        },
        {
            name: "",
            value: 22.6
        },
        {
            name: "Jordan",
            value: 22.3
        },
        {
            name: "Lebanon",
            value: 21.1
        },
        {
            name: "Azerbaijan",
            value: 31.7
        },
        {
            name: "Singapore",
            value: 47.8
        },
        {
            name: "Hong Kong",
            value: 49.9
        },
        {
            name: "Syria",
            value: 52.7
        },
        {
            name: "DPR Korea",
            value: 59.9
        },
        {
            name: "Israel",
            value: 64.8
        },
        {
            name: "Turkmenistan",
            value: 70.6
        },
        {
            name: "Oman",
            value: 74.3
        },
        {
            name: "Qatar",
            value: 88.8
        },
        {
            name: "Philippines",
            value: 96.9
        },
        {
            name: "Kuwait",
            value: 98.6
        },
        {
            name: "Uzbekistan",
            value: 122.6
        },
        {
            name: "Iraq",
            value: 139.9
        },
        {
            name: "Pakistan",
            value: 158.1
        },
        {
            name: "Vietnam",
            value: 190.2
        },
        {
            name: "",
            value: 201.1
        },
        {
            name: "",
            value: 227.5
        },
        {
            name: "",
            value: 236.2
        },
        {
            name: "",
            value: 272
        },
        {
            name: "",
            value: 276.7
        },
        {
            name: "Telepuertos",
            value: 453
        },
        {
            name: "Sala R Presidencia",
            value: 494.8
        },
        {
            name: "GERENCIA_GH",
            value: 1278.9
        },
        {
            name: "Sala R Presidencia",
            value: 10540.8
        },
        {
            name: "Telepuertos",
            value: 2341.9
        },
        {
            name: "Sala Situacional",
            value: 1766.4
        },
        {
            name: "GERENCIA_GH",
            value: 618.2
        },
        {
            name: "Piso 4",
            value: 610.1
        }]
    }]
});

		</script>
	</body>

    </div>
  <div class="card-footer text-muted bg-dark">
  <button class="btn mr-3 btn-danger btn-sm"  >Division de Servidores y Redes</button>  
  </div>
</div>
