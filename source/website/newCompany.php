<!DOCTYPE HTML>
<html>

<link rel="stylesheet" type="text/css" href="css/demo.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<head >
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>New Company</title>

</head>
<?php
$debug = true;

$link=mysqli_connect('localhost:3306', 'root','', "madeinjlm");


if (isset($_POST['name'])){
	$pname=$_POST['name'];
	
	$username = $_POST['name'];
	$username="Josh";
	$query="select * from company where name = '$username'";
	$result=mysqli_query($link, $query);

	if ($result->fetch_row()[3]!=null){
		echo $result->fetch_row()[3];
		$name = $result->fetch_row()[3];
		$description = $result->fetch_row()[4];
		$url=$result->fetch_row()[5];
		$picture=$result->fetch_row()[6];
		$address=$result->fetch_row()[7];
		$area=$result->fetch_row()[8];
	}
}
else{
	$pname="";
}
if(isset($_POST['description'])){
	$description=$_POST['description'];
}
else{
	$description="";
}
if(isset($_POST['url'])){
	$url=$_POST['url'];
}
else{
	$url="";
}
if(isset($_POST['picture'])){
	$picture=$_POST['picture'];
}
else{
	$picture="";
}
if(isset($_POST['address'])){
	$address=$_POST['address'];
}
else{
	$address="";
}
if(isset($_POST['area'])){
	$area=$_POST['area'];
}
else{
	$area="";
}
if($pname){
	$name=$pname;
	echo $name;
	echo $description;
	$order = "INSERT INTO company
	(name, description,url,picture,address,Area) VALUES('$name','$description','$url','$picture','$address','$area')";
	//declare in the order variable
	$result2 = mysqli_query($link,$order);	//order executes
	if($result2){
		echo("<br>Input data succeeded");
	}
	 else{
		echo("<br>Input data failed");
	}

}


if(isset($_POST['username'])){
	$username = $_POST['username'];
	$query="select * from company where name = '$username'";
	$result=mysqli_query($link, $query);
	echo $username;
if ($result->fetch_row()[3]!=null){
		$name = $result->fetch_row()[3];

		echo "\n res:".$result->fetch_row()[3];
		$description = $result->fetch_row()[4];
		$url=$result->fetch_row()[5];
		$picture=$result->fetch_row()[6];
		$address=$result->fetch_row()[7];
		$area=$result->fetch_row()[8];
	}
}
		/* free result set */
		//$result->free();
?>

<body>
<form method="post" action="newCompany.php">
<header class="body"></header>
<div align="right">

<table> 
	<tr>
		 <td></td>
	</tr>
</table>
</div>

  <div class="mainpage">

  </div>
<section class="section" ><div align="center">

<?php
	
	echo '<p>Company Name</p>
        <input type="text" name="name" value="'.$name.'" size="20">
         
         <p>Description</p>
         <input type="text" name="description" value="'.$description.'" size="20">
         
         <p>Url</p>
         <input type="text" name="url" value="'.$url.'"size="20">
       
         <p>Picture</p>
         <input type="text" name="picture"value="'.$picture.'" size="20">
        
         <p>Address</p>
         <input type="text" name="address"value="'.$address.'" size="40">
         
         <p>Area</p>
         <input type="text" name="Area"value="'.$area.'" size="20">
          
         <p>Tags:</p>
         <table>
          <tr>
          <td class="check"><input type="checkbox" name="tags[]" size="20" value="energy">energy
          </td>
          <td class="check"><input type="checkbox" name="tags[]" size="20" value = "mobile">mobile
          </td>
          <td class="check"><input type="checkbox" name="tags[]" size="20" value="internet">internet
          </td>
          </tr>
          <tr>
          <td class="check"><input type="checkbox" name="tags[]" size="20" value="hardware">hardware
          </td>
          <td class="check"><input type="checkbox" name="tags[]" size="20" value="medical">medical
          </td>
          <td class="check"><input type="checkbox" name="tags[]" size="20" value="accelerator/hub">accelerator/hub
          </td>
          </tr>
          <tr>
          <td class="check"><input type="checkbox" name="tags[]" size="20" value="software">software
          </td>
          <td class="check"><input type="checkbox" name="tags[]" size="20" value="investor">investor
          </td>
          <td class="check"><input type="checkbox" name="tags[]" size="20" value="service provider">service provider
          </td>
          </tr>
          <tr>
          <td class="check"><input type="checkbox" name="tags[]" size="20"value="semiconductor">semiconductor
          </td>
          <td><input type="checkbox" name="tags[]" size="20" value="pharma">pharma
          </td>
          <td><input type="checkbox" name="tags[]" size="20" value="optics">optics
          </td>
          </tr>
          <td><input type="checkbox" name="tags[]" size="20" value="media">media
          </td>
          <tr>
          </tr>
        </tr>
        </table>
        
         <p>Number of Employees</p>
         <input type="text" name="numofEmployees" size="20">
        
         <p>Email</p>
         <input type="text" name="contactEmail" size="20">
         
         <p>Phone</p>
         <input type="text" name="contactPhone" size="20">
         
         <p>Name</p>
         <input type="text" name="contactName" size="20">
         
         <p>Twitter</p>
         <input type="text" name="twitter" size="20">
        
         <p>Facebook</p>
         <input type="text" name="facebookPage" size="20">
   		
   		 <p><input type="submit" name="submit" value="Sent">
       	 </p>'
		
?>
							</div>
							</section>
<footer class="body">
</footer>

</form>
 </body>
</html>