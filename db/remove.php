<?php
    if (isset($_POST['save'])){
        include 'connect.php';

        $input_id = $_POST['input_id'];
        $table_choice = $_POST['table_select'];
        if ($table_choice == 'customer') {
            $sql = "DELETE FROM customer
                    WHERE ID = '$input_id'";
        }
        if ($table_choice == 'orderdata') {
            $sql = "DELETE FROM orderdata
                    WHERE ID = '$input_id'";
        }
        if ($table_choice == 'orderitem') {
            $sql = "DELETE FROM orderitem
                    WHERE ID = '$input_id'";
        }
        if ($table_choice == 'product') {
            $sql = "DELETE FROM product
                    WHERE ID = '$input_id'";
        }

        if (!$input_id == '') {
            mysqli_query($conn, $sql);
        }
    }
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>

    <body>
        <div class="w3-container">
            <h3>Stergeti un produs din baza de date</h3>
            <form method="post">
                <p><b>Alegeti un tabel:</b></p>
                <select name="table_select">
                    <option value="customer">customer</option>
                    <option value="orderdata">orderdata</option>
                    <option value="orderitem">orderitem</option>
                    <option value="product">product</option>
                </select>
                <p><b>Introduceti ID-ul randului care doriti sa-l stergeti:</b></p>
                <input type="text" name="input_id">
                <input type="submit" name="save" value="submit">
                <a href="../index.php" style="margin-left: 10px;">Inapoi la pagina principala</a>
            </form>
        </div>
    </body>
</html>
