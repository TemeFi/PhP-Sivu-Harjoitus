 <!DOCTYPE html>
<html>
<body>
<p>Tänäään on 
<?php 
echo date("j.n.Y");
echo "<BR>";
echo PHP_VERSION;
echo "<BR>";
echo "<ul>";
for ($i=1; $i <= 20; $i++)
{
	echo "<li>" . $i;
}
echo "</ul>";

?>
</p>
</body>
</html> 