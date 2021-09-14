<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>excercise</title>
	<style type="text/css">
	div{width: 250px;}
	h1{text-align: center;}
		li span{display: inline-block;width: 100px;text-align: right;}
		li{list-style: none;}
	</style>
</head>


<body>
<form method="post">
	<div><button name='submit' value="sudheer">sudheer</button>
		<button name='submit' value="mahesh">mahesh</button>
		<button name='submit' value="chandu">chandu</button></div>
</form>
<?php
$namesArray =[
	['name'=>'chandu','age'=>'22','hometown'=>'Nellore','employement'=>'Unemployed','salary'=>'NA'],
['name'=>'mahesh','age'=>'22','hometown'=>'Alli puram','employement'=>'TCS','salary'=>'3.6 LPA'],
['name'=>'sudheer','age'=>'21','hometown'=>'kaluvayi','employement'=>'Infosys','salary'=>'3 LPA'],
] ;
$displayArray=['name'=>'Person Name','age'=>'','hometown'=>'','employement'=>'','salary'=>''];
if(isset($_POST['submit'])){
	foreach ($namesArray as $person){
		if($_POST['submit']===$person['name']){
			$displayArray =$person;
		}
			}
}
?>
<div>
				<h1><?php echo ucfirst($displayArray['name'])?></h1>
				<ul>
					<li><span>Age:</span> <?php echo $displayArray['age']?></li>
					<li><span>Hometown:</span> <?php echo $displayArray['hometown']?></li>
					<li><span>Employement:</span> <?php echo $displayArray['employement']?></li>
					<li><span>Salary:</span> <?php echo $displayArray['salary']?></li>
				</ul>
			</div>

</body>
</html>