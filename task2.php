<?php include 'header.php'?>
	  <div class="col-sm-8">
		<div class="col-sm-12">
			<h3>Завдання 2:</h3>
			<div>
				У форму вводиться текст, слова в якому розділені пробілами і розділовими знаками. Вилучити з цього тексту всі слова найбільшої довжини. (Слів найбільшої довжини може бути декілька).
			</div>
			<fieldset>
			<legend>Форма завдання 2:</legend>
			<form method="post" action="" role="form">
				<div class="form-group">
					<label for="num">Введіть текст:</label>
					<input type="text" name="num" id="num" class="form-control" placeholder="Введіть текст">
				</div>
				<div class="form-group">
					<input type="submit" value="Результат">
				</div>
			</form>
			</fieldset>
		<p>
		<?php 
			$n=$_POST['num'];
			$str = preg_split('/[\s,]+/', $n);
			$y=0;

			foreach ($str as $value)
			{
				$x=strlen($value);
				if ($y<$x){        
					$y=$x;        
				}
				
			}

			foreach ($str as $value)
			{
				if ($y==strlen($value)){
					$n=str_replace($value,'',$n);
					
				}
			}
			echo "<b>$n";
		?></p>
			
		</div>
	  </div>
	</div>
</div> 
<?php include 'footer.php' ?>