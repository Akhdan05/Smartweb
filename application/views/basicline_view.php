<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Chart</title>
</head> 
<body> 

<div id="container"></div>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script type="text/javascript">
    // $.get('<?= site_url('basicline') ?>', function(dataZ){
	// 	let datas = [];
    //     let datas1 = [];
	// 	let json = JSON.parse(dataZ);
	// 	$.each(json, function(index, val){
	// 		datas.push(val['tanggal'].toString());
    //         datas1.push(parseInt(val['jml_pengunjung']));
	// 	});
		// alert(JSON.stringify(datas1));

        Highcharts.chart('container', {

            title: {
                text: ''
            },

            yAxis: {
                title: {
                    text: 'Jumlah pengunjung'
                }
            },
        
            xAxis: {
                    categories:
                    // <?php 
                    //     echo "[";
                    //     foreach($data_pengunjung as $pengunjung) {
                    //         echo date('d-m-Y', strtotime($pengunjung['create_at'])).",";
                    //     }
                    //     echo "]";
                    // ?>
                    
                    ['17-04-2022','18-04-2022','27-04-2022','28-04-2022']
            },

            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },

            plotOptions: {
                series: {
                    label: {
                        connectorAllowed: false
                    },
                }
            },

            series: [

                {
                    name: 'Total Pengunjung Keseluruhan',
                    data: 
                         // <?php 
                        //         echo "[";
                        //         foreach($data_pengunjung as $pengunjung) {
                        //         echo $pengunjung['jml_pengunjung'].",";
                        //         }
                        //         echo "]";
                        // ?>
                        
                        [3,1,1,1]
                       
                }
            ],

            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center', 
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }

        });
</script>
        
</body>
</html>