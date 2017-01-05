<?php include'header.php'?>
	  <div class="col-sm-8">
		<div class="col-sm-12">
			<h3>Завдання 3:</h3>
			<div>
				Вводяться N натуральних чисел більше 2. Підрахувати, скільки серед них простих чисел.
			</div>
			<fieldset>
				<legend>Форма завдання 3:</legend>
				<form role="form">
					<div class="form-group">
						<label for="intN">Введіть натуральні числа через пробіли:</label>
						<input type="text" id="intN" name="intN" class="form-control" placeholder="Введіть довільні числа">
					</div>
					<div class="form-group">
						<input type="submit" value="Результат">
					</div>
					<div class="form-group">
						<label for="result">Результат:</label>
						<p>
							<?php

								// Рядок натуральних чисел введених через пробіл
								$naturalNumbersInput = $_GET['intN'];
							
								// Загальна кількість простих чисел
								$primeNumbersAmount = 0;

								// Отримання масиву натуральних чисел
								$naturalNumbersArray = str_getcsv($naturalNumbersInput, ' ');

								// Пошук простих чисел серед введених натуральних чисел
								foreach ($naturalNumbersArray as $naturalNumber) {

									// Встановлення початкового значення дільника
									$divisor = 1;

									// Перевірка відсутності інших дільників крім 1 і $naturalNumber
									while ($divisor < $naturalNumber) {
										$remainder = fmod($naturalNumber, $divisor);

										// Завершити перевірку, якщо присутній інший дільник
										if ($remainder == 0 && $divisor > 1)
											break;

										$divisor++;
									}

									// Збільшити кількість простих чисел на 1, якщо відсутні інші дільники
									if ($divisor == $naturalNumber) {
										echo $naturalNumber . ' ';
										$primeNumbersAmount++;
									}
								}
							//	echo '(' . $primeNumbersAmount . ')';
							?></p>
					</div>
					
				</form>
			</fieldset>		
		</div>
	  </div>
	</div>
</div>
<?php include'FOOTER.php'?>