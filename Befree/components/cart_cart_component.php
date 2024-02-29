<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $header_styles; ?>">
    <link rel="stylesheet" href="<?php echo $form_styles; ?>">
    <title>Корзина</title>
</head>
<body>
    <div class="cartItem">
        <img alt="shopping_cart_id" width="112" height="165" src="<?php echo $imgURL; ?>" />
        <div class="itemName">
            <p><?php echo $name; ?></p>
        </div>
        <!-- <div class="vl"></div>
        <p class="size">size: XL</p> -->
        <div class="vl"></div>
        <p class="priceCount"><?php echo $price; ?> ₽ x <?php echo $quantity; ?></p>
        <div class="vl"></div>
        <p class="totalPrice">
            <?php 
                $totalPrice = $price * $quantity;
                echo $totalPrice; 
            ?> ₽
        </p>
        <div class="vl"></div>
        <form action="../public_html/delete_cart_item.php" method="post">
            <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
            <button class="deleteItem" class="deleteButton" type="submit" title="Удалить">
                <img class="button-icon" alt="delete" src="../images/icons/delete_item.svg" />
            </button>
        </form>
    </div>               
</body>
</html>