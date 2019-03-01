<?php
$sozdik_words = file('all_words.txt', FILE_IGNORE_NEW_LINES);
        foreach ($sozdik_words as $key => $value) {
            $sozdik_words[$key] = str_replace('N;', '', $sozdik_words[$key]);
            $sozdik_words[$key] = str_replace('V;', '', $sozdik_words[$key]);
            $sozdik_words[$key] = str_replace('A;', '', $sozdik_words[$key]);
            $sozdik_words[$key] = trim($sozdik_words[$key]);
        }
$str = implode("\n", $sozdik_words);
file_put_contents('words.txt', $str);
?>
<!-- <?php

?> -->