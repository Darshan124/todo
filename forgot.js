

function changePassword() {

        password = document.getElementById("oldpass").value;
        npassword = document.getElementById("newpass").value;



    var getData = JSON.parse(localStorage.getItem('userData'));

    for (let i = 0; i < getData.length; i++) {
        if (password === getData[i].password) {
            console.log("password Success");
            getData[i].password = npassword;
                console.log(getData[i].password)
            localStorage.setItem('userData', JSON.stringify(getData))
            sessionStorage.setItem("UserProfile", JSON.stringify(getData[i]));
            break;
        }
    }
}
