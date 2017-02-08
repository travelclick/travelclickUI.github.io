
$('li').each(function() {
  var rgb = $(this).css('background-color');
  rgb = rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);

  function hex(x) {
    return ("0" + parseInt(x).toString(16)).slice(-2);
  }
  rgb = "#" + hex(rgb[1]) + hex(rgb[2]) + hex(rgb[3]);

  $(this).append(" " + rgb);
});