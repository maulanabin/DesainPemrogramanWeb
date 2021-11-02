function myFunction2() {
  let jumlahKarakter = document.getElementById("password");
  const batasKarakter = 8;
  let text;

  if (jumlahKarakter.value.length <= batasKarakter) {
      text = "Jumlah password minimal 8 karakter"
  } else {
      text = "";
  }
  document.getElementById("demo2").innerHTML = text;
}

      var i = 0;
      $(document).ready(function(){
        $('.slidertitle, #slider img').hide();
        showNextImage();
        setInterval('showNextImage()', 3000);
      });

      function showNextImage(){
        i++;
        $('#sliderImage'+i).appendTo('#slider').fadeIn(1100).delay(1100).fadeOut(1100);
        $('#title'+i).appendTo('#slider').fadeIn(1100).delay(1100).fadeOut(1100);
        if(i==3){
          i=0;
        }
      };


