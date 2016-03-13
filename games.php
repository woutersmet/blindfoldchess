<? include 'chessboard.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
<? include 'head.php'; ?>
  </head>

  <body>

    <div class="container">

<? include 'nav.php'; ?>

      <h1>Games</h1>

            <div class="col-md-6"><div class="block">
        <h3>Practice entire games</h3>

        <div id="board1" class="brd-container"><? generateChessBoardHTML(40); ?></div>
      <br />
      <span id="eventlog"></span>
      </div></div>

    </div> <!-- /container -->

  <script>

  $(document).ready(function(){
    for (var i=0, len = window.startpositions.length;i<len;i++){
      var p = window.startpositions[i];
      drawPiece('board1', p[0],p[1],p[2]);
    }
  });

  </script>

    </div> <!-- /container -->

  </body>
</html>
