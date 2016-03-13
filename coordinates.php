<? include 'chessboard.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <? include 'head.php'; ?>
  </head>

  <body>

    <div class="container">

      <? include 'nav.php'; ?>

      <h1>Practice Chess Coordinates</h1>

      <p>From a1 to h8 and back!</p>

      <div class="col-md-6"><div class="block">
        <h3>Practice square to coordinate</h3>

        <div id="board1" class="brd-container"><? generateChessBoardHTML(); ?></div>

        <div id="coordinates-container">Selected coordinates: <span id="coordinates"></span></div>
      </div></div>

      <div class="col-md-6"><div class="block">
        <h3>Practice coordinate to square</h3>

        <a href="#" class="btn btn-warning" id="generaterandomco">New random coordinate</a><br /><br />

        <div id="guessthesquare">
          
          <div id="randomco"></div>
          <br /><br />

          <a href="#" id="revealboard" class="btn btn-primary btn-xl">Reveal position &gt;</a>
        </div>

        <div id="board2" class="brd-container" style="display:none;"><? generateChessBoardHTML(); ?></div>
      </div></div>

    </div> <!-- /container -->

    <style>

      #guessthesquare {text-align:center;}
      #randomco {background:#ccc;border-radius:6px;margin:10px;font-size:50px;color:#888;display:inline-block;border:5px solid black;width:100px;height:80px;text-align:center;}
    </style>

    <script>
        function generaterandomco(){
        $('#board2').hide();
            $('#guessthesquare').show();

            window.randomcol = window.chars[Math.floor(Math.random() * 8) + 1];
            window.randomrow = Math.floor(Math.random() * 8) + 1;
            $('#randomco').html(window.randomcol + window.randomrow);
          };


        $(document).ready(function(){
          $('#board1 .brd-sq').click(function(){
              var co = '' + $(this).data('co');
              var col = co[0];
              var row = co[1];
              
              $('#coordinates').html(col+row);

              selectSquare('board1',col,row);
          });

          $('#generaterandomco').click(function(e){
              e.preventDefault();

              generaterandomco();
          });
          generaterandomco();

          $('#revealboard').click(function(e){
              e.preventDefault();

              $('#board2').show();
              $('#guessthesquare').hide();

              selectSquare('board2',window.randomcol,window.randomrow)
          });
        });
    </script>

  </body>
</html>
