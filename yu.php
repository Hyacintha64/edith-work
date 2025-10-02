<?php

$num1 = $_POST['num1'] ?? '';
$num2 = $_POST['num2'] ?? '';
$result = '';

if(isset($_POST['add'])) {
    $result = $num1 + $num2;
     echo "Result: $num1 + $num2 = $result\n";
} else if (isset($_POST['sb'])) {
    $result = $num1 - $num2;
   echo "Result: $num1 - $num2 = $result\n";
} else if (isset($_POST['mult'])) {
    $result = $num1 * $num2;
    echo "Result: $num1 * $num2 = $result\n";
} else if (isset($_POST['div'])) {
        $result = $num1 / $num2;
        echo "Result: $num1 / $num2 = $result\n";
} else if (isset($_POST['mod'])) {
        $result = $num1 % $num2;
       echo "Result: $num1 % $num2 = $result\n";
} else {
    echo "Invalid operation selected.\n";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
<input type="number" name="num1" placeholder="First number" value="<?= htmlspecialchars($num1) ?>" required>
<input type="number" name="num2" placeholder="Second number" value="<?= htmlspecialchars($num2) ?>" required>
<button type="submit" name="add">+</button>
<button type="submit" name="sb">-</button>
<button type="submit" name="mult">*</button>
<button type="submit" name="div">/</button>
<button type="submit" name="mod">%</button>
    </form>
</body>
</html>


