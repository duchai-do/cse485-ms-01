<?php

require_once __DIR__ . '/data.php';

?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>MiniShop — Catalog (Buoi 1)</title>
</head>
<body>
    <h1>MiniShop — Catalog (Buoi 1)</h1>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>SKU</th>
                <th>Ten</th>
                <th>Gia</th>
                <th>So luong</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $p): ?>
                <tr>
                    <td>
                        <?php echo htmlspecialchars($p['sku'], ENT_QUOTES, 'UTF-8'); ?>
                    </td>
                    <td>
                        <?php echo htmlspecialchars($p['name'], ENT_QUOTES, 'UTF-8'); ?>
                    </td>
                    <td>
                        <?php echo $p['price']; ?>
                    </td>
                    <td>
                        <?php echo $p['qty']; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
