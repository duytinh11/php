<?php
$chuvi = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $d = (float)$_POST["chieudai"];
    $r = (float)$_POST["chieurong"];


    $chuvi = 2 * ($d + $r);
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Tính chu vi hình chữ nhật</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5" style="max-width: 500px;">
    <h2 class="text-center mb-4">Tính chu vi hình chữ nhật</h2>

    <form method="post" action="#">
        <div class="mb-3">
            <label class="form-label">Chiều dài (d)</label>
            <input type="number" step="0.01" name="chieudai" class="form-control" placeholder="Nhập chiều dài" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Chiều rộng (r)</label>
            <input type="number" step="0.01" name="chieurong" class="form-control" placeholder="Nhập chiều rộng" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Tính chu vi</button>
    </form>

    <?php if ($chuvi !== ""): ?>
        <div class="alert alert-success mt-4">
            ✅ Chu vi hình chữ nhật là: <strong><?php echo round($chuvi, 2); ?></strong>
        </div>
    <?php endif; ?>
</div>

</body>
</html>
