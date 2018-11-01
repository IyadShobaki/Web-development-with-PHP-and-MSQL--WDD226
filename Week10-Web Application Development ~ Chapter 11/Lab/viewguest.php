<?php # Script 10.5 - #5
// This script retrieves all the records from the users table.
// This new version allows the results to be sorted in different ways.
$page_title = 'View the Current Guests';
include('includes/header.html');
echo '<h1>Registered Guests</h1>';
require('../../connection/DBconnection.php');
// Number of records to show per page:
$display = 10;
// Determine how many pages there are...
if (isset($_GET['p']) && is_numeric($_GET['p'])) { // Already been determined.
	$pages = $_GET['p'];
} else { // Need to determine.
 	// Count the number of records:
	$q = "SELECT COUNT(guest_id) FROM guests";
	$r = @mysqli_query($conn, $q);
	$row = @mysqli_fetch_array($r, MYSQLI_NUM);
	$records = $row[0];
	// Calculate the number of pages...
	if ($records > $display) { // More than 1 page.
		$pages = ceil ($records/$display);
	} else {
		$pages = 1;
	}
} // End of p IF.
// Determine where in the database to start returning results...
if (isset($_GET['s']) && is_numeric($_GET['s'])) {
	$start = $_GET['s'];
} else {
	$start = 0;
}
// Determine the sort...
// Default is by registration date.
$sort = (isset($_GET['sort'])) ? $_GET['sort'] : 'ln';
// Determine the sorting order:
switch ($sort) {
	case 'ln':
		$order_by = 'last_name ASC';
		break;
	case 'fn':
		$order_by = 'first_name ASC';
		break;
	default:
		$order_by = 'last_name ASC';
		$sort = 'ln';
		break;
}
// Define the query:
$q = "SELECT last_name, first_name, comments FROM guests ORDER BY $order_by LIMIT $start, $display";
$r = @mysqli_query($conn, $q); // Run the query.
// Table header:
echo '<table width="60%">
<thead>
<tr>	
	<th align="left"><strong><a href="viewguest.php?sort=ln">Last Name</a></strong></th>
	<th align="left"><strong><a href="viewguest.php?sort=fn">First Name</a></strong></th>
	<th align="center"><strong>Comments</strong></th>
</tr>
</thead>
<tbody>
';
// Fetch and print all the records....
$bg = '#eeeeee';
while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
	$bg = ($bg=='#eeeeee' ? '#ffffff' : '#eeeeee');
		echo '<tr bgcolor="' . $bg . '">
		<td class="left">' . $row['last_name'] . '</td>
		<td class="left">' . $row['first_name'] . '</td>
		<td align="center">' . $row['comments'] . '</td>
	</tr>
	';
} // End of WHILE loop.
echo '</tbody></table>';
mysqli_free_result($r);
mysqli_close($conn);
// Make the links to other pages, if necessary.
if ($pages > 1) {
	echo '<p class="next">';
	$current_page = ($start/$display) + 1;
	// If it's not the first page, make a Previous button:
	if ($current_page != 1) {
		echo '<a href="viewguest.php?s=' . ($start - $display) . '&p=' . $pages . '&sort=' . $sort . '">Previous</a> ';
	}
	// Make all the numbered pages:
	for ($i = 1; $i <= $pages; $i++) {
		if ($i != $current_page) {
			echo '<a href="viewguest.php?s=' . (($display * ($i - 1))) . '&p=' . $pages . '&sort=' . $sort . '">' . $i . '</a> ';
		} else {
			echo $i . ' ';
		}
	} // End of FOR loop.
	// If it's not the last page, make a Next button:
	if ($current_page != $pages) {
		echo '<a href="viewguest.php?s=' . ($start + $display) . '&p=' . $pages . '&sort=' . $sort . '">Next</a>';
	}
	echo '</p>'; // Close the paragraph.
} // End of links section.
include('includes/footer.html');
?>