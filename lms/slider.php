		
                <div>


<img class="mySlides" src="library1.jpg" width="700" height="550">
<img class="mySlides" src="library2.jpg" width="1169" height="550">
<img class="mySlides" src="library3.jpg" width="400" height="550">

    
    </div>
    
<script>
var slideIndex = 0;
carousel();

function carousel() {
var i;
var x = document.getElementsByClassName("mySlides");
for (i = 0; i < x.length; i++) {
x[i].style.display = "none";
}
slideIndex++;
if (slideIndex > x.length) {slideIndex = 1}
x[slideIndex-1].style.display = "block";
setTimeout(carousel, 2500); // Change image every 2.5 seconds
}
   </script>

