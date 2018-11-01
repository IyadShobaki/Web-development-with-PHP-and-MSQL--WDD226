<!--Iyad Shobaki
    FALL 2018 WEB DEV WITH PHP AND MYSQL
    Professor  Kathy Ison
    Week3_Lab (Part2)
    9/12/2018 -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link href="css/style.css" rel="stylesheet" />
<title>PHP Form</title>
</head>
    <body>
    <form action="FormProcessor.php" method="post">
    <fieldset><legend>Calculation Form</legend>
    <p>
    <label>Please enter the first number:<br>
    <input type="text" name="Num1">
    </label>
     </p>    
    
    <p>
    <label>Please enter the second number:<br>
    <input type="text" name="Num2">
    </label>
     </p>
    <p>
 
     </p>
      </fieldset>
    <input type="submit" name="Addition" value="Addition"/>
    <input type="submit" name="Subtraction" value="Subtraction"/>
    <input type="submit" name="Multiplication" value="Multiplication"/>
    <input type="submit" name="Division" value="Division"/>
        </form>
    <form action="FormProcessor1.php" method="post">
    <fieldset><legend>Strings Form</legend>
    <p>
    <label>Please enter the first string:<br>
    <input type="text" name="Txt1">
    </label>
     </p>    
    
    <p>
    <label>Please enter the second string:<br>
    <input type="text" name="Txt2">
    </label>
     </p>
    <p>
 
     </p>
      </fieldset>
    <input type="submit" name="AddStrings" value="Add Strings"/>
    <input type="submit" name="implode" value="Implode"/>
    <input type="submit" name="Count" value="Count Letters"/>
    
        </form>
    </body>

</html>