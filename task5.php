<?php include 'header.php' ?>
	  <div id="txt" class="col-sm-8">
		<div class="col-sm-12">
			<h3>Завдання 5:</h3>
			<div>
				<p>Задано текст. Словом вважається послідовність непробільний символів, які йдуть підряд. Слова розділені одним або більшим числом пробілів або символами кінця рядка. Для кожного слова з цього тексту підрахуйте, скільки разів воно зустрічалося в цьому тексті раніше. Використайте словники.</p>
				<b>Приклад:</b>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Ввід</th>
            <th>Вивід</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>one two one two three</td>
            <td>0 0 1 1 0</td>
        </tr>
        <tr>
            <td>She sells sea shells on the sea shore;<br>
            The shells that she sells are sea shells I'm sure.<br>
            So if she sells sea shells on the sea shore,<br>
            I'm sure that the shells are sea shore shells.<br>
            </td>
            <td>0 0 0 0 0 0 1 0 0 1 0 0 1 0 2 2 0 0 0 0 1 2 3 3 1 1 4 0 1 0 1 2 4 1 5 0 0</td>
        </tr>
    </tbody>
</table>
			</div>
			<fieldset>
				<legend>Форма завдання 5:</legend>
				<form role="form" method="POST" action="">
					<div class="form-group">
						<label for="EnterNumber">Введіть текст:</label>
						<input type="text" id="EnterNumber" name="EnterNumber" class="form-control" placeholder="Введіть текст">
					</div>
					<div class="form-group">
						<input type="submit" value="Створити">
					</div>
				
				<?php
					echo '<pre>';
$originalText=$_POST['EnterNumber'];
					
					$word = str_word_count( $originalText, 1 );
					foreach ( $word as $key => $nextWord ) {
						$wordCoun = -1;
						foreach ( $word as $keys => $poperWord ) {
							if ( $poperWord == $nextWord )
								$wordCoun++;
							if ( $keys == $key )
								break;
						}

						echo $wordCoun . ' ';

					}

					echo '</pre>';

				?>
				
						<div id="result" class="form-group"></div>
				</form>
			</fieldset>		
		</div>
	  </div>
	</div>
</div>
<?php include 'footer.php' ?>
