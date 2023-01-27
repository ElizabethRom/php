<?php

include "function.php";

	if(empty($_POST) || in_array("mount",$_POST)){
?>	
	<h3 style = "text-align:center;">Форма ввода данных</h3>
	<form name='data' id='form1' method='post' >
		<p>
		<label>Ваше имя</label>
   		<input type='text' name='name' />
		</p>
		<p>
		<label>Ваш телефон</label>
        <input type='text' name='phone'/>
		</p>
		<p>
			<label>Ваши интересы</label>
        	<select name='int'>
			<option>ничего не делать</option>
			<option>ничего не делать</option>
			</select>
		</p>
		<input class='button' name='btn' type='submit' value='отправить'>
	</form>
<?php
}else p($_POST, 1);
?>

		 
		 
		
		





