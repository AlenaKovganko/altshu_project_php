<!DOCTYPE html>
<html>

<body>
    <h3> Задание 1 </h3>
    <h4> Выведите на странице названия всех ЯП и веб-технологии, которые вы изучили  </h4>
    <?php 
    echo "HTML, CSS, java-script";
    ?>
    <h3> Задание 2 </h3>
    <h4> На языке PHP создайте массив из 5 студентов вашей группы и перебором запишите их в нумерованный список  </h4>
    
    <?php

    $list = ["katena_popovich",
    "степан-Белогай",
       "Natalia_Zelenii",
       "Катерина Сергеенко",
       "Katerina_style",
       ];
       echo '<ol>';
      foreach ($list as $value) {
        echo '<li>';
		echo $value;
        echo "</li>";
       }
        echo '</ol>';
   
    ?>
	<h3> Задание 3 </h3>
    <h4> Создайте 6 переменных, запишите в них 6 различных арифметических выражений и выведите их  </h4>
    
    <?php

    $x = 1;
    $y = 2;
    $z = 3;
    $x1 = 4;
    $y1 = 5;
    $z1 = 6;
    $result1 = $x + $x1;
    echo    $x , " + " , $x1 , " = ", $result1  ;
    echo "<br />";
    $result2 = $y - $y1;
    echo   $y , " - " , $y1, " = " , $result2 ;
    echo "<br />";
    $result3 = $z / $z1;
    echo  $z , " / " , $z1 , " = " , $result3;
    echo "<br />";
     $result4 = $z ** $y;
    echo   $z , " ** " , $y , " = " , $result4  ;
    echo "<br />";
     $result5 = $z1 % $x1;
    echo   $z1 , " % " , $x1 , " = " , $result5  ;
    echo "<br />";
      $result6 = $y1 * $x1;
    echo   $y1 , " * " , $x1 , " = " , $result6  ;
    echo "<br />";
	?>
	<h3> Задание 4 </h3>
    <h4>  Присвойте переменным $first и $second значения 1 и 2 соответственно. Поменяйте значения переменных так, чтобы первая переменная приняла значение второй, а вторая — первой. </h4>
    <?php
	$first = "1";
	$second = "2";
    $transfer = $first;
    $first = $second;
    $second = $transfer;
    echo "после смены значений";
    echo "<br/ >";
    echo "Переменная first - " . "$first";
    echo "<br/ >";
    echo "Переменная second - " . "$second";
   

    

    ?>
	 <h3> Задание 5 </h3>
    <h4> Напишите условие, которое будет проверять, чётное ли значение в него передали, или нечетное </h4>
    
    <?php

    $number =  rand(1,100);
    echo "рандомное число {$number}";
    echo "<br/>";
        if ($number % 2 == 0) {
        echo "четное значение";
        }  else {
        echo "нечетное значение";
        };   
    ?>
	<h3> Задание 6 </h3>
    <h4>  Создайте массив с тремя уровнями вложенности. После создания массива добавьте новые элементы на самом глубоком уровне вложенности отдельным выражением. </h4>
    <?php


    $arrayNumbers  = [[1, 2], [3, 4], [5, 6, [7, 8]]];
    echo "первоначальный массив";
    echo "<br/ >";
    var_dump($arrayNumbers);
    echo "<br/ >";
    $arrayNumbers [3][3][] = 9;
    echo "массив после добавления элемента";
    echo "<br/ >";
    var_dump($arrayNumbers);

    ?>

	<h3> Задание 7 </h3>
    <h4> С помощью цикла while создайте массив, содержащий чётные числа от 245 до 287. Затем выведите элементы массива с помощью цикла foreach </h4>
    <?php

    $array = [];
    $i = 246;
    while ($i < 287) {
        if ($i % 2 == 0) {
            $array[] = $i;
            $i++;
        }
        $i++;
    }
    foreach ($array as $value) {
        echo ($value);
        echo ('<br/ >');
    }

    ?>

</body>

</html>