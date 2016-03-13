<? include 'chessboard.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
<? include 'head.php'; ?>
  </head>

  <body>

    <div class="container">

      <? include 'nav.php'; ?>

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron clearfix">
        <div id="board1" class="pull-right brd-container"><? generateChessBoardHTML(30); ?></div>
        <h1>Blindfold Chess Practice</h1>

        <p>Practice your blindfold chess skills</p>


        <p>
          <a class="btn btn-lg btn-primary" href="coordinates.php" role="button">Start practice &raquo;</a>
        </p>
      </div>

      <h2>About this site</h2>
      <ul>
      <li>
      Inspired by the amazing <a target="_blank" href="https://www.chess.com/blog/Samantha212/playing-blindfold-chess-with-your-mind-wide-open">Blindfold chess tutorial on chess.com</a>.
      </li>
      <li>
      Chess piece icons taken from <a target="_blank" href="http://www.jinchess.com/chessboard/composer/">the great chess diagram editor at jinchess.com</a>.
      </li>
      </ul>
    </div> <!-- /container -->

  </body>
</html>
