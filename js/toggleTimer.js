$(document).ready(function() {
  var userId;
  var togglOn = false;
  var timer;
  var startTime;

  getUserId();

  $("#btnLogOut").click(function() {
    endSession();
  });

  $("#btnToggle").click(function() {
    togglOn = !togglOn;
    toggleButtonText();
    toggleTimer();
  });

  function getUserId() {
    $.ajax({
      type: "POST",
      url: "db/session.php",
      data: { post: "Start" },
      success: function(data) {
        userId = data;
        loadUserTracks(userId);
      }
    });
  }

  function endSession() {
    $.ajax({
      type: "POST",
      url: "db/session.php",
      data: { post: "Stop" },
      success: function(data) {
        alert(data);
        window.location.href="login.php";
      }
    });
  }

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
      var description = strip($("#inputDescription").val());
      $("#inputDescription").val("");

      sendTrackData(userId, description, startTime, stopTime, timer);
      //alert(description + ", " + startTime + ", " + stopTime + ", " + timer);

    }

    function toggleButtonText() {
      if (togglOn) {
        $("#btnToggle").html("Stop");
      } else {
        $("#btnToggle").html("Start");
      }
    }

    function sendTrackData(userId, description, startTime, stopTime, timer) {
      var data = "userId=" + userId + "&description=" + description + "&startTime=" + startTime + "&stopTime=" + stopTime + "&timer=" + timer;
      //alert(data);

      $.ajax({
        type: "POST",
        url: "db/sendTrackData.php",
        data: data,
        success: function(data) {
          //alert(data);
          $("#trackData").append(data);
        }
      });
    }

    function loadUserTracks(userId) {
      var data = "userId=" + userId;

      $.ajax({
        type: "POST",
        url: "db/loadUserTracks.php",
        data: data,
        success: function(data) {
          //$("#test").html(data);
          $("#trackData").append(data);
        }
      });
    }

    function strip(html)
    {
       var tmp = document.createElement("DIV");
       tmp.innerHTML = html;
       return tmp.textContent || tmp.innerText || "";
    }


});
