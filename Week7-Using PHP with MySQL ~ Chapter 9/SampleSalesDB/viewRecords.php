<?php 
// This script retrieves all the records from a table.
// This new version allows the results to be sorted in different ways.
$page_title = 'View Records';
include('includes/header.html');
echo '<h1>Current Records</h1>';

//require('dbConnection.php');

require('dbConnection.php');
// Number of records to show per page:
$display = 5;
// Determine how many pages there are...
if (isset($_GET['p']) && is_numeric($_GET['p'])) 
{ // Already been determined.
	$pages = $_GET['p'];
} 
	else 
	{ // Need to determine.
 	// Count the number of records:
	$q = "SELECT COUNT(transId) FROM sales";
	$r = mysqli_query($connection, $q);
	$row = mysqli_fetch_array($r, MYSQLI_NUM);
	$records = $row[0];
	// Calculate the number of pages...
	if ($records > $display) { // More than 1 page.
		$pages = ceil ($records/$display);
	} 
		else 
		{
		$pages = 1;
		}
} // End of p IF.

// Determine where in the database to start returning results...
if (isset($_GET['s']) && is_numeric($_GET['s'])) {
	$start = $_GET['s'];
} 
	else 
	{
	$start = 0;
	}
// Determine the sort...
// Default is by customer id.
$sort = (isset($_GET['sort'])) ? $_GET['sort'] : 'cst';
// Determine the sorting order:
switch ($sort) {
	case 'prd':
		$order_by = 'ProductID ASC';
		break;
	case 'qty':
		$order_by = 'quantity ASC';
		break;
	case 'amt':
		$order_by = 'amount ASC';
		break;
	default:
		$order_by = 'custId ASC';
		$sort = 'cst';
		break;
}
// Define the query:
$q = "SELECT prodId, qty, amount, custId FROM sales ORDER BY $order_by LIMIT $start, $display";
$r = mysqli_query($connection, $q); // Run the query.
// Table header:
echo '<table width="60%">
<thead>
<tr>
	<th align="left"><strong><a href="viewRecords.php?sort=ln">Product ID</a></strong></th>
	<th align="left"><strong><a href="viewRecords.php?sort=fn">Quantity</a></strong></th>
	<th align="left"><strong><a href="viewRecords.php?sort=fn">Quantity</a></strong></th>
	<th align="left"><strong><a href="viewRecords.php?sort=cst">Customer ID</a></strong></th>
</tr>
</thead>
<tbody>
';
// Fetch and print all the records....
$bg = '#eeeeee';
while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) 
{
	$bg = ($bg=='#eeeeee' ? '#ffffff' : '#eeeeee');
		echo '<tr bgcolor="' . $bg . '">
		<td align="left">' . $row['prodId'] . '</td>
		<td align="left">' . $row['qty'] . '</td>
		<td align="left">' . $row['amount'] . '</td>
		<td align="left">' . $row['custId'] . '</td>
	</tr>
	';
} // End of WHILE loop.
echo '</tbody></table>';
mysqli_free_result($r);
mysqli_close($connection);
// Make the links to other pages, if necessary.
if ($pages > 1) 
{
	echo '<br><p>';
	$current_page = ($start/$display) + 1;
	// If it's not the first page, make a Previous button:
	if ($current_page != 1) 
	{
		echo '<a href="viewRecords.php?s=' . ($start - $display) . '&p=' . $pages . '&sort=' . $sort . '">Previous</a> ';
	}
	// Make all the numbered pages:
	for ($i = 1; $i <= $pages; $i++) 
	{
		if ($i != $current_page) 
		{
			echo '<a href="viewRecords.php?s=' . (($display * 
			($i - 1))) . '&p=' . $pages . '&sort=' . $sort . '">' . $i . '</a> ';
		} 
			else 
			{
			echo $i . ' ';
			}
	} // End of FOR loop.
	// If it's not the last page, make a Next button:
	if ($current_page != $pages) {
		echo '<a href="viewRecords.php?s=' . ($start + $display) . '&p=' . $pages . '&sort=' . $sort . '">Next</a>';
	}
	echo '</p>'; // Close the paragraph.
} // End of links section.
include('includes/footer.html');
?>