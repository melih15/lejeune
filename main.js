function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}


//email check
function validation() {
    let form = document.getElementById('form')
    let email = document.getElementById('email').value 

    let text = document.getElementById('text')
    let pattern = /^[^ ]+@[^ ]+\.[a-z]{1,3}$/
    if (email.match(pattern)){
        form.classList.add('valid')
        form.classList.remove('invalid')
        text.innerHTML = "Please Email Address in valid"

        text.style.color = '#00ff00'
    } else {
        form.classList.remove('valid')
        form.classList.add('invalid')
        text.innerHTML = "Please Enter Valid Email Address"
        text.style.color = '#ff0000'
    } 
    if (email == '') {
        form.classList.remove('valid')
        form.classList.remove('invalid')
        text.innerHTML = ""
        text.style.color = '#00ff00'
    }
}

//password check
var check = function() {
    if (document.getElementById('password').value == document.getElementById('checkPassword').value) {
        document.getElementById('alertPassword').style.color = '#00ff00';
        document.getElementById('alertPassword').innerHTML = '<span><i class="fas fa-check-circle"></i>Match !</span>';
    } else {
        document.getElementById('alertPassword').style.color = '#ff0000';
        document.getElementById('alertPassword').innerHTML = '<span><i class="fas fa-exclamation-triangle"></i>Not matching !</span>';
    }
}
