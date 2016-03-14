<?php
     $con=mysql_connect("127.0.0.1" ,"root","1234") or die (mysql_error());
     mysql_select_db("Product" ,$con);
     $str = "select a.ProductTypeName, b.ProductID, b.ProductName, b.Amount, b.Price from ProductType a, Product b where a.ProductTypeID=b.ProductTypeID";
     $re = mysql_query($str);
	echo "<table border=2><tr>";
	echo "<td>ProductTypeName</td>";
	echo "<td>ProductID</td>";
	echo "<td>Productname</td>";
	echo "<td>Amount</td>";
	echo "<td>Price</td></tr>";
        while ($s= mysql_fetch_array($re)) {
		echo "<tr>";
		echo "<td>".$s[0]."</td>";
		echo "<td>".$s[1]."</td>";
		echo "<td>".$s[2]."</td>";
		echo "<td>".$s[3]."</td>";
		echo "<td>".$s[4]."</td></tr>";
	}
	echo "<table>";
?>