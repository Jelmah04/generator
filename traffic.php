<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traffic Light</title>
</head>
<body>
    <style>
        *{
            padding : 0%;
            margin : 0%;
            box-sizing : border-box;
            text-align : center;
        }
        .board{
            padding : 50px;
            margin : 50px;
            border : 2px solid black;
        }
    </style>


    <h1>Obey The Traffic</h1>
    <section>
        <div class="board">
            <span class="green" name="green"></span>
            <span class="yellow" name="yellow"></span>
            <span class="red" name="red"></span>
        </div>
        <div class="pole"></div>

        <div class="control">
            <button class="btn" name="go">Go</button>
            <button class="btn" name="ready">Ready</button>
            <button class="btn" name="stop">Stop</button>
        </div>
    </section>


    <?php
    echo ("Here we go");
    ?>

</body>
</html>













<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mad Libs Game</title>
</head>
<body>
    <form action="index.php" method="POST">
        Base: <input type="number" name="num1"> <br><br>
        Height: <input type="number" name="num2"> <br><br>
        <!-- School: <input type="number" name="num3"> <br><br> -->
        <input type="submit" value="Submit"> <br><br>
    </form>

    <?php
       $base = $_POST["num1"];
       $height = $_POST["num2"];

       $total = 0.5 * $base * $height ;
       echo " The area of this triangle is $total" ;
       
       if ($total > 20 || $height !== 7) {
        echo ("This is a big triangle of base $base, height $height and area $total") ;
       } else {
        echo "This is a small triangle of base $base, height $height and area $total" ;
       }
    ?>

</body>
</html>