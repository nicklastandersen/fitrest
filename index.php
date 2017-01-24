<?php require_once 'inc/header.php';?>

<?php

require __DIR__ . '/config.php';

$array = $woocommerce->get('orders?per_page=100&status=completed');


?>



<table class="table-hover table-bordered">
    <tr>
        <th>Ordre id</th>
        <th>Status</th>
        <th>Antal</th>
        <th>Produkter</th>
        <th>Svin</th>
        <th>Fisk</th>
        <th>Noter</th>
        <th>Fornavn</th>
        <th>Efternavn</th>
        <th>Adresse</th>
        <th>Etage m.m.</th>
        <th>Post nr</th>
        <th>By</th>
        <th>E-mail</th>
        <th>Telefon</th>
    </tr>

<?php foreach($array as $key => $order ): ?>
    <tr>
        <td><?php echo $order['id']?></td>
        <td><?php echo $order['status']?></td>
        <td><?php echo $order['line_items'][0]['quantity']?> <br> <?php echo $order['line_items'][1]['quantity']?></td>
        <td><?php echo $order['line_items'][0]['name']?> <br> <?php echo $order['line_items'][1]['name']?></td>
        <td><?php echo $order['line_items'][0]['meta'][0]['value'] ?> <br> <?php echo $order['line_items'][1]['meta'][0]['value'] ?></td>
        <td><?php echo $order['line_items'][0]['meta'][1]['value'] ?> <br> <?php echo $order['line_items'][1]['meta'][1]['value'] ?></td>
        <td><?php echo $order['customer_note']?></td>
        <td><?php echo $order['shipping']['first_name']?></td>
        <td><?php echo $order['shipping']['last_name']?></td>
        <td><?php echo $order['shipping']['address_1']?></td>
        <td><?php echo $order['shipping']['address_2']?></td>
        <td><?php echo $order['shipping']['postcode']?></td>
        <td><?php echo $order['shipping']['city']?></td>
        <td><?php echo $order['billing']['email']?></td>
        <td>+45<?php echo $order['billing']['phone']?></td>
    </tr>
<?php endforeach;?>

</table>




<?php require_once 'inc/footer.php';



?>
