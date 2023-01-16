<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Multi-dimensional Array</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="GET">
        <input id="name" type="text" name="fname" placeholder="First Name">
        <button id="btn" type="submit">Enter</button>
    </form>
    <?php
    $people = array (
        array("Ashton", " Abrahams ", 18),
        array("Abdus-Samad", " Charles ", 22),
        array("Jesse", " Spence ", 23),
        array("Ricardo-Ronan", " Moses ", 20),
        array("Reagan", " Carolussen ", 20),
        array("Mu'eed", " Brown ", 19),
        array("Uzair", " Damonse ", 19),
    );

    $fname = $_GET ['fname'];
    
    
    if ($fname =="Ashton") {
      echo $people[0][0].$people[0][1].$people[0][2].". Hello ". $fname.", welcome back.";
    } elseif ($fname =="Charles") {
      echo $people[1][0].$people[1][1].$people[1][2].". Hello ". $fname.", welcome back.";
    } elseif ($fname =="Jesse") {
      echo $people[2][0].$people[2][1].$people[2][2].". Hello ". $fname.", welcome back.";
    } elseif ($fname =="Ricardo") {
      echo $people[3][0].$people[3][1].$people[3][2].". Hello ". $fname.", welcome back.";
    } elseif ($fname =="Reagan") {
      echo $people[4][0].$people[4][1].$people[4][2].". Hello ". $fname.", welcome back.";
    } elseif ($fname =="Mueed") {
      echo $people[5][0].$people[5][1].$people[5][2].". Hello ". $fname.", welcome back.";
    } elseif ($fname =="Uzair") {
      echo $people[6][0].$people[6][1].$people[6][2].". Hello ". $fname.", welcome back.";
    } elseif ($fname !=="Ashton"||"Charles"||"Jesse"||"Ricardo"||"Reagan"||"Mueed"||"Uzair") {
      echo "Name not in database!";
    }
    ?>
</body>
</html>