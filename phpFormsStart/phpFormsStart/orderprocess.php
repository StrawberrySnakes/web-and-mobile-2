<!-- Dessa Shapiro -->
<?php 
	$page = "orderprocess";
	$path = "";
	include($path . "assets/inc/header.php");

    // Get form input
    $customerName = $_POST['customerName'];
    $customerID = $_POST['customerID'];
    $pizzaSize = $_POST['pizzaSize'];
    $toppingsNum = $_POST['toppingsNum'];

    //die($customerName . "ID" . $customerID);

    if(empty($customerID)) {
        // echo "You must enter an ID";
        // redirect back to form/ half finished form
        header("Location: orderform.php?name=".$customerName);
    }
    elseif (!is_numeric($customerID)) {
        echo "Customer ID " . $customerID . " is invalid";
    }
    else {

        // this temporally exits out of php into html
        ?>
            <p>Here's your order:</p>
        <?php

        // Proceed with form

        // This deals with cases for each pizza size
        // The default is a medium pizza
        switch($pizzaSize) {
            case "P":
                $pizzaCost = 7.99;
                $pizzaType = 'Personal';
                break;
            case "S":
                $pizzaCost = 10.99;
                $pizzaType = 'Small';
                break;
            case "M":
                $pizzaCost = 12.99;
                $pizzaType = 'Medium';
                break;
            case "L":
                $pizzaCost = 16.99;
                $pizzaType = 'Large';
                break;
            default:
                $pizzaCost = 12.99;
                $pizzaType = 'Medium';
        }

        // This deals with cases for each num of topping chosen 
        // The default is not extra toppings
        switch($toppingsNum) {
            case "Zero" :
                $toppingsCost = 0;
                break;
            case "One" :
                $toppingsCost = 2;
                break;
            case "Two" :
                $toppingsCost = 3;
                break;
            case "Three" :
                $toppingsCost = 3.75;
                break;
            default:
                $toppingsCost = 0;
                break;
                
        }

        // this calculates the tax amount including toppings
        $taxAmount = ($pizzaCost+$toppingsCost) * 0.08;

        // this calculates the total cost without rounding
        $totalCost = $taxAmount + $pizzaCost + $toppingsCost;


        $fmt = numfmt_create("en_EN", numberFormatter::CURRENCY);
        // these will all format the costs correctly in USD, while rounding them if needed
        $pizzaCostPretty = numfmt_format_currency($fmt, $pizzaCost, 'USD');
        $toppingsCostPretty = numfmt_format_currency($fmt, $toppingsCost, 'USD');
        $taxAmountPretty = numfmt_format_currency($fmt, $taxAmount, 'USD');
        $totalCostPretty = numfmt_format_currency($fmt, $totalCost, 'USD');

        // This displays all the price and cost information
        echo "Pizza Type: " . $pizzaType . "<br/>Pizza Price: "  . $pizzaCostPretty . "<br/>Toppings Price: " . $toppingsCostPretty . "<br/>Tax Amount: " . $taxAmountPretty . "<br/>Total Order Cost: ". $totalCostPretty . "<br/>Thank you for your order!";        

    }
    
?>

<?php 
	include($path . "assets/inc/footer.php");
?>