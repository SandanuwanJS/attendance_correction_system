function checkValidation() {
    var personid = document.getElementById('pid').value;
    var fingerprintname = document.getElementById('nameinfinger').value;
    var gender = document.querySelector('input[name="gender"]:checked');
    var department = document.getElementById('mainDepartments').value;
    var manpower = document.getElementById('manpower').value;
    var phoneNumber = document.getElementById('telenum').value;

    var validate = true;
    if (personid === '') {
        validate = false;
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "Person ID is Required!"
        });
    }
    else if (fingerprintname === '') {
        validate = false;
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "Finger Print Name is Required!"
        });
    }
    else if(!validatePhoneNumber(phoneNumber)){
        validate = false;
        Swal.fire({
        icon: "error",
        title: "Error",
        text: "Please Enter Valid Telephone Number"
      });
    }
    else if (!gender) {
        validate = false;
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "Gender is Required!"
        });
    }
    else if (department === '') {
        validate = false;
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "Department Name is Required!"
        });
    }
    else if (manpower === '') {
        validate = false;
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "Manpower Company Name is Required!"
        });
    }

    if (validate) {
        document.getElementById('em_registerForm').submit();
    }
}


// **************** Validate pattern of the telephone number ****************
function validatePhoneNumber(phoneNumber) {
    var pattern = /^\(\d{3}\) \d{3}-\d{4}$/;
    return pattern.test(phoneNumber);
}


document.getElementById('telenum').addEventListener('input', function(e) {
    let input = e.target.value.replace(/\D/g, '');

    if (input.length > 10) {
        input = input.slice(0, 10);
    }

// **************** Format the phone number as (xxx) xxx-xxxx ****************
    let formattedNumber = '';
    if (input.length > 0) {
        formattedNumber += '(' + input.substring(0, 3);
    }
    if (input.length >= 4) {
        formattedNumber += ') ' + input.substring(3, 6);
    }
    if (input.length >= 7) {
        formattedNumber += '-' + input.substring(6, 10);
    }

    // Set the formatted value back to the input field
    e.target.value = formattedNumber;
});


// **************** Prevent non-numeric input ****************
document.getElementById('telenum').addEventListener('keydown', function (e) {
    let allowedKeys = ['Backspace', 'Delete', 'Tab', 'Escape', 'Enter', 'ArrowLeft', 'ArrowRight'];
    let isNumberKey = (e.key >= '0' && e.key <= '9');

    if (!allowedKeys.includes(e.key) && !isNumberKey) {
        e.preventDefault();
    }
});
