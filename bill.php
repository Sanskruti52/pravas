<?php
session_start();

include('includes/config.php');
if(strlen($_SESSION['login'])==0)
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bill</title>
</head>
<body>
		<table border="1" width="100%">
<tr align="center">
<th>#</th>



<th>Booking Id</th>
<th>Customer Name</th>	
<th>Package Name</th>
<th>From</th>
<th>To</th>
<th>Package Price</th>

</tr>
<?php 

$uemail=$_SESSION['login'];;
$sql = "SELECT tblbooking.BookingId as bookid,tblusers.FullName as name,tbltourpackages.PackageName as packagename,tblbooking.FromDate as fromdate,tblbooking.ToDate as todate,tbltourpackages.PackagePrice as packageprice";?>
<?php $sql = "SELECT * from tblbill";
$query = $dbh->prepare($sql);
$query -> bindParam(':uemail', $uemail, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>
<tr align="center">
<td><?php echo htmlentities($cnt);?></td>
<td>#BK<?php echo htmlentities($result->bookid);?></td>
<td><?php echo htmlentities($result->name);?></td>

<td><a href="package-details.php?pkgid=<?php echo htmlentities($result->pkgid);?>"><?php echo htmlentities($result->packagename);?></a></td>

<td><?php echo htmlentities($result->fromdate);?></td>
<td><?php echo htmlentities($result->todate);?></td>
<td><?php echo htmlentities($result->PackagePrice);?></td>
<td><?php if($result->status==0)
?>
</td>
<?php $cnt=$cnt+1; }} ?>
</tr>
</table>
</body>
</html>

