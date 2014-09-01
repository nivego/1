<table>
<?php

$badana=200;
$granica=300;
for ($badana;$badana<$granica;$badana++)
{
echo'<tr>';
	echo '<td>n: '.$badana.'</td>';
	$przypuszczona=round(pow($badana,M_PI));
	echo '<td>przypuszczona: '.$przypuszczona.'</td>';
	
	
	
	$min=$przypuszczona-$badana;
	echo '<td>min: '.$min.'</td>';
	$max=$przypuszczona+$badana;
	echo '<td>max: '.$max.'</td>';
	
	
	
	
	
	while($min<$max)
	{
	$dzielnik=2;
	$i=0;
	#sprawdzenie liczby pierwszej=================
	
	
		/**
		* Checks the odd numbers. If any of them is a factor, then it returns false.
		* The sqrt can be an aproximation, hence just for the sake of
		* security, one rounds it to the next highest integer value.
		*/
		for($min; $dzielnik<$max; $dzielnik++) {
			if($min % $dzielnik === 0)
				$i=$i+1;
				if ($i===2)
				{
				break;
				}
				
		}
		
		if ($i===1)
		{
		echo '<td>P='.$min.'</td>';

		#zakomentowac break to pokaze wszystkie pierwsze w zakresie
		break;
		}
	
	#=============================================	
	$min++;
	}
echo'</tr>';

}
?>
</table>