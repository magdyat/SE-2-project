<style>
body {
background-image: url(FCI_ar.png);
					 background-repeat: no-repeat ;
			 background-size: 800px;
			 background-position: bottom;

		 }
.Main {
	margin: auto;
	  width: 50%;


}
.phd {background-color: #4CAF50; padding: 15px 100px;font-size: 16px; border-radius: 8px;transition-duration: 0.4s;width: 100%;}
.master {background-color: #008CBA; padding: 15px 100px; font-size: 16px; border-radius: 8px;transition-duration: 0.4s;width: 100%;}
.Register:hover{
	background-color: powderblue;

}.Search:hover{
	background-color: powderblue;

}.Delete:hover{
	background-color: powderblue;

}
.display:hover{
	background-color: powderblue;

}
</style>

<body>

<div class="Main">
  <h2>Main Page</h2>
	<form action="Main2.php" method="post" >
  <p><button  class="phd">Register </button></p>
</form>
<form action="phdread.php" method="post">
  <p><button class="master">Display all Applies for PHD</button></p>
</form>
	<form action="mastersread.php" method="post">
	  <p><button class="master">Display all Applies for Masters</button></p>
		</form>
		<form action="diplomaread.php" method="post">
		  <p><button class="master">Display all Applies for Diploma</button></p>
</form>


</div>
