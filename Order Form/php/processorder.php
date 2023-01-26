<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="..css/style.css">

    <meta name="description" content="Order results for car parts"/>
    <meta property="description" content="Order results for car parts"/>
    <meta name="keywords" content="    Car parts, Order form, Auto parts, Vehicle parts, Automotive parts, Purchase form, Car accessories, Ordering system, Car components, Automotive industry ">
    <meta name="author" content="Sava Maksimovic">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Miki D's Car Parts | Order results </title>
</head>
<body>


   <h1>Miki D's Car Parts</h1>
    <h2>Order Lists</h2>
    

    <?php
        // short name variable
        $tyreqty = $_POST['tyreqty'];
        $oilqty = $_POST['oilqty'];
        $sparkqty = $_POST['sparkqty'];

    ?>
    
    <?php
        echo "<p>Order Processed at ";    //Script processing orders
        echo date('H:i, jS F Y');
        echo "</p>";


        echo '<p>Your order is as it follows:</p>';
        echo htmlspecialchars($tyreqty).' tires<br />';
        echo htmlspecialchars($oilqty).' bottles of oil<br />';
        echo htmlspecialchars($sparkqty).' spark plugs<br />';
    ?>





</body>
</html>