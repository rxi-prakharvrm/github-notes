## Control Statements

<pre>ifstatement.php</pre>

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Statement</title>
</head>
<body>
<!-- 0-4 years: Infants and young children
5-12 years: Children
13-19 years: Teenagers (also known as adolescents or youth)
20-39 years: Young adults
40-59 years: Middle-aged adults
60-79 years: Older adults
80+ years: Elderly -->
    <?php
    $age = 13;
    if($age > 0 && $age <= 4) {
        echo "Infants and young children.";
    } elseif($age > 4 && $age <= 12) {
        echo "Children.";
    } elseif($age > 12 && $age <= 19) {
        echo "Teenagers (also known as adolescents or youth).";
    } elseif($age > 20 && $age <= 39) {
        echo "Young adults";
    } elseif($age > 39 && $age <= 59) {
        echo "Middle-aged adults";
    } elseif($age > 59 && $age <= 79) {
        echo "Older adults";
    } else {
        echo "Elderly";
    }
    ?>
</body>
</html>
```

___

<pre>comparisor_operators.php</pre>

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<!--

  <h2>Comparison Operators</h2>
  <pre>
      
      equal ==
      identical ===
      compare > <  >= <= <>
      not equal !=
      not identical !==
      
</pre>


 <h2>Logical Operators</h2>
  <pre>
      
     And &&
     Or  ||
    Not  !
      
</pre>
-->

<?php 
   
if(4 === 4 && 5 < 10 ) {

    echo "it is true <br>";

}

if(4 !== 4 || 5 < 10 ) {

    echo "it is true<br>";

}

if(4 <> 5) {

    echo "it is true";

}
?>

</body>
</html>
```