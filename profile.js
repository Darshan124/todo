let obj = JSON.parse(sessionStorage.getItem("UserProfile"));
// let obj = JSON.parse(localStorage.getItem('userData'));


document.getElementById("profile_name").innerText = obj.name;
document.getElementById("profile_mail").innerText = obj.email;
document.getElementById("profile_number").innerText = obj.number;
document.getElementById("profile_gender").innerText = obj.gender;
document.getElementById("profile_date").innerText = obj.DOB;

