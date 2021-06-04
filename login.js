function validateRegForm() {
    var username = document.forms["registerForm"]["name"].value;
    var email = document.forms["registerForm"]["Email"].value;
    var psw = document.forms["registerForm"]["password"].value;
    var cpsw = document.forms["registerForm"]["confirmPassword"].value;
    if (username == "") {
      alert("Name must be filled out");
      return false;
    }
    if (email == "") {
        alert("E-mail must be filled out");
        return false;
      }
      if (psw == "") {
        alert("Password must be filled out");
        return false;
      }
      if (cpsw == "") {
        alert("You must confirm your password");
        return false;
      }
      if (cpsw != psw){
          alert("Passwords are not matching");
          return false;
      }    
  }
  function validateLoginForm(){
    var email = document.forms["loginForm"]["Email"].value;
    var psw = document.forms["loginForm"]["password"].value;
    if (email == "") {
        alert("E-mail must be filled out");
        return false;
      }
    if (psw == "") {
        alert("Password must be filled out");
        return false;
  }
}