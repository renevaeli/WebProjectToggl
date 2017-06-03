$(document).ready(function() {

  $("#btnLogin").click(function() {
    var user = strip($("#inputUser").val());
    var pass = strip($("#inputPass").val());

    var data = checkUserInput(user, pass);
    if (data == undefined) {
      return;
    }
    //alert(data);

    $.ajax({
      type: "POST",
      url: "db/loginDataDb.php",
      data: data,
      success: function(data) {
        //alert(data);
        if (data == "Success") {
          alert("Login successful. Directing to Toggl.")
          window.location.href="timer.php";
        }
        else {
          alert(data);
          clearFields();
        }
      }
    });
  });

  function checkUserInput(user, pass) {
    if (user == "" || pass == "") {
      alert("All fields required!");
      clearFields();
    }
    else {
      //alert("got here");
      var data = 'user=' + user + '&pass=' + pass;
      return data;
    }
  }

  function strip(html) {
     var tmp = document.createElement("DIV");
     tmp.innerHTML = html;
     return tmp.textContent || tmp.innerText || "";
  }

  function clearFields() {
    $("#inputUser").val("");
    $("#inputPass").val("");
    return;
  }

});
