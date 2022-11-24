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

bouton.addEventListener('click',);

const cards = document.querySelectorAll(".card"),
timeTag = document.querySelector(".time b"),
flipsTag = document.querySelector(".flips b"),
refreshBtn = document.querySelector(".details button");

let maxTime = 20;
let timeLeft = maxTime;
let flips = 0;
let matchedCard = 0;
let disableDeck = false;
let isPlaying = false;
let cardOne, cardTwo, timer;

function initTimer() {
    if(timeLeft <= 0) {
        return clearInterval(timer);
    }
    timeLeft--;
    timeTag.innerText = timeLeft;
}

function flipCard({target: clickedCard}) {
    if(!isPlaying) {
        isPlaying = true;
        timer = setInterval(initTimer, 1000);
    }
    if(clickedCard !== cardOne && !disableDeck && timeLeft > 0) {
        flips++;
        flipsTag.innerText = flips;
        clickedCard.classList.add("flip");
        if(!cardOne) {
            return cardOne = clickedCard;
        }
        cardTwo = clickedCard;
        disableDeck = true;
        let cardOneImg = cardOne.querySelector(".back-view img").src,
        cardTwoImg = cardTwo.querySelector(".back-view img").src;
        matchCards(cardOneImg, cardTwoImg);
    }
}

function matchCards(img1, img2) {
    if(img1 === img2) {
        matchedCard++;
        if(matchedCard == 6 && timeLeft > 0) {
            return clearInterval(timer);
        }
        cardOne.removeEventListener("click", flipCard);
        cardTwo.removeEventListener("click", flipCard);
        cardOne = cardTwo = "";
        return disableDeck = false;
    }

    setTimeout(() => {
        cardOne.classList.add("shake");
        cardTwo.classList.add("shake");
    }, 400);

    setTimeout(() => {
        cardOne.classList.remove("shake", "flip");
        cardTwo.classList.remove("shake", "flip");
        cardOne = cardTwo = "";
        disableDeck = false;
    }, 1200);
}

function shuffleCard() {
    timeLeft = maxTime;
    flips = matchedCard = 0;
    cardOne = cardTwo = "";
    clearInterval(timer);
    timeTag.innerText = timeLeft;
    flipsTag.innerText = flips;
    disableDeck = isPlaying = false;

    let arr = [1, 2, 3, 4, 5, 6, 1, 2, 3, 4, 5, 6];
    arr.sort(() => Math.random() > 0.5 ? 1 : -1);

    cards.forEach((card, index) => {
        card.classList.remove("flip");
        let imgTag = card.querySelector(".back-view img");
        setTimeout(() => {
            imgTag.src = `images/img-${arr[index]}.png`;
        }, 500);
        card.addEventListener("click", flipCard);
    });
}

shuffleCard();

refreshBtn.addEventListener("click", shuffleCard);

cards.forEach(card => {
    card.addEventListener("click", flipCard);