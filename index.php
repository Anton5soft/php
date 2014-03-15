<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
    <title>Bootstrap 101 Шаблон</title>
    <!-- Bootstrap -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/myscripts.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>

<h1>Привет! Я Bootstrap...</h1>
<form name="form" action="" method="post" >
   <input type="text" name="number" id="number" value=""  class="inputs" ><br/>
    <input type="text" name="number1" id="number1" value=""  class="inputs" ><br/>
   <input type="text" name="number2" id="number2" value="" class="inputs"  ><br/>
    <input type="text" name="number3" id="number3" value="" class="inputs"><br/>
   <input type="text" name="number4" id="number4" value="" class="inputs" ><br/>

    <input type="text" name="number5" id="number5" value="" class="inputs" ><br/>
    <input type="text" name="number6" id="number6" value="" class="inputs" ><br/>
    <input type="text" name="number7" id="number7" value="" class="inputs" ><br/>
   <input type="text" name="number8" id="number8" value="" class="inputs" ><br/>
    <input type="text" name="number9" id="number9" value="" class="inputs" ><br/>
   <input type="text" name="number10" id="number10" value="" class="inputs" ><br/>

    <p><input type="submit" class="subm" /></p>

</form>








<?php
echo 'Массив полученый из POST <br />';
print_r($_POST);





$b = array_values($_POST);
function bubble_sort(&$arr) {
    $mem_start = memory_get_usage();
    $start = microtime(true);
    $t = true;
    while ($t) {
        $t = false;
        for ($i = 0; $i < count($arr) - 1; $i++) {
            if ($arr[$i] > $arr[$i + 1]) {
                $temp = $arr[$i + 1];
                $arr[$i + 1] = $arr[$i];
                $arr[$i] = $temp;
                $t = true;
            }
        }
    }
    echo 'Память которую потребляет функция ';
    echo memory_get_usage() - $mem_start;
    echo '<br />';
    echo 'Время которое потребляет функция ';
    echo microtime(true) - $start;
    echo '<br />';

}
echo '<br />';
echo '<strong>Сортировка пузырьком</strong> <br />';

bubble_sort($b);

print_r($b);
function insertion_sort(&$a) {

    $start = microtime(true);
    $mem_start = memory_get_usage();
// для каждого $a[$i] начиная со второго элемента...
    for ($i = 1; $i < count($a); $i++) {
        $x = $a[$i];
        for ($j = $i - 1; $j >= 0 && $a[$j] > $x; $j--) {
            /* сдвигаем элементы вправо, пока выполняется условие
            $a[$j] > $a[$i] */
            $a[$j + 1] = $a[$j];
        }
// на оставшееся после сдвига место, ставим $a[$i]
        $a[$j + 1] = $x;
    }

    echo 'Память которую потребляет функция ';
    echo memory_get_usage() - $mem_start;
    echo '<br />';
    echo 'Время которое потребляет функция ';
    echo microtime(true) - $start;
    echo '<br />';
}
echo '<br />';
echo '<strong>Сортировка вставкой</strong> <br />';
insertion_sort($b);
print_r($b);



// сортировка шела

function ShellSort($elements,$length) {

    $start = microtime(true);
    $mem_start = memory_get_usage();
    $k=0;
    $gap[0] = (int) ($length / 2);

    while($gap[$k] > 1) {
        $k++;
        $gap[$k]= (int)($gap[$k-1] / 2);
    }//end while

    for($i = 0; $i <= $k; $i++){
        $step=$gap[$i];

        for($j = $step; $j < $length; $j++) {
            $temp = $elements[$j];
            $p = $j - $step;
            while($p >= 0 && $temp < $elements[$p]) {
                $elements[$p + $step] = $elements[$p];
                $p= $p - $step;
            }//end while
            $elements[$p + $step] = $temp;
        }//endfor j
    }//endfor i

    echo 'Память которую потребляет функция ';
    echo memory_get_usage() - $mem_start;
    echo '<br />';
    echo 'Время которое потребляет функция ';
    echo microtime(true) - $start;
    echo '<br />';
    return $elements;

}// end function
echo '<br />';
echo '<strong>Сортировка шела</strong> <br />';
ShellSort($b);
print_r($b);


// Exmaple
// $SortedElements=shellsort($UnsortedElements,length of list(an integer));
// e.g: $elements=shellsort($elements,10);



//быстрая сортировка
function quicksort (&$array, $l=0, $r=0) {
    $start = microtime(true);
    $mem_start = memory_get_usage();

    if($r === 0) $r = count($array)-1;
    $i = $l;
    $j = $r;
    $x = $array[($l + $r) / 2];
    do {
        while ($array[$i] < $x) $i++;
        while ($array[$j] > $x) $j--;
        if ($i <= $j) {
            if ($array[$i] > $array[$j])
                list($array[$i], $array[$j]) = array($array[$j], $array[$i]);
            $i++;
            $j--;
        }
    } while ($i <= $j);
    if ($i < $r) quicksort ($array, $i, $r);
    if ($j > $l) quicksort ($array, $l, $j);

    echo 'Память которую потребляет функция ';
    echo memory_get_usage() - $mem_start;
    echo '<br />';
    echo 'Время которое потребляет функция ';
    echo microtime(true) - $start;
    echo '<br />';
}
echo '<br />';
echo '<strong>Бысстрая сортировка</strong> <br />';
quicksort($b);
print_r($b);
//вывод значений array_values
//округление round()
//деление памяти почему выводит везде одинаково?
//$memory = (!function_exists('memory_get_usage')) ? '' : round(memory_get_usage()/1024/1024, 2) . 'MB';
//echo $memory;
?>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>



