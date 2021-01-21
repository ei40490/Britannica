
        var i = 0;
        function read() {
          if (!i) {
            document.getElementById("more").style.display = "inline";
            document.getElementById("dots").style.display = "none";
            document.getElementById("read").innerHTML = "Read less";
            i = 1;
          } else {
            document.getElementById("more").style.display = "none";
            document.getElementById("dots").style.display = "inline";
            document.getElementById("read").innerHTML = "Read more";
            i = 0;
          }
        }


        var slideIndex = 0;
        // showSlides();

        function showSlides() {
        var i;
        var imgSlides = document.getElementsByClassName("slides");
        for (i = 0; i < imgSlides.length; i++) {
            imgSlides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex > imgSlides.length) {slideIndex = 1}    
        imgSlides[slideIndex-1].style.display = "block";  
        setTimeout(showSlides, 3000); 
        }
     
