//for some reason register.js never got loaded, so I had to rename to registerUser.js

$(document).ready(function() {
  //alert("register.js loaded");

  $("#btnRegister").click(function() {
    //alert("btnRegister clicked");

    var user = strip($("#inputNewUser").val());
    var pass1 = strip($("#inputNewPass1").val());
    var pass2 = strip($("#inputNewPass2").val());
    //alert(user + " " + pass1 + " " + pass2);

    var data = checkUserInput(user, pass1, pass2);
    if (data == undefined) {
      return;
    }
    //alert(data);

    $.ajax({
        type: "POST",
        url: "db/registerDb.php",
        data: data,
        success: function(data) {
          //alert(data);
          if (data == "Success") {
            alert("Registration successful, please log in.")
            window.location.href="login.php";
          }
          else {
            alert(data);
            clearFields();
          }
        }
    });
  });

  function checkUserInput(user, pass1, pass2) {
    if (user == "" || pass1 == "" || pass2 == "") {
      alert("All fields required!");
      clearFields();
    }
    else if (pass1 !== pass2) {
      alert("Passwords don't match!");
      clearFields();
    }
    else {
      //alert("got here");
      var data = 'user=' + user + '&pass=' + pass1;
      return data;
    }
  }

  function strip(html) {
     var tmp = document.createElement("DIV");
     tmp.innerHTML = html;
     return tmp.textContent || tmp.innerText || "";
  }

  function clearFields() {
    $("#inputNewUser").val("");
    $("#inputNewPass1").val("");
    $("#inputNewPass2").val("");
    return;
  }

});
