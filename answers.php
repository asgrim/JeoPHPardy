<?php
declare(strict_types=1);

$p = function (array $r) {
    array_walk(
        $r['categories'],
        function ($i) {
            echo '<h2>' . $i['name'] . '</h2>';
            array_walk(
                $i['questions'],
                function ($j) {
                    echo '<strong>' . $j['question'] . '</strong><br />';
                    echo $j['answer'] . '<br /><br />';
                }
            );
        }
    );
};

echo '<h1>ROUND ONE</h1><hr />';
$p(require 'round1.php');
echo '<h1>ROUND TWO</h1><hr />';
$p(require 'round2.php');
