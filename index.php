<?php

    require_once __DIR__ . '/data.php';

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
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Qty</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product) : ?>
                    <tr>
                        <td><?= $product['sku'] ?></td>
                        <td><?= $product['name'] ?></td>
                        <td>
                            <?php
                                foreach ($categories as $category) {
                                    if ($category['id'] == $product['category_id']) {
                                        echo $category['name'];
                                        break;
                                    }
                                }
                            ?>
                        </td>
                        <td><?= number_format($product['price'], 0, ',', '.') ?> VND</td>
                        <td><?= $product['qty'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>    
    </body>
</html>