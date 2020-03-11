var imgs=[];

imgs[0]='https://static.hitek.fr/img/actualite/2017/01/13/fb_the-wall-from-the-south.jpg';
imgs[1]='https://www.businessinsider.fr/content/uploads/2019/04/s05e06_-_kings_landing-785x588.jpg';
imgs[2]='https://lh3.googleusercontent.com/proxy/Q9fxLSkFkConLsZl_BencEnjveRtPoWqdjtbTGnoTAsb2O0-61duK51sGEXSeMbn3FB9AM11uzKNjet8pZXMdBWk_kMSNK5fnBJhsI5HO5Rts8aLS5VAwI9PfHB_VQPoq5IhuAyBdqcMlg';

var nbImgs=imgs.length;
var position=0;
var time=2000;

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
