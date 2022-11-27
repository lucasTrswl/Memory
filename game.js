console.log("test")

function ChangeText1(){
    document.getElementById("a").innerHTML="Super Smash Bros"
}
function ChangeText2(){
    document.getElementById("a").innerHTML="Rocket League"
}
function ChangeText3(){
    document.getElementById("a").innerHTML="Pokemon"
}
function ChangeText4(){
    document.getElementById("a").innerHTML="Call Of Duty"
}
function ChangeText5(){
    document.getElementById("b").innerHTML="Facile"
}
function ChangeText6(){
    document.getElementById("b").innerHTML="Medium"
}
function ChangeText7(){
    document.getElementById("b").innerHTML="Difficile"
}
function ChangeText8(){
    document.getElementById("b").innerHTML="Impossible"
}
var h1 = document.getElementsByTagName('h2')[0];
var sec = 0;
var min = 0;
var hrs = 0;
var t;
function timer(){
function tick(){
    sec++;
    if (sec >= 60) {
        sec = 0;
        min++;
        if (min >= 60) {
            min = 0;
            hrs++;
        }
    }
}
function add() {
    tick();
    h1.textContent = (hrs > 9 ? hrs : "0" + hrs) 
             + ":" + (min > 9 ? min : "0" + min)
                + ":" + (sec > 9 ? sec : "0" + sec);
    timer();
}
function timer() {
    t = setTimeout(add, 1000);
}

timer();
start.onclick = timer;
stop.onclick = function() {
    clearTimeout(t);
}
}
reset.onclick = function() {
    h1.textContent = "00:00:00";
    seconds = 0; minutes = 0; hours = 0;
}
bouton=document.getElementById("debut");
theme=document.getElementById('a');
diff=document.getElementById('b');
bouton.addEventListener('click',début);
function début(){
    if(theme==="Pokemon"){
        if(diff==="Facile"){
            timer();
        }
        else if(diff==="Normal"){
            timer();
        }
        else if(diff==="Difficile"){
            timer();
        }
        else if(diff==="Impossible"){
            timer();
        }
    }
    else if(theme==="Super Smash Bros"){
        if(diff==="Facile"){
            timer();
        }
        else if(diff==="Normal"){
            timer();
        }
        else if(diff==="Difficile"){
            timer();
        }
        else if(diff==="Impossible"){
            timer();
        }
    }
    else if(theme==="Call Of Duty"){
        if(diff==="Facile"){
            timer();
        }
        else if(diff==="Normal"){
            timer();
        }
        else if(diff==="Difficile"){
            timer();
        }
        else if(diff==="Impossible"){
            timer();
        }
    }
    else if(theme==="Rocket League"){
        if(diff==="Facile"){
            timer();
        }
        else if(diff==="Normal"){
            timer();
        }
        else if(diff==="Difficile"){
            timer();
        }
        else if(diff==="Impossible"){
            timer();
        }
    }
}
