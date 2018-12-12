<?php
  if (isset($_POST['save'])){
    include 'connect.php';
    $customer_name = $_POST['customer_name'];
    $customer_address = $_POST['customer_address'];
    $customer_id = $_POST['customer_id'];
    $product_order_id = $_POST['product_order_id'];
    $product_name = $_POST['product_name'];
    $product_description = $_POST['product_description'];
    $orderitem_order_id = $_POST['orderitem_order_id'];
    $orderitem_product_id = $_POST['orderitem_product_id'];
    $orderitem_quantity = $_POST['orderitem_quantity'];

    $sql1 = "INSERT INTO customer (name, adress)
              VALUES ('$customer_name','$customer_address')";
    $sql2 = "INSERT INTO orderdata (customer_id)
              VALUES ('$customer_id')";
    $sql3 = "INSERT INTO orderitem (order_id, product_id, quantity)
              VALUES ('$orderitem_order_id','$orderitem_product_id',
                      '$orderitem_quantity')";
    $sql4 = "INSERT INTO product (id, name, description)
              VALUES ('$product_order_id','$product_name','$product_description')";

    if (!$customer_name == '') {
      mysqli_query($conn, $sql1);
    }
    if (!$customer_id == '') {
      mysqli_query($conn, $sql2);
    }
    if (!$product_name == '') {
      mysqli_query($conn, $sql3);
    }
    if (!$orderitem_order_id == '')
    mysqli_query($conn, $sql4);
  }
?>

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  </head>

  <body>
    <div class="w3-container">
      <h3>Introduceti un produs in baza de date</h3>
      <form method="post">
        <p><b>Inserarea in tabelul: Customer</b></p>
        <label id="customer_input">Name<br>
        <input type="text" name="customer_name"></label><br>

        <label id="customer_input">Address<br>
        <input type="text" name="customer_address"></label><br>

        <p><b>Inserarea in tabelul: Comanda</b></p>
        <label id="comanda_input">Customer ID<br>
        <input type="text" name="customer_id"></label><br>

        <p><b>Inserarea in tabelul: Product</b></p>
        <label id="product_input">Orderitem product id<br>
        <input type="text" name="product_order_id"></label><br>

        <label id="product_input">Product name<br>
        <input type="text" name="product_name"></label><br>

        <label id="product_input">Product description<br>
        <input type="text" name="product_description"></label><br>

        <p><b>Inserarea in tabelul: Orderitem</b></p>
        <label id="orderitem_input">Order ID<br>
        <input type="text" name="orderitem_order_id"></label><br>

        <label id="orderitem_input">Product ID<br>
        <input type="text" name="orderitem_product_id"></label><br>

        <label id="orderitem_input">Quantity<br>
        <input type="text" name="orderitem_quantity"></label><br><br>

        <input type="submit" name="save" value="Submit">
        <a href="../index.php" style="margin-left: 10px;">Inapoi la pagina principala</a>
      </form>
    </div>
  </body>
</html>
