var i=0;
var imgs=[];
var time=4000;

imgs[0]='https://static.hitek.fr/img/actualite/2017/01/13/fb_the-wall-from-the-south.jpg';
imgs[1]='https://www.businessinsider.fr/content/uploads/2019/04/s05e06_-_kings_landing-785x588.jpg';
imgs[2]='https://lh3.googleusercontent.com/proxy/Q9fxLSkFkConLsZl_BencEnjveRtPoWqdjtbTGnoTAsb2O0-61duK51sGEXSeMbn3FB9AM11uzKNjet8pZXMdBWk_kMSNK5fnBJhsI5HO5Rts8aLS5VAwI9PfHB_VQPoq5IhuAyBdqcMlg';
function changeImg(){
  document.getElementById("imgSlide").src=imgs[i];
  if(i<imgs.length-1){
    i++;
  }
  else{
    i=0;
  }
  setTimeout('changeImg()',time);
}
changeImg();