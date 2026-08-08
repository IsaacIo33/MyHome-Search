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

    if (hours >= 12){
        ampm = "PM";
        hours -= 12;
    }

    hoursEl.innerText = hours;
    minutesEl.innerText = date.getMinutes();
    secondsEl.innerText = date.getSeconds();
    ampmEl.innerText = ampm;
}

setInterval(update, 200);
