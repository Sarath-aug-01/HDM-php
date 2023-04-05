content:
about.php
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
    .content{
        font-size: larger;
        align-items: stretch;
    }
    .content p{
            float:right;
    }

    .about {padding: 90px 0;}
    .about .aboutimg figure {margin: 0;}
.about .aboutimg figure img {width: 20%;}
.about .aboutimg h3 {
font-size: 45px;
line-height: 50px;
padding-top: 105px;
font-weight: 500;
}
.about .aboutimg p {color: #000; font-size: 17px; line-height: 23px; padding-top: 10px; float:left;}
.about .aboutimg a {
	max-width: 152px;
background: #000;
width: 100%;
display: inline-block;
text-align: center;
padding: 10px 0px;
color: #fff;
margin-top: 35px;
}

</style>
<div class="about">
      <center><h1 style="color:red">About</h1></center>
      <br>
      <br>
      <div class="aboutimg">
          <center>
        <figure><img src=".\img\about.jpg"></figure>
        </div></center>
        <div class="para">
      <p>                     
          Interior design is the art and science of enhancing the interior of a building to achieve a healthier and more aesthetically pleasing environment for the people using the space. An interior designer is someone who plans, researches, coordinates, and manages such enhancement projects. Interior design is a multifaceted profession that includes conceptual development, space planning, site inspections, programming, research, communicating with the stakeholders of a project, construction management, and execution of the design.
</p>
      world classic items.Home Decor Products, Inc. was a large online retailer of home improvement.When decorating your home, you can reach a point where you wonder.You get the opportunity to transform each and every room into a personality filled space.</p>
    </div>    
 
    </div>
<?php
include "newslettter.php";
include "footer.php";
?>