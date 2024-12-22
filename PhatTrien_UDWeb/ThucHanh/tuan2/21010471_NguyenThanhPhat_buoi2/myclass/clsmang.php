<?php 
	class mang
	{
		public function nhapmang(&$m, $n)
		{
			for($i=0; $i<$n; $i++)
			{
				$m[$i]=	rand(0, 100);	
			}	
		}
		
		public function xuatmang(&$m, $n)
		{
			for($i=0; $i<$n; $i++)
			{
				echo '<div id="vung">'.$m[$i].'</div>';
			}		
		}
	}

?>