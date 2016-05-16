    <?php
    $destinataire = 'moi@moi.tld';
    $message_envoye = "Votre message nous est bien parvenu !";
    $message_non_envoye = "L'envoi du mail a échoué, veuillez réessayer SVP.";

    	$nom     = (isset($_POST['nom']))     ? Rec($_POST['nom'])     : '';
    	$email   = (isset($_POST['email']))   ? Rec($_POST['email'])   : '';
    	$objet   = (isset($_POST['objet']))   ? Rec($_POST['objet'])   : '';
    	$message = (isset($_POST['message'])) ? Rec($_POST['message']) : '';
     
    	if (($nom != '') && ($email != '') && ($objet != '') && ($message != ''))
    	{
    		$headers  = 'MIME-Version: 1.0' . "\r\n";
    		$headers .= 'From:'.$nom.' <'.$email.'>' . "\r\n" .
    				'Reply-To:'.$email. "\r\n" .
    				'Content-Type: text/plain; charset="utf-8"; DelSp="Yes"; format=flowed '."\r\n" .
    				'Content-Disposition: inline'. "\r\n" .
    				'Content-Transfer-Encoding: 7bit'." \r\n" .
    				'X-Mailer:PHP/'.phpversion();
    	
    	
    		// Remplacement de certains caractères spéciaux
    		$message = str_replace("&#039;","'",$message);
    		$message = str_replace("&#8217;","'",$message);
    		$message = str_replace("&quot;",'"',$message);
    		$message = str_replace('<br>','',$message);
    		$message = str_replace('<br />','',$message);
    		$message = str_replace("&lt;","<",$message);
    		$message = str_replace("&gt;",">",$message);
    		$message = str_replace("&amp;","&",$message);
     
    	
    		$num_emails = 0;
    		$tmp = explode(';', $cible);
    		foreach($tmp as $email_destinataire)
    		{
    			if (mail($email_destinataire, $objet, $message, $headers))
    				$num_emails++;
    		}
     
    		
    	};
    }; // fin du if (!isset($_POST['envoi']))
    ?>