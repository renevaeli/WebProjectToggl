$(document).ready(function() {
  var togglOn = false;
  var timer;
  var startTime;

  $("#btnToggle").click(function() {
    togglOn = !togglOn;
    toggleButtonText();
    toggleTimer();

  });

    function toggleTimer() {
      if (!togglOn) {
        stopTimer();
      }
      startTime = Date.now();
      var myVar = setInterval(function(){
        if (togglOn) {
          runTimer();
        } else {
          clearInterval(myVar);
        }
      }, 1000);
    }

    function runTimer() {
      var currentTime = Date.now();
      timer = new Date(Math.abs(currentTime - startTime)).toUTCString().substring(17, 26);
      $("#timer").html(timer);
    }

    function stopTimer() {
      $("#timer").html("00:00:00");
      var stopTime = Date.now();
      var description = $("#inputDescription").val();
      $("#inputDescription").val("");

      //sendData(description, startTime, stopTime, timer);
      alert(description + ", " + startTime + ", " + stopTime + ", " + timer);

    }

    function toggleButtonText() {
      if (togglOn) {
        $("#btnToggle").html("Stop");
      } else {
        $("#btnToggle").html("Start");
      }
    }

    function sendData(description, startTime, stopTime, timer) {

    }

});
