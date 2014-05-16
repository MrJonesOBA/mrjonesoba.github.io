$(document).ready(function() {
  $('#checkLevel').click(function() {
    $.getJSON("https://script.google.com/a/macros/obamail.co.uk/s/AKfycbwTE3oxDx1y082YORllexLRqTbp88aZcqlIaBBti5H_oryQrA4/exec?callback=?",
              {method:"get_levels"},
              function (data) {
                displayLevel(data);
              });
  });
});


function displayLevel(data) {
  var string = data += ",";
  var commaPosition = 0;
  var levels = [];
  var arrayIndex = 0;
  
  for (var i = 0; i <= string.length; i++) {
    if (string[i] == ",") {
      levels[arrayIndex] = string.substring(commaPosition, i);
      commaPosition = i + 1;
      arrayIndex += 1;
    }
  }

  $(document).ready(function() {
    $("#name").text("Hello " + levels[0]);
    $("#target").text("Your target is " + levels[1]);
    $("#working").text("You are working at " + levels[2]);
  });
  
}


