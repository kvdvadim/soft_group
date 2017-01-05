<?php include 'header.php'?>
	  <div class="col-sm-8">
		<div class="col-sm-12">
			<h3>Завдання 4:</h3>
			<div id="txt">
				Політичне життя однієї країни дуже жваве. У країні діє quantity політичних партій, кожна з яких регулярно оголошує національний страйк. Дні, коли хоча б одна з партій оголошує страйк, за умови, що це не субота або неділя (коли і так ніхто не працює), завдають великої шкоди економіці країни. i-та партія оголошує страйки строго кожні bi днів, починаючи з дня з номером ai. Тобто i-та партія оголошує страйки в дні ai, ai + bi, ai + 2bi і т.д. Якщо в якийсь день кілька партій оголошує страйк, то це вважається загальнонаціональним страйком. У календарі країни N днів, пронумерованих від 1 до N. Перший день року є понеділком, шостий і сьомий дні року - вихідні, тиждень складається з семи днів.
			</div>
			<fieldset>
				<legend>Форма завдання 4:</legend>
				<form role="form"    method="post" action=""  >
					<div class="form-group">
						<label for="quantity">Введіть кількість політичних партій більше 1, менше 100:</label>
						<input type="text" id="quantity" required name="quantity" class="form-control" placeholder="Введіть к-сть партій"/>
					</div>
					<div class="form-group">
						<input type="submit" value="Створити">
					</div>
				
				<?php 
					$quantity = $_POST['quantity'];
				 
					printf ("<div class='form-group'>
						<label for='N'>Введіть кількість днів у році більше 1, менше 1 000 000:</label>
						<input type='text' id='N' name='N' class='form-control' placeholder='Введіть к-сть днів'>
					");				 
				for ($y=1; $y<$quantity+1;$y++){
						printf ("<label for='StartStrike$y'> Перший день страйку $y партії: </label>
						<input required type='text' id='StartStrike$y' name='StartStrike$y' class='form-control'></br>
						<label for='PeriodStrike$y'> Введіть частоту страйків $y партії: </label>
						<input required type='text' id='PeriodStrike$y' name='PeriodStrike$y' class='form-control'></br>");
						
					}
					printf ("</div>
						<input type='submit' id='result' name='result' onclicquantity='result' value='Результат'>");
$y=1;	
$aarray = array();	
$barray = array();	
while ($y<=$quantity){
$a=$_POST["StartStrike$y"];
$quantity = $_POST['quantity'];
$b=$_POST["PeriodStrike$y"];
$aarray[] = $a;
$barray[] = $b;
$y++;
}
  $DayToYears = $_POST["N"];   
    $Allstrike = 0;
$g = 0;
    
    foreach ($aarray as $keys => $value) {
        $strike = $value;
        $weekend = 7;
		$part=$keys + 1;
        echo "Політична партія  $part проводить страйки - ";
        for ($j = 1; $j <= $DayToYears; $j++) {
            if ($strike == $j) {                
                if (($weekend != $j) && (($weekend - 1) != $j)) {
                    echo ' ' . $strike;
                    $Allstrike++;                }
                if (($weekend - 1) == $j) 
                    echo '<b> (' . $strike . ' Сб)</b>';
                if ($weekend == $j)
                    echo '<b> (' . $strike . ' Нд)</b>';                
                $strike += $barray[$g];
            }            
            if ($weekend == $j)
                $weekend += 7;
        }
        $g++;
        echo '<br>';
    }
    echo "Всього страйків за рік -  $Allstrike";
?>	
				</form>
			</fieldset>		
		</div>
	  </div>
	</div>
</div> 
<?php include 'footer.php'?>