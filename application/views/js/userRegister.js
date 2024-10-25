function checkValidation(){
    
    var designation = document.getElementById('designation').value;
    var fname = document.getElementById('fname').value;
    var lname = document.getElementById('lname').value;
    var email = document.getElementById('email').value;
    var uname = document.getElementById('uname').value;
    var password1 = document.getElementById('password1').value;
    var password2 = document.getElementById('password2').value;
    
    var pass = true;
    if(designation===''){
        pass = false;
        Swal.fire({
        icon: "error",
        title: "Error",
        text: "Please enter user designation"
      });
    }else if(fname===''){
        pass = false;
        Swal.fire({
        icon: "error",
        title: "Error",
        text: "Please enter First Name"
      });
    }else if(lname===''){
        pass = false;
        Swal.fire({
        icon: "error",
        title: "Error",
        text: "Please enter Last Name"
      });
    } else if(document.getElementById('email').value==='') {
      pass = false;
        Swal.fire({
        icon: "error",
        title: "Error",
        text: "Please enter E-mail Address"
      });
    
    }else if(!validateEmail(email)){
        pass = false;
        Swal.fire({
        icon: "error",
        title: "Error",
        text: "Please enter valid E-mail address"
      });
    }else if(uname===''){
        pass = false;
        Swal.fire({
        icon: "error",
        title: "Error",
        text: "Please enter User Name"
      });
    }else if(password1===''){
        pass = false;
        Swal.fire({
        icon: "error",
        title: "Error",
        text: "Please enter Password"
      });
    }else if(password2===''){
        pass = false;
        Swal.fire({ 
        icon: "error",
        title: "Error",
        text: "Please Re-type your Password to confirm"
      });
    }else if(password1!=password2){
        pass = false;
        Swal.fire({
        icon: "error",
        title: "Error",
        text: "Confirmation of your password is wrong"
      });
    }
    
    if(pass){
        document.getElementById('registerForm').submit();
        
    }
}

function validateEmail(email) {
  var re = /\S+@\S+\.\S+/;
  return re.test(email);
}

