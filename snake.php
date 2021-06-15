<?php  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Snake</title>
  <style>
    body {
      height: 100vh;
      width: 100vw;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0;
      background-color: lightblue;
    }

    #game-board {
      background-color: #CCC;
      width: 100vmin;
      height: 100vmin;
      display: grid;
      grid-template-rows: repeat(21, 1fr);
      grid-template-columns: repeat(21, 1fr);
    }

    .snake {
      background-color: hsl(200, 100%, 50%);
      border: .25vmin solid black;
    }

    .s {
      align-items: flex-start;
      text-align: center;
      color: red;
      font-size: 100px;
      margin-left:

    }

    .food {
      background-color: hsl(50, 100%, 50%);
      border: .25vmin solid black;
    }
  </style>
  <script src="jsSnake/game.js" defer type="module"></script>
</head>
<body>
  <div class="s">
    <p id="cScore"></p>
  </div>
  <div id="game-board"></div>
</body>
</html>


<?php  ?>
