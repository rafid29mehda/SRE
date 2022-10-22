<html>
 <head>
   <title>Scanner</title>
   <style>
    body{
	 margin-top: 0;
	 padding-top: 0;
	}
     ul.list{
	  margin: 0;
	  padding: 0;
	  list-style: unordered;
	  
     }
	 ul.list li{
	   text-decoration: none;
	   /* display: block; */
	   display: inline-block;
	   background-color: #2B6038;
	   width: 187px;
	   text-align: center;
	   border-color: rgb(255, 255, 255);
	   border-style: solid;
	   border-width: 1px;
	   height:60px;
	   display: flex;
	   justify-content: center;
	   align-items: center;
	 }
	 ul.list a{
	   color: white;
	   text-align: center;
	   text-decoration: none;
	   margin: auto;
	   text-decoration: none;
	 }
	 ul.list a li:hover{
	   color: #2B6038;
	   background-color: black;
	   /* background-color: silver; */
	   /* border: 1px solid blue; */
	 }
	 
	 .imagec{
	   border-radius: 100px;
	   padding: 40px;
	   text-align: center;
	   vertical-align: middle;
	 }
	 .parent{
	   width: 190px;
	   background-color: #4FBA6A;
	   display: block;
	   height: 100%;
	   margin-top: 0px;
	   height: 716px;
	 }
	 .name{
	   margin-left: 30px;
	   padding: 0;
	   color: white;
	   font-size: 20px;
	   text-align: center;
	   margin: auto;
	   text-align: center;
	   margin: auto;
	 }
	 .id{
	  margin-left: 45px;
	  color: white;
	  font-size: 20px;
	  
	 }
	 .features{
	   display: block;
	   background-color: white;
	   width: 80px;
	   height: 20px;
	 }
	 
		.review{
	     margin-left: 190px;
		 background-color: #e5e4d7;
		 display: inline-block;
		 padding: 50px;
		 margin-top: 0px;
		 width:  960px;
		 height: 600px;
		 position: absolute;
		 top: 34px;
		 left: 24px;
		 box-shadow: 10px 10px 5px silver;
	   }
		.about{
		 width: 900px;
		 height: 250px;
		 background-color: white;
		 margin-left: 250px;
		 margin-top: 40px;
		 padding-top: 40px;
		 position: absolute;
		 top: 60px;
		 left: 40px;
		 border: 2px solid #2B6038;
		 border-width: thick;
		 overflow: auto;
		 box-shadow: 10px 10px 5px #2B6038;
		}
		h2{
		 margin-left: 45px;
		 font-family: Arial;
		}
		.para{
		 margin-left: 45px;
		 font-family: Arial;
		}
		.recent{
		 width: 900px;
		 height: 250px;
		 background-color: white;
		 position: absolute;
		 top: 450px;
		 left: 289px;
		 border: 2px solid #2B6038;
		 border-width: thick;
		 overflow: auto;
		 box-shadow: 10px 10px 5px #2B6038;
		}
		.review .a{
			margin-left: auto;
			margin-right: auto;
		}
		.img{
			width: 800px;
			height: auto;
		}
		
	</style>
	
 </head>
 <body> 
    
    <div class="parent">
	  <img src="../img/prof.png" class="imagec">
	  <p class="name">Ashikur Rahman</p>
	  <p class="id"> ID:1000121 </p>
	  <ul class="list">
	    <a href="/dashboard"><li>HOME</li></a>
	    <a href="/schedule"><li>SCHEDULE</li></a>
	    <a href="/profile"><li>PROFILE</li></a>
	    <a href="/Scanner"><li>SCANNER</li></a>
	    <a href="#"><li>SETTINGS</li></a>
	  </ul>
	</div>
	
	<div id="nav2">
		<p class="review">
		 <a href="new 3.html"><img class="img" src="../img/Scanner (2).png"></a>
		</p>
	 </div>
	 
  </body>
 </html>                                      
<?php /**PATH G:\Campus Security System\campus\resources\views/Scanner.blade.php ENDPATH**/ ?>