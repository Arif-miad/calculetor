<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>the artifisial calculer</title>
</head>
<body>
<?php
ini_set('display_errors',0);
if(isset($_REQUEST['calculate']))
{
    $operator=$_REQUEST['operatr'];
    $n1 = $_REQUEST['first_value'];
    $n2 = $_REQUEST['second_value'];
    if($_operator=="+")
    {
        $res = $n1+$n2;
    }
    if($_operator=="-")
    {
        $res = $n1-$n2;
    }
    if($operator=="*")
    {
        $res = $n1*$n2;
    }
    if($operator=="/")
    {
        $res = $n1/$n2;

    }
    if($_REQUEST['first_value']==NULL || $_REQUEST['second_']==NULL)
    {
        echo "<script language=javascript> alert(\"Please Enter Correct values.\");</script>";
    }
}
?>
<form>
<table style="border:groove #00FF99">
 
 <tr>
 <td style="background-color:turquoise; color:black; font-family:'Times New Roman'">Enter Number</td>
 <td colspan="1">
 <input name="first_value" type="text" style="color:red"/></td>
 </tr>
  
 <tr>
 <td style="color:red; font-family:'Times New Roman'">Select Operator</td>
 <td>
 <select name="operator" style="width: 63px">
 <option>+</option>
 <option>-</option>
 <option>*</option>
 <option>/</option>
 </select></td>
 </tr>
  
 <tr>
 <td style="background-color:turquoise; color:black; font-family:'Times New Roman'">Enter Number</td>
 <td class="auto-style5">
 <input name="second_value" type="text"  style="color:red"/></td> 
 </tr>
  
 <tr>
 <td></td>
 <td><input type="submit" name="calculate" value="Calculate" style="color:wheat;background-color:rosybrown" /></td>	 
 </tr>
  
 <tr>
 <td style="background-color:turquoise;color:black">Output = </td>
 <td style="color:darkblue"><?php echo $res;?></td>
 </tr>	
  
 </table>

</form>
    
</body>
</html>