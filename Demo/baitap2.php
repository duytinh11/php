<?php
$doF = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $doC = (float)$_POST["doC"];
    // Công thức chuyển đổi: F = C * 9/5 + 32
    $doF = $doC * 9 / 5 + 32;
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chuyển đổi độ C sang độ F</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5" style="max-width: 500px;">
    <h2 class="text-center mb-4">Chuyển đổi độ C sang độ F</h2>

    <form method="post" action="#">
        <div class="mb-3">
            <label class="form-label">Nhập nhiệt độ (°C)</label>
            <input type="number" step="0.01" name="doC" class="form-control" placeholder="Nhập độ C" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Chuyển đổi</button>
    </form>

    <?php if ($doF !== ""): ?>
        <div class="alert alert-success mt-4">
            🌡️ Kết quả: <strong><?php echo round($doF, 2); ?> °F</strong>
        </div>
    <?php endif; ?>
</div>

</body>
</html>
