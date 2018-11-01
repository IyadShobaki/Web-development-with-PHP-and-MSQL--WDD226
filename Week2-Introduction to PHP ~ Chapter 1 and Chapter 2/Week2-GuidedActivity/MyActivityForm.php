<!DOCTYPE html>
<!--Iyad Shobaki
    FALL 2018 WEB DEV WITH PHP AND MYSQL
    Professor  Kathy Ison
    Week 2_GuidedActivity
    9/4/2018 -->
<html lang="en">
    <head>
    <title>My Activity Form</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css.css">   
    </head>
<body>
    <form action="FormProcessor.php" method="post">
    <fieldset><legend>Enter your information</legend>
    <p>
        <label>What is your favorite movie?<br>
        <input type="text" name="FormMovie" maxlength="50">
            
        </label>    
    </p>
    <p>
        <label>What is your name?<br>
            <input type="text" name="FormName" maxlength="50">
        </label>
    </p>
      <p>
        <label>What is your age?<br>
            <input type="text" name="FormAge" maxlength="4">
        </label>
    </p>
    <label>Please choose your favorite car -->
        <select name="Select">
            <option value="other" name="other">Other</option>
            <option value="ferrari" name="ferrari">Ferrari</option>
            <option value="lamborghini" name="lamborghini">Lamborghini</option>
            <option value="porsche" name="porsche">Porsche</option>
            <option value="bugatti" name="bugatti">Bugatti</option>
            
        </select>
    </label>
        
    </fieldset>
    <input id="sub" type="submit" name="FormSubmit" value="Submit" />
    </form>
</body>
</html>