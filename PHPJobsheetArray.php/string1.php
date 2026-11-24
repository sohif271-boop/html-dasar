<?php
$lorem = "Lorem ipsum dolor sit amet consectetur adipisicing elit Nostrum autem id consequatur laudantium quod explicabo ipsam enim fuga amet voluptatem a velit vitae accusamus pariatur maiores quidem aperiam rem perspiciatis?";
echo "<p>$lorem</p>";
echo "panjang karakter ". strlen($lorem)."<br>";
echo "panjang kata ". str_word_count($lorem). "<br>";
echo "<p>". strtoupper($lorem)."</p>";
echo "<p>". strtolower($lorem)."</p>";
?>