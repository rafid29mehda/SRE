<html>
 <head>
   <title>Schedule Page</title>
   <style>
	
    body{
	
	 margin-top: 0;
	 padding-top: 0;
	}

	.search {
		flex: 3;
    display: flex;
    justify-content: right;
    position: absolute;
    top: 145px;
    left: 465px;
    width: 500px;
	border:#2B6038;
	border-width: 1px;

	
		}
        .search input[type=text] {
         border: none;
        background: #eeeeee;
        padding: 10px;
        width: 50%;
		border: black;
	     border-radius: 10px;
        }
		.tb1{
			position: absolute;
            left: 333px;
            top: 221px;
			font-size: 30px;
			font-family: sans-serif;
			text-align: center;
			background: #eeeeee;
            color: black(133, 12, 12);
            padding: 2rem ;
			border-radius: 20px;
		}
		.btn2 {
    background: #2B6038;
	text-decoration: none;
    color: white;
    padding: 5px 10px;
    text-align:center;;
    width: 100x;
    align-content: flex-start;
    display: block;
    border-radius: 8px;
}
.btn2:hover {
    color: #EC2028;
    background: white;
    padding: 3px 8px;
    border: 2px solid #EC2028;
}

		
     ul.list{
	  margin: 0;
	  padding: 0;
	  list-style: unordered;
	  position: absolute;
	  top: 220px;
     }
	 ul.list li{
	   text-decoration: none;
	   display: block;
	   background-color: #2B6038;
	   width: 208px;
	   text-align: center;
	   border-color: rgb(255, 255, 255);
	   border-style: solid;
	   border-width: 1px;
	   height:60px;
	   display: flex;
	   justify-content: center;
	   align-items: center;
	 }
	 ul.list li a{
	   color: white;
	   text-align: center;
	   text-decoration: none;
	   display: flex;
	   justify-content: center;
	   align-items: center;
	   width: 100%;  
	   height: 100%;
	 }
	 ul.list li a:hover{
	   color: #2B6038;  
	 }
	 ul.list li:hover {
	   color: #2B6038;
	   background-color: rgb(0, 0, 0);
	 }
	 .imagec{
		border-radius: 100px;
    padding: 30px;
    text-align: center;
    vertical-align: middle;
    height: 75px;
    width: 75px;
    position: absolute;
    top: 20px;
    left: 50px;
	 }
	 .imagec1{
	border-radius: 100px;	
    text-align: center;
    vertical-align: middle;
    height: 50px;
    width: 50px;
    position: absolute;
    top: 15px;
    left: 1200px;
	   
	 }
	 .parent{
		width: 210px;
        background-color: #4FBA6A;
        display: block;
        height: 100%;
        margin-top: 0px;
        height: 800px;
	    }
	 .name{
	   margin-left: 30px;
	   padding: 0;
	   color: white;
	   font-size: 22px;
	   text-align: center;
	   margin: auto;
	   text-align: center;
	   margin: auto;
	   position: absolute;
	   top: 130px;
	   left: 60px;
	 }
	 .id{
	  margin-left: 0px;
	  color: white;
	  font-size: 20px;
	  position: absolute;
	  top: 135px;
	  left: 70px;
	  
	 }
	 .features{
	   display: block;
	   background-color: white;
	   height: 20px;
	 }
	 .nav{
	     background-color: #2B6038;
		 height: 35px;
		 font-size: 25px;
	     font-weight: bold;
		 font: Tahoma;
		 padding-top: 0;
		 margin-top: 0;
		 position: absolute;
		 top: 0px;
		 left: 210px;
		 width: 900px;
		 max-width: 250px;
	   }
	   .nav2{    position: absolute;
    background: #d8d3d3;
    height: 700px;
    width: 1040px;
    top: 100px;
    left: 275px;	
	border-radius: 10px;
	   }
	   
	   
	    ul.cbs{
	     padding: 0;
		 margin-left: 50px;
		 text-align: center;
		 padding-left: 80px;
		 margin-top: 0px;
		 padding-left: 0px;
	   }
	    ul.cbs li{
	     display: inline;
		 padding: 15px;
		 vertical-align: middle;
		 margin-top: 0px;
	   }
	    ul.cbs li a{
	     text-decoration: none;
		 padding: 10px 10px 10px 10px;
		 color: rgb(0, 0, 0);
		 vertical-align: middle;
		 margin-top: 20px;
		
	    }
		.review{
	     margin-left: 210px;
		 background-color: #e5e4d7;
		 display: inline-block;
		 padding: 50px;
		 margin-top: 20px;
		 width:  945px;
		 height: 600px;
		 position: absolute;
		 top: 34px;
		 left: 24px;
		
	   }
	   
		.ima{
		 width: 950px;
		 height: 600px;
		}

		.img-case{
			height: 100px;
			width: 100px;
		}
		.user{
			font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
			position: absolute;
			top:10px;
			left: 300px;
		}
		.user1{
			font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
			position: absolute;
			top:8px;
			left: 1130px;
			font-size: small;
		}
		.user2{
			font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
			position: absolute;
			top:100px;
			left: 340px;
			font-size: small;

		}
		.user3{
			font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
			position: absolute;
			top: 160px;
			left: 340px;
			font-size: 20px;
		}

		.bg{
			background:rgb(255, 255, 255)
			

		}

		#srch{
			width: 80px;
			background-color: #2B6038;
			color: white;
			border: #3d3c3c;
			border-radius: 5px;
			margin-left: 10px;
		}		
	</style>
	
 </head>
 <body> 
	<div class="bg">
	<img src="../img/fahim.jpg" class="imagec1">
	<div class="user">
		<h1>Gaurd Schedule</h1>
	</div>
	<div class="user1">
		<h3>Fahim</h3>
	</div>
	<div class="nav2">

	</div>
	
	
			<div class="user3">
				<h3>Today's Schedule</h3>
			</div>
		<!-- <div class="user2">
			<h3>Database</h3>
		</div> -->
		<div class="search">
			<input type="text" placeholder="Search..">
			<button type="submit" id="srch">search</button>
		</div>
		<table class="tb1">
			<tr bgcolor="#e2dede">
				<td bgcolor="#4FBA6A">ID</td>
				<td bgcolor="#4FBA6A">Name</td>
				<td bgcolor="#4FBA6A">Location</td>
				<td bgcolor="#4FBA6A">Time</td>
				<td bgcolor="#4FBA6A">Up Coming Schedule</td>
			</tr>
			<tr bgcolor="#e2dede">
				<td bgcolor="#CDCED2">11232</td>
				<td>Abbas Ali</td>
				<td>Plaza</td>
				<td>8.00-2.00</td>
				<td><a href="#" class="btn2">View</a></td>
			</tr>
			<tr bgcolor="#e2dede">
				<td bgcolor="#CDCED2">11233</td>
				<td>Rashid Khan</td>
				<td>Annex</td>
				<td>8.00-2.00</td>
				<td><a href="#" class="btn2">View</a></td>
			</tr>
			<tr bgcolor="#e2dede">
				<td bgcolor="#CDCED2">11234</td>
				<td>Akkas Ali</td>
				<td>FBS</td>
				<td>12.00-6.00</td>
				<td><a href="#" class="btn2">View</a></td>
			</tr>
			<tr bgcolor="#e2dede">
				<td bgcolor="#CDCED2">11235</td>
				<td>Mominul Haque</td>
				<td>Vista</td>
				<td>12.00-6.00</td>
				<td><a href="#" class="btn2">View</a></td>
			</tr>
			<tr bgcolor="#e2dede">
				<td bgcolor="#CDCED2">11237</td>
				<td>Rajjak Sheikh</td>
				<td>Vista</td>
				<td>7.00-1.00</td>
				<td><a href="#" class="btn2">View</a></td>
			</tr>
			<tr bgcolor="#e2dede">
				<td bgcolor="#CDCED2">1237</td>
				<td>Enamul Hauque</td>
				<td>Gate-1</td>
				<td>7.00-1.00</td>
				<td><a href="#" class="btn2">View</a></td>
			</tr>
			<tr bgcolor="#e2dede">
				<td bgcolor="#CDCED2">11237</td>
				<td>Rajjak Sheikh</td>
				<td>Anex</td>
				<td>2.00-6.00</td>
				<td><a href="#" class="btn2">View</a></td>
			</tr>
			
		</table>
	
	
	
    <div class="parent">
	  <img src="../img/fahim.jpg" class="imagec">
	  <p class="name">Fahim Amin</p>
	  <p class="id"> ID:1000121 </p>
	  <ul class="list">
	    <li><a href="/dashboard">HOME</a></li>
		<li><a href="/schedule">SCHEDULE</a></li>
		<li><a href="/profile">PROFILE</a></li>
		<li><a href="/Scanner">SCANNER</a></li>
		<li><a href="#">SETTINGS</a></li>
	  </ul>
	</div>
	<div id="nav">
	  <ul class="cbs">
	   <li><a href="/dashboard">HOME</a></li>
	   <li><a href="/profile">Profile</a></li>
	   <li><a href="/schedule">Schedule</a></li>
	   <li><a href="#">Notices</a></li>
	   <li><a href="/Scanner">Scanner</a></li>
	  </ul>
	</div>   
</div>	                                     
</div> 
  </body>
 </html>