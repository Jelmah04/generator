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
        section{
            height : 100vh ;
            background-color: rgb(53, 1, 46);
            color: rgb(236, 159, 192);
            text-align: center;
            padding-top: 100px;
        }
        .random{
            padding: 32px 150px;
            color: rgb(53, 1, 46); ;
            background-color:  rgb(236, 159, 192);
            border-radius: 20px;
            font-size: 25px;
        }
    </style>

    <section>
        <h1><b>Code Generator</b></h1>
        <br><br><br>
        <span class="random"></span>
    </section>

    <script>

        function generator() {
            display = '';
            pickfrom = 'ABCDE12345@#$*&';
            for (var i, i = 0; i < pickfrom.length; i++) {
                display += pickfrom.charAt(Math.floor(Math.random()*pickfrom.length))                
            }
            document.querySelector('.random').innerHTML = display
        }
        generator()
    </script>





    <!-- <style>
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
    </style> -->

<!-- 
<section>
        <h1>Obey The Traffic</h1>
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
    </section> -->


    <?php
    echo ("Here we go");
    ?>

</body>
</html>
