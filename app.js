let yearEl = document.getElementById("year");
let hoursEl = document.getElementById("hours");
let minutesEl = document.getElementById("minutes");
let secondsEl = document.getElementById("seconds");
let ampmEl = document.getElementById("ampm");
let date = new Date();

yearEl.innerText = date.getFullYear();


function update(){
    date = new Date();
    let hours = date.getHours();
    let ampm = "AM";
    let minutes = date.getMinutes();

    if (hours >= 12){
        ampm = "PM";
        hours -= 12;
        if (hours == 0){
            hours = 12;
        }
    }

    if (minutes < 10){
        minutes = "0"+minutes;
    }

    hoursEl.innerText = hours;
    minutesEl.innerText = minutes;
    secondsEl.innerText = date.getSeconds();
    ampmEl.innerText = ampm;
}

setInterval(update, 200);
