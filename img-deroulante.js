var imgs=[];

imgs[0]='https://cdn.pixabay.com/photo/2019/01/27/21/27/dubrovnik-3959074_960_720.jpg';
imgs[1]='http://sf.co.ua/12/09/wallpaper-2292997.jpg';
imgs[2]='https://i.pinimg.com/originals/4e/e7/fe/4ee7fe4a81fe5a9b77a0d3459886bd7d.jpg';
imgs[3]='https://blog.britishmuseum.org/wp-content/uploads/2017/07/xDothraki-on-the-steppe.jpg.pagespeed.ic.rF0iyAzfh9.jpg';
imgs[4]='https://resize-parismatch.lanmedia.fr/img/var/news/storage/images/paris-match/culture/medias/game-of-thrones-qui-est-assis-sur-le-trone-de-fer-a-la-fin-1624964/26549681-1-fre-FR/Game-of-Thrones-Qui-est-assis-sur-le-Trone-de-fer-a-la-fin.jpg';

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

 
}

function go(){
  var valueSelect = document.getElementById('select').value;
  console.log(valueSelect);
   if (valueSelect==""){
       alert("Veuillez choisir une déstination");
   }
   else if (valueSelect=="1"){
     document.location.href="port_real.php";
   }
   else if (valueSelect=="0"){
     document.location.href="winterfell.php";
   }
 }

function drop() {
  document.getElementsByClassName('dropdown')[0].classList.toggle('down');
  
    setTimeout(function() {
      document.getElementsByClassName('dropdown')[0].style.overflow = ('hidden')
    }, 500)
} 
  
function changePrix(){
  var Destination = document.getElementById('destination').value;
  var nbPersonnes = document.getElementById('voyageur').value;
  var prix = document.getElementById('spanPO');
  if (Destination=="port_real"){
    prix.innerHTML = nbPersonnes*249;
  }
  else if(Destination=="winterfell"){
    prix.innerHTML = nbPersonnes*299;
  }
  else{
    prix.innerHTML = 0;
  }
}