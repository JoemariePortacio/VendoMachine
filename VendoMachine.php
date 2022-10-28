<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/vending.css">
    <title>Vendo machine</title>
</head>
<body>
<h1>Vendo Machine</h1>

<form method = "post">
 <fieldset class="fieldset">
  <legend >Product</legend>
  <input type="checkbox" name="cafe[]" id="cafeTea" value = "Tea" > <label for = "cafeTea">Tea - 15</label><br>
  <input type="checkbox" name="cafe[]" id="cafeTeaWithMint" value = "TeaWithMint"> <label for = "cafeTeaWithMint">Tea With Mint - 20</label><br>
  <input type="checkbox" name="cafe[]" id="cafeTurkishCoffee" value = "TurkishCoffee"> <label for = "cafeTurkishCoffee">Turkish Coffee - 30</label><br>
  <input type="checkbox" name="cafe[]" id="cafeEspresso" value = "Espresso"> <label for = "cafeEspresso">Espresso - 40</label><br>
  <input type="checkbox" name="cafe[]" id="cafeCappuccino" value = "Cappuccino"> <label for = "cafeCappuccino">Cappuccino - 50</label><br>
  
</fieldset>
<fieldset class="fieldset">
  <legend>Options</legend>
  <label for="size">Size:</label>
<select name="size[]" id="sizes">
  <option value="Regular">Regular </option>
  <option value="Medium">Medium (add ₱5)</option>
  <option value="Large">Large (add ₱10)</option>
</select>

<label for="Qtycafe"> Quantity: </label>
<input type="number" name="Qtycafe" id="Qtycafe" min="1" max="99999999999">
<input type="submit" name="CheckOutbtn" value ="Check Out">
</fieldset>
</form>

<?php
error_reporting(0);
if(isset($_POST['CheckOutbtn']) &&
       isset($_POST['cafe']) && 
       isset($_POST['size']) && 
       isset($_POST['Qtycafe'])){
echo '<hr>';
echo '<b>Purchase Summary:</b> <br>';

        $arrCafe = $_POST['cafe'];
        $arrSize = $_POST['size'];
        $cafeQty = $_POST['Qtycafe'];

        foreach($arrCafe as $key => $cafeValue){
            foreach($arrSize as $key => $SizeValue){

                if (($cafeValue == "Tea")&&($SizeValue == "Regular")){
                    $Tea = 15 * $cafeQty;
                    $QtyTea = $cafeQty;

                    if($cafeQty > 1){
                        echo '<li> ',$cafeQty,' ','pieces of ',$SizeValue,' ',$cafeValue,' amounting to ',' ₱ ',$Tea,'</li> <br>';
                    }
                    else
                    {
                    echo '<li> ',$cafeQty,' ','piece of ',$SizeValue,' ',$cafeValue,' amounting to ',' ₱ ',$Tea,'</li> <br>';
                    }      
                                  
                }
              
               


                if (($cafeValue == "TeaWithMint")&&($SizeValue == "Regular")){
                    $TeaWithMint = 20 * $cafeQty;
                    $QtyTeaWithMint = $cafeQty;
                    if($cafeQty > 1){
                        echo '&#9; <li> ',$cafeQty,' ','pieces of ',$SizeValue,' ',$cafeValue,' amounting to ',' ₱ ',$TeaWithMint,'</li> <br>';
                    }
                    else
                    {
                    echo '<li> ',$cafeQty,' ','piece of ',$SizeValue,' ',$cafeValue,' amounting to ',' ₱ ',$TeaWithMint,'</li> <br>';
                    }      
                                 
                }


                if (($cafeValue == "TurkishCoffee")&&($SizeValue == "Regular")){
                    $TurkishCoffee = 20 * $cafeQty; 
                    $QtyTurkishCoffee = $cafeQty;
                    if($cafeQty > 1){
                        echo '<li> ',$cafeQty,' ','pieces of ',$SizeValue,' ',$cafeValue,' amounting to ',' ₱ ',$TurkishCoffee,'</li> <br>';
                    }
                    else
                    {
                    echo '<li> ',$cafeQty,' ','piece of ',$SizeValue,' ',$cafeValue,' amounting to ',' ₱ ',$TurkishCoffee,'</li> <br>';
                    }    
                                   
                }
                if (($cafeValue == "Espresso")&&($SizeValue == "Regular")){
                    $Espresso = 15 * $cafeQty;
                    $QtyEspresso = $cafeQty;
                    if($cafeQty > 1){
                        echo '<li> ',$cafeQty,' ','pieces of ',$SizeValue,' ',$cafeValue,' amounting to ',' ₱ ',$Espresso,'</li> <br>';
                    }
                    else
                    {
                    echo '<li> ',$cafeQty,' ','piece of ',$SizeValue,' ',$cafeValue,' amounting to ',' ₱ ',$Espresso,'</li> <br>';
                    }    
                                      
                }
                if (($cafeValue == "Cappuccino")&&($SizeValue == "Regular")){
                    $Cappuccino = 20 * $cafeQty;
                    $QtyCappuccino = $cafeQty;
                    if($cafeQty > 1){
                        echo '<li> ',$cafeQty,' ','pieces of ',$SizeValue,' ',$cafeValue,' amounting to ',' ₱ ',$Cappuccino,'</li> <br>';
                    }
                    else
                    {
                    echo '<li> ',$cafeQty,' ','piece of ',$SizeValue,' ',$cafeValue,' amounting to ',' ₱ ',$Cappuccino,'</li> <br>';
                    }    
                     
                }

                
                if (($cafeValue == "Tea")&&($SizeValue == "Medium")){
                    $Tea = 20*$cafeQty;
                    $QtyTea = $cafeQty;
                    if($cafeQty > 1){
                        echo '<li> ',$cafeQty,' ','pieces of ',$SizeValue,' ',$cafeValue,' amounting to ',' ₱ ',$Tea,'</li> <br>';
                    }
                    else
                    {
                    echo '<li> ',$cafeQty,' ','piece of ',$SizeValue,' ',$cafeValue,' amounting to ',' ₱ ',$Tea,'</li> <br>';
                    }    
                                      
                }


                if (($cafeValue == "TeaWithMint")&&($SizeValue == "Medium")){
                    $TeaWithMint =25*$cafeQty; 
                    $QtyTeaWithMint = $cafeQty;

                    if($cafeQty > 1){
                        echo '<li> ',$cafeQty,' ','pieces of ',$SizeValue,' ',$cafeValue,' amounting to ',' ₱ ',$TeaWithMint,'</li> <br>';
                    }
                    else
                    {
                    echo '<li> ',$cafeQty,' ','piece of ',$SizeValue,' ',$cafeValue,' amounting to ',' ₱ ',$TeaWithMint,'</li> <br>';
                    }   
                                 
                }
                if (($cafeValue == "TurkishCoffee")&&($SizeValue == "Medium")){
                    $TurkishCoffee = 25*$cafeQty; 
                    $QtyTurkishCoffee = $cafeQty;
                    if($CafeQty > 1){
                        echo '<li> ',$cafeQty,' ','pieces of ',$SizeValue,' ',$cafeValue,' amounting to ',' ₱ ',$TurkishCoffee,'</li> <br>';
                    }
                    else
                    {
                    echo '<li> ',$cafeQty,' ','piece of ',$SizeValue,' ',$cafeValue,' amounting to ',' ₱ ',$TurkishCoffee,'</li> <br>';
                    }   
                                      
                }
                if (($cafeValue == "Espresso")&&($SizeValue == "Medium")){
                    $Espresso = 20 * $cafeQty;
                    $QtyEspresso = $cafeQty;
                    if($cafeQty > 1){
                        echo '<li> ',$cafeQty,' ','pieces of ',$SizeValue,' ',$cafeValue,' amounting to ',' ₱ ',$Espresso,'</li> <br>';
                    }
                    else
                    {
                    echo '<li> ',$cafeQty,' ','piece of ',$SizeValue,' ',$cafeValue,' amounting to ',' ₱ ',$Espresso,'</li> <br>';
                    }   
                                         
                }
                if (($cafeValue == "Cappuccino")&&($SizeValue == "Medium")){
                    $Cappuccino = 25 * $cafeQty;
                    $QtyCappuccino = $cafeQty;
                    if($cafeQty > 1){
                        echo '<li> ',$cafeQty,' ','pieces of ',$SizeValue,' ',$cafeValue,' amounting to ',' ₱ ',$Cappuccino,'</li> <br>';
                    }
                    else
                    {
                    echo '<li> ',$cafeQty,' ','piece of ',$SizeValue,' ',$cafeValue,' amounting to ',' ₱ ',$Cappuccino,'</li> <br>';
                    }   
                       
                }

                if (($cafeValue == "Tea")&&($SizeValue == "Large")){
                    $Tea = 25 * $cafeQty; 
                    $QtyTea = $cafeQty;
                    if($cafeQty > 1){
                        echo '<li> ',$cafeQty,' ','pieces of ',$SizeValue,' ',$cafeValue,' amounting to ',' ₱ ',$Tea,'</li> <br>';
                    }
                    else
                    {
                    echo '<li> ',$cafeQty,' ','piece of ',$SizeValue,' ',$cafeValue,' amounting to ',' ₱ ',$Tea,'</li> <br>';
                    }   
                                    
                }
                if (($cafeValue == "TeaWithMint")&&($SizeValue == "Large")){
                    $TeaWithMint = 30 * $cafeQty;
                    $QtyTeaWithMint = $cafeQty;
                    if($cafeQty > 1){
                        echo '<li> ',$cafeQty,' ','pieces of ',$SizeValue,' ',$cafeValue,' amounting to ',' ₱ ',$TeaWithMint,'</li> <br>';
                    }
                    else
                    {
                    echo '<li> ',$cafeQty,' ','piece of ',$SizeValue,' ',$cafeValue,' amounting to ',' ₱ ',$TeaWithMint,'</li> <br>';
                    }   
                                  
                }
                if (($cafeValue == "TurkishCoffee")&&($SizeValue == "Large")){
                    $TurkishCoffeee = 30 * $cafeQty; 
                    $QtyTurkishCoffee = $cafeQty;
                    if($cafeQty > 1){
                        echo '<li> ',$cafeQty,' ','pieces of ',$SizeValue,' ',$cafeValue,' amounting to ',' ₱ ',$TurkishCoffee,'</li> <br>';
                    }
                    else
                    {
                    echo '<li> ',$cafeQty,' ','piece of ',$SizeValue,' ',$cafeValue,' amounting to ',' ₱ ',$TurkishCoffee,'</li> <br>';
                    }   
                                      
                }
                if (($cafeValue == "Espresso")&&($SizeValue == "Large")){
                    $Espresso= 25 * $cafeQty;
                    $QtyEspresso = $cafeQty; 
                    if($cafeQty > 1){
                        echo '<li> ',$cafeQty,' ','pieces of ',$SizeValue,' ',$cafeValue,' amounting to ',' ₱ ',$Espresso,'</li> <br>';
                    }
                    else
                    {
                    echo '<li> ',$cafeQty,' ','piece of ',$SizeValue,' ',$cafeValue,' amounting to ',' ₱ ',$Espresso,'</li> <br>';
                    }   
                                      
                }
                if (($cafeValue == "Cappuccino")&&($SizeValue == "Large")){
                    $Cappuccino = 30 * $cafeQty;
                    $QtyCappuccino = $cafeQty;
                    if($cafeQty > 1){
                        echo '<li> ',$cafeQty,' ','pieces of ',$SizeValue,' ',$cafeValue,' amounting to ',' ₱ ',$Cappuccino,'</li> <br>';
                    }
                    else
                    {
                    echo '<li> ',$cafeQty,' ','piece of ',$SizeValue,' ',$cafeValue,' amounting to ',' ₱ ',$Capouccino,'</li> <br>';
                    }   
                      
                }
            }
        }
        

        $TotalAmnt = $Tea + $TeaWithMint + $TurkishCoffee + $Espresso + $Cappuccino;
        $Totalcafe = $QtyTea + $QtyTeaWithMint + $QtyTurkishCoffee + $QtyEspresso +  $QtyCappuccino;
        echo '<b>Total Number of Items: </b>',$TotalAmnt,'<br>';
        echo '<b>Total Amount: </b>',$Totalcafe,'<br>';


                 
        
        
    }
    

?>

</body>
</html>
