<?php include 'header.php' ?>
	  <div id="accordion" class="col-sm-8 panel-group">
		<div class="col-xs-12 panel panel-default">
			<div class="panel-heading">
				<center>
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Завдання 1</a>
					</h4>
				</center>
			</div>
			<div class="panel-collapse collapse in" id="collapse1">
				<div class="panel-body">
					У форму вводиться число N. Знайти всі досконалі числа до N. Досконале число - це таке число, що дорівнює сумі всіх своїх дільників, крім себе самого. Наприклад, число 6 є досконалим, тому що крім себе самого ділиться на числа 1, 2 і 3, які в сумі дають 6.
				</div>
			</div>
		</div>
		<div class="col-xs-12 panel panel-default">
			<div class="panel-heading">
				<center>
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Завдання 2</a>
					</h4>
				</center>
			</div>
			<div class="panel-collapse collapse" id="collapse2">
				<div class="panel-body">
					У   форму   вводиться   текст,   слова   в   якому   розділені   пробілами   і   розділовими   знаками. Вилучити з цього тексту всі слова найбільшої довжини. (Слів найбільшої довжини може бути декілька).
				</div>
			</div>
		</div>
		<div class="col-xs-12 panel panel-default">
			<div class="panel-heading">
				<center>
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Завдання 3</a>
					</h4>
				</center>
			</div>
			<div class="panel-collapse collapse" id="collapse3">
				<div class="panel-body">
					Вводяться N натуральних чисел більше 2. Підрахувати, скільки серед них простих чисел.
				</div>
			</div>
		</div>
		<div class="col-xs-12 panel panel-default">
			<div class="panel-heading">
				<center>
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Завдання 4</a>
					</h4>
				</center>
			</div>
			<div class="panel-collapse collapse" id="collapse4">
				<div class="panel-body">
					Політичне життя однієї країни дуже жваве. У країні діє K політичних партій, кожна з яких
					регулярно оголошує національний страйк. Дні, коли хоча б одна з партій оголошує страйк, за
					умови, що це не субота або неділя (коли і так ніхто не працює), завдають великої шкоди
					економіці країни.
					i-та партія оголошує страйки строго кожні bi днів, починаючи з дня з номером ai. Тобто i-та
					партія оголошує страйки в дні ai, ai + bi, ai + 2bi і т.д. Якщо в якийсь день кілька партій
					оголошує страйк, то це вважається загальнонаціональним страйком.
					У календарі країни N днів, пронумерованих від 1 до N. Перший день року є понеділком,
					шостий і сьомий дні року - вихідні, тиждень складається з семи днів. </br>
					Вхідні дані </br>
					Програма отримує на вхід число днів в році N (1 менше N менше 1000000) і число політичних партій K
					(1 менше K менше 100). Далі йде K рядків, що описують графіки проведення страйків. i-й рядок містить
					числа ai і bi (1 менше ai,bi менше N). </br>
					Вихідні дані </br>
					Виведіть єдине число: кількість страйків, що відбулися протягом року. </br>
					Примітка </br>
					Перша партія оголошує страйки в дні 2, 5, 8, 11, 14, 17. Друга партія оголошує страйки в дні
					3, 8, 13, 18. Третя партія - в дні 9 і 17. Дні номер 6, 7, 13, 14 є вихідними. Таким чином,
					загальнонаціональні страйки пройдуть в дні 2, 3, 5, 8, 9, 11, 17, 18.
				</div>
			</div>
		</div>
		<div class="col-xs-12 panel panel-default">
			<div class="panel-heading">
				<center>
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Завдання 5</a>
					</h4>
				</center>
			</div>
			<div class="panel-collapse collapse" id="collapse5">
				<div class="panel-body">
					Задано   текст.   Словом   вважається   послідовність   непробільний   символів,   які   йдуть   підряд.
					Слова розділені одним або більшим числом пробілів або символами кінця рядка.
					Для кожного слова з цього тексту підрахуйте, скільки разів воно зустрічалося в цьому тексті
					раніше. Використайте словники. </br>
					Приклад: </br>
					<table>
						<tr><th>Ввід</th><th>Вивід</th></tr>
						<tr><td>one two one two three</td><td>0 0 1 1 0</td></tr>
						<tr><td>She sells sea shells on the sea shore; The shells that she sells are sea shells I'm sure. So if she sells sea shells on the sea shore, I'm sure that the shells are sea shore shells.</td><td>0 0 0 0 0 0 1 0 0 1 0 0 1 0 2 2 0 0 0 0 1 2 3 3 1 1 4 0 1 0 1 2 4 1 5 0 0</td></tr>
					</table>
				</div>
			</div>
		</div>
		<div class="col-xs-12 panel panel-default">
			<div class="panel-heading">
				<center>
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Завдання 6</a>
					</h4>
				</center>
			</div>
			<div class="panel-collapse collapse" id="collapse6">
				<div class="panel-body">
					Змагання з гри «Тетріс-онлайн» проводяться за такими правилами:
					Кожен   учасник   реєструється   на   сайті   гри   під   певним   ігровим   ім'ям.   Імена   учасників   не
					повторюються.
					Чемпіонат проводиться протягом певного часу. У будь-який момент цього часу будь-який
					зареєстрований   учасник   може   зайти   на   сайт   чемпіонату   і   почати   залікову   гру.   Після
					закінчення гри її результат (кількість балів) фіксується і заноситься до протоколу.
					Учасники мають право грати кілька разів. Кількість спроб одного учасника не обмежується.
					Остаточний   результат   учасника   визначається   по   одній   грі,   кращою   для   даного   учасника.
					Більш   високе   місце   в   змаганнях   займає   учасник,   що   показав   кращий   результат.
					При   рівності   результатів   більш   високе   місце   займає   учасник,   раніше   показав   кращий
					результат.
					В ході змагань заповнюється протокол, кожен рядок якого описує одну гру і містить результат
					учасника   і   його   ігрове   ім'я.   Протокол   формується   в   реальному   часі   по   ходу   проведення
					чемпіонату,   тому   рядки   в   ньому   розташовані   в   порядку   проведення   ігор:   чим   раніше
					зустрічається рядок у протоколі, тим раніше закінчилася відповідна цьому рядку гра.
					Напишіть програму, яка за даними протоколу визначає переможця і призерів. Гарантується,
					що в чемпіонаті бере участь не менше трьох гравців. </br>
					Приклад: </br>
					Ввід </br>
					9 </br>
					69485 Jack </br>
					95715 qwerty </br>
					95715 Alex </br>
					83647 M </br>
					197128 qwerty </br>
					95715 Jack </br>
					93289 Alex </br>
					95715 Alex </br>
					95715 M </br>
					Вивід </br>
					1 місце. Qwerty (197128) </br>
					2 місце. Alex (95715) </br>
					3 місце. Jack (95715) </br>
				</div>
			</div>
		</div>
	  </div>
	</div>
</div>
 <?php include 'footer.php' ?>