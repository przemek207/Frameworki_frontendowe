	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="../assets/css/main.css">
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>  
	<?php require($_SERVER['DOCUMENT_ROOT'] . '/php/getTemp.php' ); ?>
 
<script type="text/javascript">
 
var jsonData = <?php echo json_encode($table); ?>;
 
// Load the Visualization API and the piechart package.
google.load('visualization', '1', {'packages':['corechart']});
 
// Set a callback to run when the Google Visualization API is loaded.
google.setOnLoadCallback(drawChart);
 
function drawChart() {
// Create our data table out of JSON data loaded from server.
  var data = new google.visualization.DataTable(jsonData);
   var options = {
    'height':500
   };
// Instantiate and draw our chart, passing in some options.
// Do not forget to check your div ID
var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
chart.draw(data, options);
}
</script>

  
   <div class="container">
    <div id="chart_div" style="width:100%"></div>
   </div>
  