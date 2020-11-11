console.log("Hello Everyone");

function validate() {
  var name = document.form.name.value;
  var username = document.form.username.value;
  var password = document.form.password.value;
  var gender = document.form.gender.value;

  var flag = true;

  if (name==null || name == "") {
    document.getElementById('nameError').innerHTML = "*Name can't be blank";
    flag = false;
  } else {
    if(!/^[a-zA-Z ]+$/.test(name)){
      document.getElementById('nameError').innerHTML = "*Only letters and white space allowed";
      flag = false;
    }
  }

  if (username==null || username == "") {
    document.getElementById('usernameError').innerHTML = "*Username can't be blank";
    flag = false;
  } else {
    if(!/^[a-zA-Z0-9\s]+$/.test(username)){
      document.getElementById('usernameError').nnerHTML = "*Only letters and numbers allowed";
      flag = false;
    }
  }

  

  return flag;

}
