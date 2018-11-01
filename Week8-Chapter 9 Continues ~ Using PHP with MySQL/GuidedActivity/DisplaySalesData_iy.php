<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '****';
$db_name = 'SalesData_iy';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if(!$conn){
    die ('Failed to connect to MySQL: ' . mysqli_connect_error());

}

$sql = 'select * from Sales';

$query = mysqli_query($conn, $sql);
if(!$query)
{
    die('SQL Error: ' . mysqli_error($conn));
}
?>
<!--create the style and html-->
<!--I have provided a text file for you to copy and paste, you should know all of this by now anyway-->
<html>
<head>
	<title>Displaying MySQL Data in a beautiful HTML Table</title>
	<style type="text/css">
		body 
		{
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
            background-color: deepskyblue;
		}
		table 
		{
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
            background-color: aqua;
           
		}

		h1
		{
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td 
		{
			transition: all .5s;
		}
		
		/* Table */
		.data-table 
		{
			border-collapse: collapse;
			font-size: 20px;
			min-width: 537px;
            
		}

		.data-table th, 
		.data-table td 
		{
			border: 1px solid black;
			padding: 7px 17px;
		}
		.data-table caption 
		{
			margin: 20px;
		}

		/* Table Header */
		.data-table thead th 
		{
			background-color: #3c3ccc;
			color:#ffffff;
			border-color: black!important;
			text-transform: uppercase;
            
		}

		/* Table Body */
		.data-table tbody td 
		{
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child 
		{
			text-align: right;
            
		}

		.data-table tbody tr:nth-child(odd) td
		{
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td 
		{
			background-color: lightgoldenrodyellow;
			border-color: #888888;
            text-align: center;
            
		}
        
		/* Table Footer */
		.data-table tfoot th 
		{
			background-color: #ffffff;
			text-align: right;
            
		}
		.data-table tfoot th:first-child 
		{
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: lightcyan;
		}
	</style>
</head>
<body>
	<h1>Week 8 Guided Activity</h1>
	<table class="data-table">
		<caption class="title">Sales Data of Electronic Division</caption>
		<thead>
			<tr>
				<th>CUST_ID</th>
				<th>CUSTOMER</th>
				<th>ITEM</th>
				<th>DATE</th>
				<th>AMOUNT</th>
			</tr>
		</thead>
		<tbody>
<?php
$CUST_ID = 1;
$total = 0;
while($row = mysqli_fetch_array($query))
{
    $amount = $row['Amount'] == 0 ? '' : number_format($row['Amount']);
    echo '<tr>
            <td>'.$CUST_ID.'</td>
            <td>'.$row['Name'].'</td>
            <td>'.$row['Item'].'</td>
            <td>'.date('F d, Y', strtotime($row['Date'])) . ' </td>
            <td>'.$amount.'</td>
          </tr>';
$total +=$row['Amount'];
$CUST_ID++;
}
?>
</tbody>
<tfoot>
    <tr>
        <th colspan="4">Total</th>
        <th><?=number_format($total)?></th>
    </tr>
</tfoot>
</table>
</body>
</html>