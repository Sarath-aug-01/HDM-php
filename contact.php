<?php
include 'header.php';
?>
     <script id="jsbin-javascript">
(function (global) {
	if(typeof (global) === "undefined")
	{
		throw new Error("window is undefined");
	}
    var _hash = "!";
    var noBackPlease = function () {
        global.location.href += "#";
		// making sure we have the fruit available for juice....
		// 50 milliseconds for just once do not cost much (^__^)
        global.setTimeout(function () {
            global.location.href += "!";
        }, 50);
    };	
	// Earlier we had setInerval here....
    global.onhashchange = function () {
        if (global.location.hash !== _hash) {
            global.location.hash = _hash;
        }
    };
    global.onload = function () {        
		noBackPlease();
		// disables backspace on page except on input fields and textarea..
		document.body.onkeydown = function (e) {
            var elm = e.target.nodeName.toLowerCase();
            if (e.which === 8 && (elm !== 'input' && elm  !== 'textarea')) {
                e.preventDefault();
            }
            // stopping event bubbling up the DOM tree..
            e.stopPropagation();
        };		
    };
})(window);
</script>
<style>
    
</style>
<br>
<div class="contact">
                     <center><h2 style="color:red">Contact</h2></center>
</div>
<br>


<center>
<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 padddd">
   <form class="main_form">
       <div class="row"><br>
           <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
               <input class="form-control" placeholder="Name" type="text" name="Name">
           </div>
           <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
               <input class="form-control" placeholder="Email" type="text" name="Email">
           </div>
           <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
               <input class="form-control" placeholder="Phone" type="text" name="Phone">
           </div>
           <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
               <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
           </div>
           <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
               <button class="send">Send</button><br>
           </div>
       </div>
   </form></center>
   <br>
   <br>
</div>
</div>
</div>
</div>
<br>
<?php
include "newslettter.php";
include "footer.php";
?>