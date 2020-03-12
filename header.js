
function drop() {
    let dropdown = document.getElementsByClassName('dropdown')[0];
    dropdown.classList.toggle('down');
     
      setTimeout(function() {
        dropdown.style.overflow = ('hidden')
      }, 500)
  } 
  
