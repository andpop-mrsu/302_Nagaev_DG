<?php

function run_test()
{
    $book1 = new Book(
        "Berserk",
        array("Kentaro Miura"),
        "Dark Horse Comics",
        2009
    );
    $bookslist = new BooksList();
    $bookslist->add($book1);
    $bookslist->store('Books.txt');
    $book2 = new Book(
        "Программирование на C++",
        array("Нейл Дейл", "Марк Хедингтон", "Чип Уимз"),
        "ДМК Пресс",
        1989
    );
    $book3 = new Book(
        "Объектно-ориентированное программирование в С++",
        array("Лафоре Роберт"),
        "Питер",
        2012
    );
    $bookslist->add($book2);
    $bookslist->add($book3);
    echo "Ожидание:".PHP_EOL.
        "Id: 1".PHP_EOL.
        "Название: Berserk".PHP_EOL.
        "Автор 1: Kentaro Miura".PHP_EOL.
        "Издательство: Dark Horse Comics".PHP_EOL.
        "Год: 2009".PHP_EOL.
        "Id: 2".PHP_EOL.
        "Название: Программирование на C++".PHP_EOL.
        "Автор 1: Нейл Дейл".PHP_EOL.
        "Автор 2: Марк Хедингтон".PHP_EOL.
        "Автор 2: Чип Уимз".PHP_EOL.
        "Издательство: ДМК Пресс".PHP_EOL.
        "Год: 2011".PHP_EOL.
        "Id: 3".PHP_EOL.
        "Название: Объектно-ориентированное программирование в С++".PHP_EOL.
        "Автор 1: Лафоре Роберт".PHP_EOL.
        "Издательство: Питер".PHP_EOL.
        "Год: 2016".PHP_EOL.
        "Получено:".PHP_EOL;
    for ($i = 1; $i <= $bookslist->count(); $i++) {
        echo $bookslist->get($i)->__toString();
    }
    $bookslist->load('Books.txt');
    echo PHP_EOL."Ожидание:".PHP_EOL.
        "Id: 1".PHP_EOL.
        "Название: Berserk".PHP_EOL.
        "Автор 1: Kentaro Miura".PHP_EOL.
        "Издательство: Dark Horse Comics".PHP_EOL.
        "Год: 2009".PHP_EOL.
        "Получено:".PHP_EOL;
    for ($i = 1; $i <= $bookslist->count(); $i++) {
        echo $bookslist->get($i)->__toString();
    }
}
