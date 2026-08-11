<?php
$linguagens =["PHP", "java", "Python", "Javascript","C++"];
echo $linguagens[0] . "\n";
echo $linguagens[4] . "\n";
$linguagens[] = "C#";
echo $linguagens[1] . "\n";
echo "Quantidade: " .
count($linguagens);
