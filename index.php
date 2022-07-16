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
            background-color: rgb(53, 1, 1);
            color: white;
            text-align: center;
            padding-top: 100px;
        }
        .random{
            padding: 32px 150px;
            color: crimson ;
            background-color:  rgb(236, 180, 159);
            border-radius: 20px;
        }
    </style>

    <section>
        <h1>Code Generator</h1>
        <br><br><br>
        <span class="random"></span>
    </section>

    <script>
        ran = document.querySelector('.random')
        function generate(len) {
            var random = '';
            var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            for (var i, i=0; i<len; i++) {
                random += characters.charAt(Math.floor(Math.random()*len))
            }
            ran.innerHTML = 'OPP' + random ;
        }
        generate(6)
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
