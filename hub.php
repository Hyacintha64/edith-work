<?php
$temp = $_POST['temp'] ?? '';
$unit = strtoupper($_POST['unit'] ?? ''); // Make unit uppercase
$result = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (is_numeric($temp)) {
        if ($unit === 'C') {
            // Celsius to Fahrenheit
            $converted = ($temp * 9 / 5) + 32;
            $result = "$temp °C is equal to $converted °F";
        } elseif ($unit === 'F') {
            // Fahrenheit to Celsius
            $converted = ($temp - 32) * 5 / 9;
            $result = "$temp °F is equal to $converted °C";
        } else {
            $result = "Invalid unit. Please enter 'C' or 'F'.";
        }
    } else {
        $result = "Please enter a valid numeric temperature.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
</head>
<body>
    <h2>Convert Temperature</h2>
    <form method="POST">
        <input type="number" name="temp" placeholder="Enter temperature" value="<?= htmlspecialchars($temp) ?>" required>
        <input type="text" name="unit" placeholder="Enter unit (C or F)" maxlength="1" value="<?= htmlspecialchars($unit) ?>" required>
        <button type="submit">Convert</button>
    </form>

    <?php if (!empty($result)): ?>
        <p><strong><?= $result ?></strong></p>
    <?php endif; ?>
</body>
</html>
