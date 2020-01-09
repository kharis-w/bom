<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'dist/head.php' ?>
	<title>Dashboard</title>
</head>

<body id="page-top">
	<?php include 'dist/content/index.php' ?>

	<?php include 'dist/js.all.php'; ?>
	
	<!-- Only This Page -->
	<!-- Chart -->
	<script src="../src/vendor/chart.js/Chart.min.js"></script>
	<!-- Chart Style -->
	<script src="../dist/js/demo/chart-area-demo.js"></script>
  <!-- dataTable -->
  <script src="../src/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../src/vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="../dist/js/demo/datatables-demo.js"></script>

	<script type="text/javascript" src="dist/js/index.js"></script>
	<script type="text/javascript">
		var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: month,
    datasets: [{
      label: "Pemasukan Total",
      lineTension: 0.3,
      backgroundColor: "rgba(78, 115, 223, 0.1)",
      borderColor: "rgba(78, 115, 223, 1)",
      pointRadius: 3,
      pointBackgroundColor: "rgba(78, 115, 223,, 1)",
      pointBorderColor: "rgba(78, 115, 223, 1)",
      pointHoverRadius: 3,
      pointHoverBackgroundColor: "rgba(78, 115, 223,, 1)",
      pointHoverBorderColor: "rgba(78, 115, 223, 1)",
      pointHitRadius: 10,
      pointBorderWidth: 2,
      data: ['<?php echo $Juli; ?>','<?php echo $Agustus; ?>', '<?php echo $September; ?>', '<?php echo $Oktober; ?>','<?php echo $November; ?>', '<?php echo $Desember; ?>', '<?php echo $Januari; ?>', '<?php echo $Februari; ?>', '<?php echo $Maret; ?>', '<?php echo $April; ?>', '<?php echo $Mei; ?>', '<?php echo $Juni; ?>'],
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return '(M3) ' + number_format(value);
          }
        },
        gridLines: {
          color: "rgb(255, 236, 255)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
    },
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      intersect: false,
      mode: 'index',
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + ': (M3) ' + number_format(tooltipItem.yLabel);
        }
      }
    }
  }
});

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Direct", "Referral", "Social"],
    datasets: [{
      data: [55, 30, 15],
      backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
      hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 50,
  },
});
	</script>

</body>

</html>