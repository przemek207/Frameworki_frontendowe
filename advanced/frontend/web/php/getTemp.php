<?php
    $dbname = '---'; // Add your Database name here
    $username = '---'; // Add your Username here
    $password = '---'; // Add your password here
 
    $conn = new PDO("mysql:host=localhost;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
// First section of code is for generating data for Google Charts.
    try {
      $result = $conn->query('SELECT *
			  FROM pi_base.temperature_monitor
			  WHERE date > DATE_SUB(NOW(), INTERVAL 72 HOUR)
			  AND date <= NOW();');
 
// Create the variables for the Google Chart and define as arrays	  
      $rows = array();
      $table = array();
 
// Define the array labels
      $table['cols'] = array(
        array('label' => 'date', 'type' => 'string'),
        array('label' => 'temperature', 'type' => 'number')
      );
// Iterate through each record in the MySQL DB to populate the array         
     foreach($result as $r) {
          $data = array();
          $data[] = array('v' => (string) $r['date']); 
	      $data[] = array('v' => (int) $r['temperature']);
          // Insert data array into $rows
          $rows[] = array('c' => $data);
        }
 
    $table['rows'] = $rows;
 
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
 
?>
