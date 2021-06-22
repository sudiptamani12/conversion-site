<!DOCTYPE html>
<html>
<head>
<title>Home</title>
</head>
<body>
 
 
 
<?php
 
 
 
$Name = $aName = "";
$thisNameE = $thisisName = "";
$thisisName = $athisisName = "";
$athisisName = $bNameErr = "";
$bNameErr = $cNameEff = "";
$cNameEff= $hNameErr = "";
$hNameErr = $iNameEff = "";
 
 
 
?>
<div style="border: black; border-width: 5px; border-style: solid;">
    
 
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
        <span style="color: red;">Page 1 [Home]</span>
 
 
 
        <span style="color: red;"><?php echo $thisNameE; ?></span>
 
 
 
        <br><br>
        <span style="color: red;">Conversion Sit</span>
 
 
 
        <span style="color: red;"><?php echo $thisisName; ?></span>
 
 
 
        <br><br>
 
 
        <span style="color: blue;">1.<u>Home</u> 2.<u>Conversion Rate</u> 3.<u> History</u></span>
 
 
 
        <span style="color: blue;"><?php echo $athisisName; ?></span>
 
 
 
        <br><br>
 
        <span style="color: red;">Converter:</span>
 
 
 
        <span style="color: red;"><?php echo $bNameErr; ?></span>
 
 
 
        <br><br>
 
        <label for="cNameEff"><span style="color: black;">Feet to inch</span>: </label>
        <input type="text" name="cNameEff" id="cNameEff">
        <span style="color: black;"><?php echo $cNameEff; ?></span>
 
 
 
        <br><br>
 
        <label for="hNameErr"><span style="color: black;">Value:</span>: </label>
        <input type="text" name="hNameErr" id="hNameErr">
        <span style="color: black;"><?php echo $hNameErr; ?></span>
 
 
 
        <br><br>
 
        <label for="iNameEff"><span style="color: black;">Result:</span>: </label>
        <input type="text" name="iNameEff" id="iNameEff">
        <span style="color: black;"><?php echo $iNameEff; ?></span>
 
 
 
        <br><br>
 
 
 
 
    </form>
   
</div>



 
 
 
 <br>
 
 
 
</body>
</html>
