<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

$conn = mysqli_connect("localhost","root","","projekcik12");

$user_id = $_POST['user_id'];

$sql = "SELECT * FROM users WHERE id = $user_id";

$result = mysqli_connect($conn, $sql);

while ($row = mysqli_fetch_assoc($result)){

    $imie = $row['imie'];
    $wiek = $row['wiek'];

    echo "
        <form action='./modifyuser.php' method='POST'>
        <fieldset>
            <legend>$imie</legend>
            <label>
            Podaj wartość wieku do zmiany
            <input type='number' value='$wiek' name='wiek' id='wiek' plaecholder='Podaj wiek do zmiany'>
            
            </label>
        </fieldset>
        <button name= 'edytuj'>Edytuj</button>
        </form>
    
    ";

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['edytuj'])){
        $wiek = $_POST['wiek'];
        $sql2 = "UPDATE users SET wiek = $wiek where id = $user_id";
        mysqli_query($conn, $sql2);


    };

}

?>


</body>
</html>