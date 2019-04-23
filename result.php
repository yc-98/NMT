<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: auto;
}

td{
    border: 1px solid #dddddd;
    text-align: center;
    padding: 8px;
}
th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #4CAF50;
    color: white;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
h1{
color:green;
}
</style>

<?php
//if(isset($_POST['submit'])){
//$selected_val = $_POST['Color'];  // Storing Selected Value In Variable
$r=$_POST['radio']; 
$d=$_POST['dropdown']; 
$sel=$r.$d.".txt";
$file = fopen("$sel","r");
if($d=="")
{
echo "<h1 align='center'>Packets with their description</h1>";
$sel1=$r."time.txt";
$sel2=$r."smac.txt";
$sel3=$r."dmac.txt";
$sel4=$r."sip.txt";
$sel5=$r."dip.txt";
$sel6=$r."len.txt";
$sel7=$r."sport.txt";
$sel8=$r."dport.txt";
$f1=fopen("$sel1","r");
$f2=fopen("$sel2","r");
$f3=fopen("$sel3","r");
$f4=fopen("$sel4","r");
$f5=fopen("$sel5","r");
$f6=fopen("$sel6","r");

if($r!="arp")
{
$f7=fopen("$sel7","r");
$f8=fopen("$sel8","r");
}



echo "<table align='center'>
	<tr>
		<th>Time Stamp</th>
		<th>Source Mac</th>
		<th>Destination mac</th>
		<th>Source Ip</th>
		<th>Destination ip</th>
		<th>Length</th>";
if($r!="arp")
{
		echo "<th>Source Port</th>
		<th>Destination Port</th>";
}
echo	"</tr>";
	

while(! feof($f1))
  {
	echo "<tr>";
	echo "<td>".fgets($f1). "</td>";
	echo "<td>".fgets($f2). "</td>";
	echo "<td>".fgets($f3). "</td>";
	echo "<td>".fgets($f4). "</td>";
	echo "<td>".fgets($f5). "</td>";
	echo "<td>".fgets($f6). "</td>";
if($r!="arp")
{
	echo "<td>".fgets($f7). "</td>";
	echo "<td>".fgets($f8). "</td>";
}
echo "</tr>";
  }

 
echo "</table>";





$f1=fclose("$sel1","r");
$f2=fclose("$sel2","r");
$f3=fclose("$sel3","r");
$f4=fclose("$sel4","r");
$f5=fclose("$sel5","r");
$f6=fclose("$sel6","r");
$f7=fclose("$sel7","r");
if($r!="arp")
{$f8=fclose("$sel8","r");
$f9=fclose("$sel9","r");
}
}
else if($d=="top")
{
echo "<h1 align='center'>Top 5 machines with highest number of packets sent<h1>";
echo "<table align='center'>
	<tr>
		<th>No of packets sent</th>
		<th>SIP</th>
	</tr>
	";
$count=0;
 
while((++$count<=5)&&($row = fgets($file)) != false) {
	echo "<tr>";
	$col = explode(' ',$row);
	
	foreach($col as $data) {
	if(!empty($data))
		{echo "<td>". trim($data)."</td>";}
	}
	echo "</tr>";
}

 
echo "</table>";
}
else
{
echo "<br><br><table align='center'>";
echo "<th>".$r.$d. "</th>";
while(! feof($file))
  {
   echo "<tr>";
  echo "<td>".fgets($file). "</td>";
echo "</tr>";
  }
echo "</table>";
}
fclose($file);
?> 
