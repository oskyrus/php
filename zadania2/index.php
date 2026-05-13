<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadania php https://github.com/TEB-DK/Domena_aplikacji_internetowych/blob/J%C4%99zyk-PHP/1.%20Podstawowa%20sk%C5%82adnia.md </title>
    <style>
        body {
            display: flex;
            flex-direction:column;
            margin: 100px 20px;
        }
        .wraper{
            margin: 0px 100px;

        }
        h1{
            margin: 0;
        }
        .divv {
            display: flex;
            margin: 0px;
        }
        p {
            margin: 25px 2px;
        }
</style>
</head>
<body>
    <div class="wraper">
    <h1>Zadania Tablice</h1>
    <?php
    $fruits = ["jabłko", "banan", "gruszka"];
    $colors = ['red','blue','green'];
    $numbers = [1, 2, 3, 4];
    $user = [
        'name' => 'Jan',
        'age' => 28,
        'city' => 'Warszawa'
    ];
    
    echo "<h2>1.$colors[0]</h2> ";
    
    $product = [
        'name' => 'Jan',
        'price' => 28,
        'in_stock' => true
    ];
    
    
    array_push($numbers, '5');
    
    
    echo "<div class='divv'><h2>3. Nowy Element </h2><p>$numbers[4]</p></div>";
    
    if (in_array("banan", $fruits))
    {
        echo "<div class='divv'><h2>4. znaleziono ' banan ' w tablicy fruits</h2></div>";
    }
    else
    {
        echo "4. nie znaleziono";
    }
    
    ?>
    <div class="divv">
    <h2>
    <?php
        echo "5. ";
        $keys = array_keys($user);
        print_r($keys);
    ?>
    </h2>
        </div>
    </div>
    
    

</body>
</html>