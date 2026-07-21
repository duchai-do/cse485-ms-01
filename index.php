<?php

    require_once __DIR__ . '/data.php';



$categoryMap = [];

foreach ($categories as $category) {
    $categoryMap[$category['id']] = $category['name'];
}

$tong = 0;

$soSanPham = count($products);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MiniShop — Catalog (Buoi 1)</title>
    </head>
    <body>
        <h1>MiniShop — Catalog (Buoi 1)</h1>

        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>SKU</th>
                    <th>Ten</th>
                    <th>Danh Muc</th>
                    <th>Gia</th>
                    <th>So Luong</th>
                    <th>Thanh tien</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product) : ?>
                    <?php

                        $thanhTien = $product['price'] * $product['qty'];

                        $tong += $thanhTien;

                        $tenDm = $categoryMap[$product['category_id']] ?? '-';
                ?>
                <tr>
                    <td>
                        <?php echo htmlspecialchars($product['sku']); ?>
                    </td>
                    <td>
                        <?php echo htmlspecialchars($product['name']); ?>
                    </td>
                    <td>
                        <?php echo htmlspecialchars($tenDm); ?>
                    </td>
                    <td>
                        <?php echo number_format($product['price'], 0, ',', '.'); ?> VND
                    </td>
                    <td>
                        <?php echo $product['qty']; ?>
                    </td>
                    <td>
                        <?php echo number_format($thanhTien, 0, ',', '.'); ?> VND
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>    
        <p>
            <strong>So san pham = <?php echo $soSanPham; ?></strong>
        </p>
        <p>
            <strong>Tong gia tri kho = <?php echo number_format($tong, 0, ',', '.'); ?> VND</strong
        </p>
        
        <h2>Debug</h2>
        <?php
            echo '<pre>';
            var_dump($products);   
            echo '</pre>';
        ?>
    </body>
</html>