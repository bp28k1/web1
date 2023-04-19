<body>
<div class="container">
<h2 class="mt-2">Üzenet küldése</h2>
<div class="row">
<div class="col">
	<form id="messageForm" method="post" action="?oldal=message">

        <?php 
            if(isset($_SESSION['login'])) { 
            //echo "The login session variable is set.<br>";
            $default_name = $_SESSION['login']; // set a default value for the name field
            $default_name = $_SESSION['csn']." ".$_SESSION['un'];
        ?>
                <label for="name">Név:</label>
                <input type="text" id="name" name="name" value="<?= $default_name ?>" readonly><br>

        <?php } else {
            //echo "The login session variable is not set.<br>";
            $default_name = "Vendég"; // set a default value for the name field
            ?>
        <p>Név</p>
                <input type="text" id="name" name="name" value="<?= $default_name ?>" readonly><br>
        <?php }?>
        
        <p>E-mail</p>
		
		<input type="email" id="email" placeholder="e-mail" name="email"><br>
        
        <p>Üzenet</p>
		
		<textarea id="message" name="message" placeholder="üzenet maximum 500 karakter" maxlength="500"></textarea><br>

		<input type="submit" value="Küldés">
	</form>
    </div>
<div class="col">
    <img src="./images/kapcsolat.jpg">
</div>     
</body>
    
