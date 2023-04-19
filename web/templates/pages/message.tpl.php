        <?php if(isset($uzenet)) { ?>
            <h3><?= $uzenet ?></h3>
			<p>Név: <?= $name ?></p>
			
			<p>E-mail: <?= $email ?></p>
			
			<?php 
			// Replace newline characters with <br> tags
			$message = nl2br($message);
			?>
			
					
			<label for="message">Üzenet:</label>
			<p><?php echo $message; ?></p><br>
			
			<a href="index.php?oldal=uzenetek">Ugrás az üzenetekre!</a>

            <?php if($ujra) { ?>
                <a href="index.php?oldal=kapcsolat">Próbálja újra!</a>
            <?php } ?>
        <?php } ?>