var imgs=[];

imgs[0]='https://static.hitek.fr/img/actualite/2017/01/13/fb_the-wall-from-the-south.jpg';
imgs[1]='https://www.businessinsider.fr/content/uploads/2019/04/s05e06_-_kings_landing-785x588.jpg';
imgs[2]='https://i.pinimg.com/originals/4e/e7/fe/4ee7fe4a81fe5a9b77a0d3459886bd7d.jpg';

var nbImgs=imgs.length;
var position=0;
var time=4000;

function changeImg(){
    document.getElementById("imgSlide").src=imgs[position];
    if(position<nbImgs-1){
      position++;
    }
    else{
      position=0;
    }
    setTimeout('changeImg()',time);
  }
  changeImg();

function slide (x){

   /*  document.getElementById("imgSlide").className="masquer"; */

    if (x=="avant")
        position++
    else
        position--

    if (position<0){
        position=nbImgs-1;
    }
    else if(position==nbImgs){
        position=0;
    }
    document.getElementById('imgSlide').src = imgs[position];

  /*    var attenteTransition= setTimeout(function(){
        document.getElementById("imgSlide").className="";
        document.getElementById('imgSlide').src = imgs[position];},200);  */
}

function drop() {
  document.getElementsByClassName('dropdown')[0].classList.toggle('down');
  
    setTimeout(function() {
      document.getElementsByClassName('dropdown')[0].style.overflow = ('hidden')
    }, 500)
} 
  

