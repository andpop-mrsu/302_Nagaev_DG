<?php

namespace Danil\Task05;

function runTest()
{
    $truncater = new Truncater();
    echo $truncater->truncate('Длинный текст', ['length' => 5 ]) . PHP_EOL;
    echo $truncater->truncate('') . PHP_EOL;
    echo $truncater->truncate('Нагаев Данила Геннадьевич') . PHP_EOL;
    echo $truncater->truncate('Нагаев Данила Геннадьевич', ['length' => 10]) . PHP_EOL;
    echo $truncater->truncate('Нагаев Данила Геннадьевич', ['length' => 50]) . PHP_EOL;
    echo $truncater->truncate('Нагаев Данила Геннадьевич', ['length' => -10]) . PHP_EOL;
    echo $truncater->truncate('Нагаев Данила Геннадьевич', ['length' => 10, 'separator' => '*']) . PHP_EOL;
    echo $truncater->truncate('Нагаев Данила Геннадьевич', ['separator' => '*']) . PHP_EOL;
}
