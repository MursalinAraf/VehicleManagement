 <?php
  require_once("Head.php");
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'buschedulet'; // Database Name
 
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
 if (!$conn) {
    die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
}
if(isset( $_REQUEST['submit']))
{
     $name=$_GET['name'];
    $time=$_GET['time'];     
$query =$conn->query("SELECT Day,Source,SourceLeave,Destination,DestinationLeave,VechileNo,Route FROM timeschedule 
 WHERE Day LIKE '%".$name."%'AND SourceLeave Like '%".$time."%' ");
}

  
if (!$query) {
    die ('SQL Error: ' . mysqli_error($conn));
}
  

?>
<html>
<head>
    <title>Displaying MySQL Data in HTML Table</title>
    <style type="text/css">
        body {
            font-size: 15px;
            color: #343d44;
            font-family: "segoe-ui", "open-sans", tahoma, arial;
            padding: 0;
            margin: 0;
        }
		body { 
 background: url('i2.jpg') no-repeat center center fixed; 
 -webkit-background-size: cover;
 -moz-background-size: cover;
 -o-background-size: cover;
 background-size: cover;
 margin:0 auto;
padding:0px;
}
 
        table {
            margin: auto;
            font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
            font-size: 12px;
        }
 
        h1 {
            margin: 25px auto 0;
            text-align: center;
            text-transform: uppercase;
            font-size: 17px;
        }
 
        table td {
            transition: all .5s;
        }
         
        /* Table */
        .data-table {
            border-collapse: collapse;
            font-size: 14px;
            min-width: 537px;
        }
 
        .data-table th, 
        .data-table td {
            border: 1px solid #e1edff;
            padding: 7px 17px;
        }
        .data-table caption {
            margin: 7px;
        }
 
        /* Table Header */
        .data-table thead th {
            background-color: #508abb;
            color: #FFFFFF;
            border-color: #6ea1cc !important;
            text-transform: uppercase;
        }
 
        /* Table Body */
        .data-table tbody td {
            color:#353535;
        }
        .data-table tbody td:first-child,
        .data-table tbody td:nth-child(4),
        .data-table tbody td:last-child {
            text-align: right;
        }
 
        .data-table tbody tr:nth-child(odd) td {
            background-color:#f4fbff;
        }
		.data-table tbody tr:nth-child(even) td {
            background-color:#f4fbff;
        }
        .data-table tbody tr:hover td {
            background-color: #ffffa2;
            border-color: #ffff0f;
        }
 
        /* Table Footer */
        .data-table tfoot th {
            background-color: #e5f5ff;
            text-align: right;
        }
        .data-table tfoot th:first-child {
            text-align: left;
        }
        .data-table tbody td:empty
        {
            background-color: #ffcccc;
        }
    </style>
</head>
<body>
    <h1 style="color:white; font-family:Lucida Sans Unicode, Lucida Grande, Segoe Ui;
            font-size:30px" >Vehicle Schedule:</h1>
	 
	<table class="data-table">
        <caption class="title"></caption>
        <thead>
            <tr>
                <th>NO</th>
                <th>Day</th>
                <th>Source</th>
                <th>Source_Leave</th>
                <th>Destination</th>
				<th>Destination_Leave</th>
				<th>Vehicle_No</th>
				<th>Route</th>
				
				 
            </tr>
        </thead>
        <tbody>
        <?php
        $no     = 1;
		 if(mysqli_num_rows($query)>0){
while ($row = mysqli_fetch_array($query))
        {
			 
          
            echo '<tr>
                    <td>'.$no.'</td>
                    <td>'.$row['Day'].'</td>
                    <td>'.$row['Source'].'</td>
                    <td>'.$row['SourceLeave'] . '</td>
                    <td>'.$row['Destination'].'</td>
					<td>'.$row['DestinationLeave'].'</td>
					<td>'.$row['VechileNo'].'</td>
						<td>'.$row['Route'].'</td>
					 
					
				 
                </tr>';
            $no++;
   
}
		 }
 else{
        echo '<h1 style="color:red";>OOPPS...!!!!!!!  No Bus Available for This time.</h1>';
              }
?>
        </tbody>
        <tfoot>
             
        </tfoot>
    </table>
</body>
</html>

 
 