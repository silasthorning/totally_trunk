<?php
	$m = $_GET['m'];
	
	//////////////////////
	/// LOGIN & LOGUD ///
	if($m == 'logud')
	{
		session_destroy();
		header('Location: index.php');
	}
	if($m == 'login')
	{
		include('login.php');	
	}
	
	/////////////
	/// SHOP ///
	if($m == 'shop')
	{
		echo '<article>
				<p class="text-center">
					Webshoppen er under ombygning
				</p>
			  </article>';
	}
	
	////////////////
	/// KONTAKT ///
	if($m == 'kontakt')
	{
		echo '<article>
				<p class="text-center">Kontakt</p>
			  </article>';	
	}
	
	//////////////
	/// MILJØ ///
	if($m == 'miljo')
	{
		echo '<article>
				<p class="text-center">Miljø</p>
			  </article>';	
	}
	
	/////////////////
	/// POLITISK ///
	if($m == 'politisk')
	{
		echo '<article>
				<p class="text-center">Politisk</p>
			  </article>';	
	}
	
	//////////////////////
	/// ARBEJDS PLADS ///
	if($m == 'arbejdsplads')
	{
		echo '<article>
				<p class="text-center">Arbejds Plads</p>
			  </article>';	
	}
	
	
?>