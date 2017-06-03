$(document).ready(function() {

  $("#btnLogin").click(function() {
    var user = strip($("#username").val());
    var pass = strip($("#password").val());

    //PERFORM LOGIN CHECKS
    //check html
    //check if neither empty



    var data = "user=" + user + "&pass=" + pass;

    $.ajax({
      type: "POST",
      url: "loginDataDb.php",
      data: data,
      success: function(data) {

      }
    });
  });

  $("#btnGoToRegister").click(function() {
    alert("registerclick");
    window.location.href="register.php";
  });

  function checkUserInput(user, pass) {
    if (user == "" || pass == "") {
      alert("All fields required!");
      clearFields();
    }
    else if (pass1 !== pass2) {
      alert("Passwords don't match!");
      clearFields();
    }
    else {
      alert("got here");
      var data = 'user=' + user + '&pass=' + pass1;
      return data;
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
