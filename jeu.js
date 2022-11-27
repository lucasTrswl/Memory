var a = [1,2,3,4,5,6,7,8,1,2,3,4,5,6,7,8]
.map (p => [p, Math.random()])
.sort((a,b) => a[1]-b[1])
.map(p => p[0])


console. log(a);

var pics = document.getElementsByTagName ('img');
var eltscore = document.getElementById('score');
var score = 0;
var step = 1;
var p1, p2;
var timer = null;

for(let i=0; i<pics.length; i++){
    pics[i].src2 = './Images/Memory/img-' + a[i] + '.png';
}

document.addEventListener('click',function(e){
    switch(step){
        case 1:
            if (e.target.tagName=='IMG'){
                e.target.src = e.target.src2;
                p2 = e.target;
                step = 2;
            }
            break;
        case 2:
            if (e.target.tagNane=='IMG'){
            e.target.src = e.target.src2;
            p2 = e.target;
            step = 3;
        }
        timer = setTimeout (check, 1700);
        break;
        case 3:
            clearTimeout(timer);
            check();
            break;
    }
});

function check(){
    if (p1.src2==p2.src2){ 
        p1.replaceWith( document.createElement ('span'))
        p2.replacewith( document. createElenent ('span'))
        score += 50;
    } else {
        p2.src = p1.src = 'Images//Memory/img-1.png';
    }
    step = 1;
    if (document.getElementsByClassName('img').length==0){
        score.textContent = 'Gagne !'
    }
}