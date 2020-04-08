<html>
<head>
<style type="text/css">
		table
{
  border: 1px solid black;
}
</style>
</head>

<body>
<H3>Displaying popular baby names:</H3>
<form method="post" action="babynames.php">
Choose a year:
<select name="years">

  <option value="all years" selected>all years</option>
  <option value="2005">2005</option>
  <option value="2006">2006</option>
  <option value="2007">2007</option>
  <option value="2008">2008</option>
  <option value="2009">2009</option>
  <option value="2010">2010</option>
  <option value="2011">2011</option>
  <option value="2012">2012</option>
  <option value="2013">2013</option>
  <option value="2014">2014</option>
  <option value="2015">2015</option>
</select>
<br/>
Choose a gender:
<select name="gender">

  <option value="both" selected>both</option>
  <option value="m">m</option>
  <option value="f">f</option>
</select>
<br/>
<button >submit</button>
</form>
</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "HW3";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (mysqli_connect_errno()) {
    die("Connection failed");
}
else
	{

$yrs=$_POST["years"];
$gdr=$_POST["gender"];

if($yrs=="all years" and $gdr=="both")
 {
 echo "year and gender are default values of all years and both genders";
$sql="SELECT * FROM BabyNames";
}
else if($yrs=="all years")
 {
$sql="SELECT * FROM BabyNames WHERE gender = "."'".$gdr."'"." ;";
}
else if($gdr=="both")
 {
$sql="SELECT * FROM BabyNames WHERE year = ".$yrs." ;";
}
else
{
	$sql="SELECT * FROM BabyNames WHERE year = ".$yrs." AND gender = "."'".$gdr."'"." ;";
}
 
$result = mysqli_query($conn,$sql);

?>
<table>
				<tr>
					<thead>
						<td>Name</td>
						<td>Year</td>
						<td>Ranking</td>
						<td>Gender</td>
					</thead>
				</tr>
				<tbody>
		 		<?php
					while ($row = mysqli_fetch_array($result)) {
				?>
					<tr>
							<td><?php echo $row[0]?></td>
							<td><?php echo $row[1]?></td>
							<td><?php echo $row[2]?></td>
							<td><?php echo $row[3]?></td>
						<?php
							}
						?>
				    </tr>
				</tbody>
		</table>
		<?php
		}
		$conn->close();
?>