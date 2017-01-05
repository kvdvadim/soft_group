<?php include 'header.php' ?>
	  <div class="col-sm-8">
		<div class="col-sm-12">
			<h3>Завдання 1:</h3>
			<div>
				У форму вводиться число N. Знайти всі досконалі числа до N. Досконале число - це таке число, що дорівнює сумі всіх своїх дільників, крім себе самого. Наприклад, число 6 є досконалим, тому що крім себе самого ділиться на числа 1, 2 і 3, які в сумі дають 6.
			</div>
			<fieldset>
				<legend>Форма завдання 1:</legend>
				<form role="form" method="post" action="">
					<div class="form-group">
						<label for="intN">Число N:</label>
						<input type="number" id="intN" name="num" class="form-control" placeholder="Введіть довільне число">
					</div>
					<div class="form-group">
						<input type="submit" value="Результат" >
					</div>
					<div class="form-group">
						<label for="result">Результат:</label>
						<p>
						<?php 
							$n=$_POST['num'];



   for ($i=1; $i<$n; $i++)
   {     
       
    for ($j=1, $d=0; $j<$i; $j++)

    {        
        $r=fmod($i, $j);
        if ($r==0) { $d=$d+$j; }
         
    }  
    if ($i==$d){
     echo $d.'<br>';
        }
   }

								   
						?></p>
					</div>
					
				</form>
			</fieldset>
		</div>
	  </div>
	</div>
</div> 
<?php include 'footer.php' ?>