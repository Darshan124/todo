let obj = JSON.parse(sessionStorage.getItem("UserProfile"));

document.getElementById("name").value = obj.name;
document.getElementById("email").value = obj.email;
document.getElementById("phone").value = obj.number;
document.getElementById("gender").value = obj.gender;
document.getElementById("dob").value = obj.DOB;




function editData(){

        fullName = document.getElementById("name").value,
        email=  document.getElementById("email").value,
        mobileNo = document.getElementById("phone").value,
        gender =  document.getElementById("gender").value,       
        dob = document.getElementById("dob").value
    
    
    let getData = JSON.parse(localStorage.getItem('userData'));

    for (let i = 0; i < getData.length; i++) {
        if (email === getData[i].email) {
            console.log("Email Success");
            getData[i].name = fullName;
            getData[i].gender = gender;
            getData[i].email = email;
            getData[i].number = mobileNo;
            getData[i].gender = gender;

            localStorage.setItem('userData', JSON.stringify(getData))
            sessionStorage.setItem("UserProfile",JSON.stringify(getData[i]));
            break;
        }
    }
    
}