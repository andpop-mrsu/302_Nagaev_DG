<?php

/** Function for checking methods of the Vector class */
function run_test()
{
    $vector_1 = new Vector(6, 2, 8);
    echo 'Символьное представление 1-го вектора: ' . PHP_EOL;
    echo 'Ожидается: (6;2;8)' . PHP_EOL;
    echo 'Получено: ' . $vector_1 . PHP_EOL;

    $vector_2 = new Vector(-2, 3, 9);
    echo 'Символьное представление 1-го вектора: ' . PHP_EOL;
    echo 'Ожидается: (-2;3;9)' . PHP_EOL;
    echo 'Получено: ' . $vector_2 . PHP_EOL;

    $vector_3 = $vector_1->addVectors($vector_2);
    echo 'Сложение векторов: ' . PHP_EOL;
    echo 'Ожидается: (4;5;17)' . PHP_EOL;
    echo 'Получено: ' . $vector_3 . PHP_EOL;

    $vector_4 = $vector_1->subVectors($vector_2);
    echo 'Вычитание векторов: ' . PHP_EOL;
    echo 'Ожидается: (8;-1;-1)' . PHP_EOL;
    echo 'Получено: ' . $vector_4 . PHP_EOL;

    $number = 10;
    $vector_5 = $vector_1->product($number);
    echo 'Умножение вектора 1 на число 10: ' . PHP_EOL;
    echo 'Ожидается: (60;20;80)' . PHP_EOL;
    echo 'Получено: ' . $vector_5 . PHP_EOL;

    $number_scalar = $vector_1->scalarProduct($vector_2);
    echo 'Скалярное произведение векторов: ' . PHP_EOL;
    echo 'Ожидается: 66' . PHP_EOL;
    echo 'Получено: ' . $number_scalar . PHP_EOL;

    $vector_6 = $vector_1->vectorProduct($vector_2);
    echo 'Векторное произведение векторов: ' . PHP_EOL;
    echo 'Ожидается: (-6;-70;22)' . PHP_EOL;
    echo 'Получено: ' . $vector_6 . PHP_EOL;
}
