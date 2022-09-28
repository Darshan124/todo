const email_login = document.getElementById('email_login');
const password_login = document.getElementById('password_login');

// Select all input elements for varification
const userName = document.getElementById("name");
const email2 = document.getElementById("email2");

const password = document.getElementById("password");

const phoneNumber = document.getElementById("phoneNumber");

const gender = document.registration;

const Date1 = document.getElementById("date");

//function for Log in page_________________________________________________________________
function formValidation2() {

    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (!email2.value.match(mailformat)) {
        alert("Please enter a valid email!");
        email2.focus();
        return false;
    }

    var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
    if (!password.value.match(passw)) {
        alert("Password must contain at least one uppercase letter, one numeric digit, and one special character, and must be between 8 and 15 characters long.");
        password.focus();
        return false;
    }

    return true;
}



// function for form varification Registration page_________________________________________________________________
function formValidation() {

    // checking length of name
    if (userName.value.length < 2 || userName.value.length > 20) {
        alert("Name length should be more than 2 and less than 21 charaters");
        userName.focus();
        return false;
    }



    // checking email format

    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (!email2.value.match(mailformat)) {
        alert("Please enter a valid email!");
        email2.focus();
        return false;
    }

    // checking password character pattern

    var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
    if (!password.value.match(passw)) {
        alert("Password must contain at least one uppercase letter, one numeric digit, and one special character, and must be between 8 and 15 characters long.");
        password.focus();
        return false;
    }


    // checking phone number
    if (!phoneNumber.value.match(/^[1-9][0-9]{9}$/)) {
        alert("Phone number must be 10 characters long number and first digit can't be 0!");
        phoneNumber.focus();
        return false;
    }


    // checking gender
    if (gender.gender.value === "") {
        alert("Please select your gender!");
        return false;
    }

    // date geting

    if (Date1.value == "") {
        alert("date is in valid");
        return false;
    }
    return true;
}


var user_ary = [];

function getval() {
    const getname = document.getElementById('name').value;
    const getemail = document.getElementById('email2').value;
    const getpassword = document.getElementById('password').value;
    const getnumber = document.getElementById('phoneNumber').value;
    const getdate = document.getElementById('date').value;

    var getgender
    if (document.getElementById('r1').checked) {
        getgender = document.getElementById('r1').value;
    }
    if (document.getElementById('r2').checked) {
        getgender = document.getElementById('r2').value;
    }
    if (document.getElementById('r3').checked) {
        getgender = document.getElementById('r3').value;
    }




    var user = {
        name: getname,
        email: getemail,
        password: getpassword,
        number: getnumber,
        gender: getgender,
        DOB: getdate
    }
    let getUserDetails = JSON.parse(localStorage.getItem('userData'));

    if (getUserDetails === null) {
        user_ary.push(user)
        localStorage.setItem('userData', JSON.stringify(user_ary))
        window.location.href='./log_in.php'
    } else {
        getUserDetails.forEach(ele => {
            user_ary.push(ele)
        });
        user_ary.push(user)
        localStorage.setItem('userData', JSON.stringify(user_ary))
        console.log(user_ary);
        window.location.href='./log_in.php'

    }


}

//document.getElementById("RButton").onclick = function () {
//        location.href = "www.yoursite.com";
//    };

function check() { 

    Boolean = false;
    var userEmail = document.getElementById('email2').value;
    var userPw = document.getElementById('password').value;
    console.log(userEmail);

    var user = JSON.parse(localStorage.getItem('userData'));

    for (var i = 0; i < user.length; i++) {
console.log(user[i].email);
        if (userEmail === user[i].email && userPw === user[i].password ) {
            alert('You are loged in.');
            console.log("In")
            sessionStorage.setItem("UserProfile",JSON.stringify(user[i]));
            location.href = "./Dashbord.php";
            break;

        }
    }

    if (Boolean == false) {
        alert("plese enter valid email and password")
    }
}




