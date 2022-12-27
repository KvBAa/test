<?php
	$tabela = "ksiazki";
	$tabela1 = "autorzy";
	$zapytanie1 ="SELECT * FROM $tabela1;";
	$zapytanie="SELECT * FROM $tabela;";
	$wynik=mysqli_query($sql,$zapytanie);
	$wynik1 =mysqli_query($sql,$zapytanie1);
	$row1 = mysqli_fetch_array($wynik1);
	while($row = mysqli_fetch_array($wynik))
	{
		echo "<div>
			  <form method='post' action=''>
			  <input type='hidden' name='code' value=".$row['id_ksiazki']." />
			  <div>".$row['tytul']."</div>
		   	  <div>$".$row['cena']."</div>
			  <button type='submit' class='buy'>Buy Now</button>
			  </form>
		   	  </div>";
    }
	echo "<tr><td><input type=\"submit\" value=\"Powrót\"></tr></td>";
	echo "</table>";
?>