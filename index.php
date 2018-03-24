<!DOCTYPE html>
<html>
<head>
<title>DIGI WORLD</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="style.css" type="text/css"/>

</head>

<body>

<div id="background_images"></div>

    <div id="play" >

      <h4><b>Play</b></h4>

      <form name="myform" onsubmit="validateForm()">
        <input type="text" name="rows" id="u" placeholder="Enter Rows"/><br><hr id="fhr"></hr><br><br>
        <input type="text" name="col" id="q" placeholder="Enter Columns"/><br><hr id="fhr"></hr><br><br>
        <input type="text" name="gen" id="q" placeholder="Enter Generation"/><br><hr id="fhr"></hr><br><br><br>
        <textarea  name="mat"  placeholder="Enter Matrix" id="txt_ar" rows="4"></textarea><br><br>

        <input type="submit" value="SUBMIT" class="btn-login"></input><br>
      </form>

    </div>
  <header>

        <div class="back"></div>



      <div class="container">
        <h1 class="logo">GAME WORLD</h1>

        <nav class="site-nav">
            <ul>
              <li><a href="">Home</a></li>
              <li><a href="">About</a></li>
              <li><a href="#" id="l">Play</a></li>

            </ul>
        </nav>



      </div>
        <h2 class="heading">Welcome To GAME OF LIFE</h2>
        <button class="btn" type="button" >Get Started</button>

  </header>

  <div id="game_des">
    <h1 id="description">Description<hr id="dr"/></h1><br>
    <img src="game.png" >
    <p>
      <h2 class="g_desc">Game Description</h2>
      <ul>
        <li> The Game of Life, also known simply as Life,
          is a cellular automaton devised by the British mathematician John Horton Conway in 1970.</li><br>
        <li>  The "game" is a zero-player game, meaning that its evolution is determined by its initial state,
          requiring no further input.</li><br>
        <li>One interacts with the Game of Life by creating an initial configuration and observing how it evolves,
          or, for advanced "players", by creating patterns with particular properties.</li><br>
      </ul>

      <h2 class="g_rules">Rules</h2>
        <ol>
          <li>Any cells will be alive, if greater than or equal to two cells are alive in the neghbouring.</li>
          <li>Any cells will be dead, if more than four cells are alive beacuse of over-population.</li>
        </ol>
    </p>
  </div>
<script src="jquery-3.2.1.js"></script>
<script src="script.js"></script>
<script>
    function validateForm() {
        var row = document.forms["myform"]["rows"].value;
        var col = document.forms["myform"]["col"].value;
        var gen = document.forms["myform"]["gen"].value;


        entries(row, col);

    }

      function entries(row, col) {
          var x, text;
          x = document.getElementById("txt_ar").value;
          var a = new Array(row, col);


              for (var i=0; i<row; i++){
              	for(var j=0; j<col; j++){
                  	a[i][j] = x;
                    if(a[i][])
                  }
              }

               for (var i=0; i<row; i++){
              	  for(var j=0; j<col; j++){
                  	document.write(a[i][j] + "&emsp;");
                  }
              	document.write("<br/>");
              }
        }
        alert(text);
      }
</script>

</body>
</html>
