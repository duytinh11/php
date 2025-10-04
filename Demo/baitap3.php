<?php
$ketqua = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy số nguyên từ form và ép kiểu int
    $n = (int)$_POST["so"];

    // Kiểm tra chẵn lẻ bằng toán tử %
    if ($n % 2 == 0) {
        $ketqua = "CHAN";
    } else {
        $ketqua = "LE";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Kiểm tra số chẵn / lẻ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5" style="max-width: 500px;">
    <h2 class="text-center mb-4">Kiểm tra số chẵn / lẻ</h2>

    <form method="post" action="#">
        <div class="mb-3">
            <label class="form-label">Nhập số nguyên (n)</label>
            <input type="number" name="so" class="form-control" placeholder="Nhập số nguyên" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Kiểm tra</button>
    </form>

    <?php if ($ketqua !== ""): ?>
        <div class="alert alert-info mt-4">
            ✅ Kết quả: <strong><?php echo $ketqua; ?></strong>
        </div>
    <?php endif; ?>
</div>

</body>
</html>
