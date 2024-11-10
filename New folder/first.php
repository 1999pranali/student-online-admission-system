<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	
	<script src="jquery.js"></script>
	<script type="text/javascript" src="first.js"></script>
    <script type="text/javascript" src="second.js"></script>

</head>
<body>
<?php

$con=mysqli_connect("localhost","root","","dropdown") or die(mysqli_error($con));

$query="SELECT * FROM countries order by country_name ASC";
$result = mysqli_query($con,$query) or die(mysqli_error($con));

?>
<select id="country">
    <option value="">Select Country</option>
    <?php
    
        while($row = mysqli_fetch_array($result)){ ?>

            <option value="<?php echo $row['country_id']; ?>"><?php echo $row['country_name']; ?></option>';
       <?php }
    
    ?>
</select>

<select id="state">
    <option value="">Select State</option>
</select>

<select id="city">
    <option value="">Select city</option>
</select>

</body>
</html>
