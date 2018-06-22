
<html>
	<head>
		<title>PHP-1</title>
        <style>
            table { border-collapse: collapse; /* Убираем двойные линии между ячейками в таблице */
            width: 210px;
            margin: 5px; }
            td { vertical-align: middle;
                text-align: center;
                width: 70px}
        </style>
    </head>
	<body>
		<h1>PHP</h1>
		<h2>2 урок</h2>
        <h4>Домашняя работа</h4>
        <h5>1. Напишите программу, которая составит и выведет в браузер таблицу истинности для логических операторов &&, || и xor.</h5>



        <?php
        $a1 = false;    //Задаём переменные для первой строки таблиц
        $b1 = false;
        $a2 = true;     //Задаём переменные для второй строки таблиц
        $b2 = false;
        $a3 = false;    //Задаём переменные для третей строки таблиц
        $b3 = true;
        $a4 = true;     //Задаём переменные для второй строки таблиц
        $b4 = true;

        // Затем выводим таблицы истинности. (int) используется для отображения таблиц аналогично таблицам из Википедии, ссылка на которую есть в задании.
        ?>

        <table border=0 >
            <tr><td>
                    <table border=1>
                        Таблица 1</br> (Логическое "И" &&)
                        <tr><td> a</td><td> b</td><td> &&</td>
                        <tr><td> <?php echo (int)$a1?></td><td><?php echo (int)$b1?></td><td><?php echo (int)($a1&&$b1)?></td>
                        <tr><td> <?php echo (int)$a2?></td><td> <?php echo (int)$b2?></td><td><?php echo (int)($a2&&$b2)?></td>
                        <tr><td> <?php echo (int)$a3?></td><td> <?php echo (int)$b3?></td><td><?php echo (int)($a3&&$b3)?></td>
                        <tr><td> <?php echo (int)$a4?></td><td> <?php echo (int)$b4?></td><td><?php echo (int)($a4&&$b4)?></td>
                    </table>

                <td><td><td><table border=1>
                        Таблица 2</br> (Логическое "ИЛИ" ||)
                        <tr><td> a</td><td> b</td><td> ||</td>
                        <tr><td> <?php echo (int)$a1?></td><td><?php echo (int)$b1?></td><td><?php echo (int)($a1||$b1)?></td>
                        <tr><td> <?php echo (int)$a2?></td><td> <?php echo (int)$b2?></td><td><?php echo (int)($a2||$b2)?></td>
                        <tr><td> <?php echo (int)$a3?></td><td> <?php echo (int)$b3?></td><td><?php echo (int)($a3||$b3)?></td>
                        <tr><td> <?php echo (int)$a4?></td><td> <?php echo (int)$b4?></td><td><?php echo (int)($a4||$b4)?></td>
                    </table>

                <td><td><td><table border=1>
                        Таблица 3</br> (Исключающее "ИЛИ" XOR)
                        <tr><td> a</td><td> b</td><td>xor</td>
                        <tr><td> <?php echo (int)$a1?></td><td><?php echo (int)$b1?></td><td><?php echo (int)$c=($a1 xor $b1)?></td>
                        <tr><td> <?php echo (int)$a2?></td><td> <?php echo (int)$b2?></td><td><?php echo (int)$c=($a2 xor $b2)?></td>
                        <tr><td> <?php echo (int)$a3?></td><td> <?php echo (int)$b3?></td><td><?php echo (int)$c=($a3 xor $b3)?></td>
                        <tr><td> <?php echo (int)$a4?></td><td> <?php echo (int)$b4?></td><td><?php echo (int)$c=($a4 xor $b4)?></td>
                    </table>

        </table>
        <br><br>

        <h5>2. Составьте функцию вычисления дискриминанта квадратного уравнения. Покройте ее тестами.
            Используя эту функцию, напишите программу, которая решает квадратное уравнение. Оформите красивый вывод решения.</h5>

        <?php

        //Задаём переменные
        $aa = 2;
        $bb = 5;
        $cc = 2;

        $result = D($aa, $bb, $cc);

        //Функция вычисления дискрименанта
        //  const A = 2

        function D($aa, $bb, $cc) {

            return $d = $bb ** 2 - 4 * $aa * $cc;
        }

        // Тестируем фунцкию дискриминанта
        assert(-3 == D(1, 1, 1));
        assert(0 == D(0, 0, 1));
        assert(0 == D(1, 2, 1));
        assert(9 == D(2, 5, 2));
        assert(0 == D(2, 4, 2));

        ?>

        <p>Решаем квадратное уравнение a*x<sup>2</sup> + b*x + c = 0</p>
        <p>Где a =<?php echo $aa ?> ; b = <?php echo $bb ?>; c = <?php echo $cc ?></p>

        <p><?php echo $aa ?> * x<sup>2</sup> + <?php echo $bb ?> * x + <?php echo $cc ?> = 0</p>

        <p>Находим дискриминант (по формуле D = b<sup>2</sup> - 4*a*c) : D = <?php echo D($aa,$bb,$cc) ?></p>

        <p>Находим корни квадратного уравнения</p>
        <?php
        if (D($aa, $bb, $cc) > 0){

            $xx1 = ((-$bb+sqrt(D($aa, $bb, $cc)))/2*$aa);
            $xx2 = ((-$bb-sqrt(D($aa, $bb, $cc)))/2*$aa);
            echo 'Дискриминант больше нуля, значит уравнение имеет два корня: <br> 1) x1 = '. $xx1 .'<br>2) x2 = ' . $xx2;
        }
        elseif (D($aa, $bb, $cc) == 0){

            $xx1 = ((-$bb+sqrt(D($aa, $bb, $cc)))/2*$aa);
            echo 'Дискриминант равен нулю, значит уравнение имеет один корень: <br> 1) x = '. $xx1 ;
        }
        else {
            echo 'Дискриминант меньше нуля, значит уравнение не имеет корней';
        }

        ?>
        <h5>3. Проведите самостоятельное исследование на тему "Что возвращает оператор include, если его использовать как функцию?".
            Используйте руководство по языку, составьте и приложите примеры, иллюстрирующие ваше исследование.</h5>

        <i> include включает и выполняет указанный файл. Когда файл включается, его код наследует ту же область видимости переменных, что и строка, на которой произошло включение.
        Все переменные, доступные во включающем файле, будут доступны во включаемом файле. Но все функции и классы, объявленные во включаемом файле, имеют глобальную обсласть видимости.

        Оператор include возвращает значение False при ошибке и выдаёт предупреждение. Успешное включение, пока это не определено во включаемом файле, возвращают значение 1.
        </i><br><br>

        <?php

        var_dump(include(__DIR__ . '/inc2.php');
        echo ' Сегодня '.  $wether2 . ' и ' . $temperature2 ;

        ?>
        <br><i> Ещё пример:  </i><br>
        <?php

        $iinc = include(__DIR__ . '/inc2_1.php');
        var_dump($iinc);

        ?>

        <br><br><i> Если включение происходит внутри функции включающего файла, то весь код, содержащийся во включаемом файле, будет вести себя так, как будто он определён внутри этой функции.
            Исключением являются так называемые волшебные константы (например __DIR__)
        </i><br><br>

        <br><br><i> Ещё примеры:  </i><br><br>

        <?php
            include __DIR__ . '/inc3.php';
            echo ' хорошая погода';

       // Выведет Сегодня хорошая погода
        ?>

        <br><br><i> Все функции, определённые во включаемом файле будут доступны, даже если файл не выполняется: </i><br><br>
        <?php
        // Файл inc4.php содержит функцию
        include __DIR__ . '/inc4.php';
        func();
        // Выведет Сегодня хорошая погода
        ?>

        <h5>4. *Составьте функцию, которая на вход будет принимать имя человека, а возвращать его пол, пытаясь угадать по имени (null - если угадать не удалось).
            Вам придется самостоятельно найти нужные вам строковые функции. Начните с написания тестов для функции.</h5>

        <?php

        //Задаём имя на русском языке
        $name = 'Сергей'; //имя

        include_once __DIR__ . '/functions1.php'; //подключает файл с функцией определения пола по имени

        echo $name, SN($name);
       //var_dump(SN($name));

        ?>

	</body>
</html>