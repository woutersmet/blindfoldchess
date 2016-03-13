  <?php

    //for nav
    $section = preg_replace('/\/|\.php/','',$_SERVER['REQUEST_URI']);

    function generateChessBoardHTML($squareSize = 40){
      $chars = 'abcdefgh';
      echo '<table class="chessboard">';
      for ($row=8;$row>=1;$row--){
        echo '<tr class="brd-row brd-row-' . ($row%2==0 ? 'ev' : 'un'). '">';
        for ($col=1;$col<=8;$col++){
            $cos = $chars[$col-1] . $row;
            echo '<td data-co="' . $cos . '" class="brd-sq brd-sq-'.$cos.' brd-sq-' . ($col%2==0 ? 'ev' : 'un') . '" style="width:'.$squareSize.'px;height:'.$squareSize.'px;"></td>';
        }
        echo "</tr>\n";
      }
      echo '</table>';
      }

  ?>
