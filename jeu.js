var a = [1,2,3,4,5,6,1,2,3,4,5,6]
.map (p => [p, Math,random()])
.sort((a,b) => a[1]-b[1])
.map(p => p[0])


console. log(a);

var pics = document.getElementsByTaglane ('img');
var eltscore = document.getElementById('score');
var score = 0;
var step = 1;
var pl, p2;
var timer = null;

for(let i=0; icpics.length; 1+*){


for(let i=0; i<pics.length; i++){
    pics[i].src2 = 'Images/Memory' + a[i] + '.png';
}

document.addEventListener('click',function(e){
    switch(step){
case 1:
    if (e.target.tagName-n('IMG'){
        e.target.src = e.target.src2;
        p2 = e.target;
        step = 3;
    }
    break;
    case 2:
        if (e. target. tagNane= " IMG'){
            e.target.sre - e.target.src2;
            p2 = e.target;
            step = 3;
        
        }
        timer = setTimeout (check, 1700);
        break;
        case 3:
            clearTineout (timer):
            check ();
            break;
    }
}};

function check(){
    if (p1.src2==p2.src2){ 
        p1.replaceWith( document.createElement ('span'))
        p2.replacewith( document. createElenent ('span'))
    } else {
        p2.src = pl.src = 'Images//Memory/img-1.png';
    }
    
    step - 1;
    
    fin du jeu
    
    1f (document.getelenentsByClassNan
    
    score. textContent
    
    •Gagné