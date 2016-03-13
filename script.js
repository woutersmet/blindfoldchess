window.chars = ' abcdefgh';

function selectSquare(boardid,col,row){
  var selector = '#' + boardid + ' td[data-co="'+col+row + '"]';
  console.log("Selecting square " + col + row + " on board " + boardid + '... Selector:' + selector);

  $('td.brd-sq').removeClass('sq-selected');
  $(selector).addClass('sq-selected');
  $(selector).html(col + row);
}

  window.startpositions = [
      ['br','a','8'],['bn','b','8'],['bb','c','8'],['bq','d','8'],['bk','e','8'],['bb','f','8'],['bn','g','8'],['br','h','8'],
      ['bp','a','7'],['bp','b','7'],['bp','c','7'],['bp','d','7'],['bp','e','7'],['bp','f','7'],['bp','g','7'],['bp','h','7'],
      ['wp','a','2'],['wp','b','2'],['wp','c','2'],['wp','d','2'],['wp','e','2'],['wp','f','2'],['wp','g','2'],['wp','h','2'],
      ['wr','a','1'],['wn','b','1'],['wb','c','1'],['wq','d','1'],['wk','e','1'],['wb','f','1'],['wn','g','1'],['wr','h','1']
    ]

  function movePiece(){

  }


  //not ideal: looks at CURSOR rather than piece position
  function onPieceMoved(e) {
    var offset = $('.chessboard').offset();
    var relativeX = (e.pageX - offset.left);
    var relativeY = (e.pageY - offset.top);

    var col = Math.floor(relativeX / 40) + 1;
    var row = 8 - Math.floor(relativeY / 40);

    var col=window.chars[col];

    var piece = $(this).data('piece');
    $('#eventlog').html("Moved " + piece + " to position " + col + row);
  }

  //piece something like 'wr' for white rook
  function drawPiece(boardid, piece,col,row){
    var pieceEl = $('<img class="piece" src="piece-' + piece + '.gif" data-piece="'+piece+'" />');
    $('#'+boardid+' .brd-sq-' + col + row).html(pieceEl);
    pieceEl.draggable({
        snap : '.brd-sq',
        stop : onPieceMoved,
        containment: '.chessboard'
    });
  }
