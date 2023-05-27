

var btns = document.querySelectorAll(".menu_items li");
console.log(btns);
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function () {
    console.log("clicked");
    if (!this.classList.contains("active")) {
      for (var i = 0; i < btns.length; i++) {
        btns[i].classList.remove('active');
      }
      this.classList.add('active');
    }
  });
}


// document.getElementById("upload_content").addEventListener('click',function(){
//   this.click();  
// },false);

var loadFile = function(event) {
    var output = document.getElementById('inputed_media_src');
    
    output.src = URL.createObjectURL(event.target.files[0]);
    
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
    var image_src = document.getElementById('imag_close_btn');
    image_src.style.display = "block";
  };


  document.getElementById('imag_close_btn').addEventListener('click', function(event){
    var image_src = document.getElementById('inputed_media_src');
       image_src.src = "#";
       this.style.display = "none";
       event.preventDefault();
  })

