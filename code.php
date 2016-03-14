

<?php
	$con = mysql_connect("127.0.0.1" , "root","1234") 
	       or die (mysql_error());
	mysql_select_db ("tak" , $con);
	$str = "select a.producttypename, b.productid , b.productname, b.amount , b.price from producttype a , product b where a.producttypeid = b.producttypeid";
	$rs  =  mysql_query ($str);
	
		echo "<table border = 2>";
		echo "<tr>";
		echo "<td>Product</td>";
		echo "<td>ProductId</td>";
		echo "<td>Productname</td>";
		echo "<td>amount</td>";
		echo "<td>Price</td>";
		echo "</tr>";
		while ($s = mysql_fetch_array($rs))
		{       echo "<tr>";
			echo "<td>".$s[0]."</td>";
                        echo "<td>".$s[1]."</td>";
			echo "<td>".$s[2]."</td>";
			echo "<td>".$s[3]."</td>";
			echo "<td>".$s[4]."</td>";
			echo "</tr>";
		}
		echo "</table>";

?>
