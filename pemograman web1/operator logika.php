<?php
// Deklarasi variabel
$a = true;
$b = false;

// Operator AND (&& atau and)
$andResult = $a && $b;
echo "Hasil dari \$a AND \$b (true && false) = " . ($andResult ? 'true' : 'false') . "<br>";

// Operator OR (|| atau or)
$orResult = $a || $b;
echo "Hasil dari \$a OR \$b (true || false) = " . ($orResult ? 'true' : 'false') . "<br>";

// Operator NOT (!)
$notResult = !$a;
echo "Hasil dari NOT \$a (!true) = " . ($notResult ? 'true' : 'false') . "<br>";

// Operator XOR (exclusive OR)
$xorResult = $a xor $b;
echo "Hasil dari \$a XOR \$b (true XOR false) = " . ($xorResult ? 'true' : 'false') . "<br>";

// Kombinasi operator logika
$kombinasiResult = ($a && !$b) || ($a && $b);
echo "Hasil kombinasi ((\$a AND NOT \$b) OR (\$a AND \$b)) = " . ($kombinasiResult ? 'true' : 'false') . "<br>";
?>
