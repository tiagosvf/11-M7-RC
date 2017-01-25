         if ( !is_numeric($_POST['tele']) & (!strlen($_POST['tele']) == 9) ) 
		{
            echo '<p class="erro">Insira um número de 9 digitos.</p>';
            $okay = FALSE;
		}