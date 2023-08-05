<?php
$style = "";
$out = "";
$receivedTxt = "";
function palindromeChecker($inputString) {
    $convString = preg_replace("/[^a-zA-Z0-9]/", "", strtolower($inputString));
     return $convString === strrev($convString);
}

if(isset($_POST['btn'])){
    $receivedTxt = $_POST['userinput'];

    $output = palindromeChecker($receivedTxt);
    if ($output) {
        $out = "True";
        $style = "results";
         }else{
        $out = "False";
        $style = "resultss";
         }
         
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Checker</title>
</head>

<style>
    body {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    #usa {
        width: 240px;
        height: 40px;
        border: 1px solid blueviolet;
        border-radius: 6px;
        padding-left: 10px;
        padding-right: 10px;
    }

    button  {
        width: 260px;
        height: 40px;
        border: 1px solid blueviolet;
        border-radius: 5px !important;
        background-color: blueviolet;
        color: white;
        font-weight: 600;
        font-size: 15px;
        cursor: pointer;
    }

    button:hover{
        width: 260px;
        height: 40px;
        border: 1px solid blueviolet;
        border-radius: 5px !important;
        background-color: darkmagenta;
        color: white;
        font-weight: 600;
        font-size: 15px;
        cursor: pointer;
    }
    h2 {
        color: darkmagenta;
    }

    .container {
        text-align: left !important;
        padding-top: 15px;
    }

    .ans {
       color: darkmagenta; 
    }

    .results{
        margin-top: 10px;
        text-align: center !important;
        display: block;
        width: 260px;
        height:35px;
        border-radius: 4px;
        background-color: rgb(0, 128, 0);
        border: 1px solid rgb(0, 68, 0);
        color: white;
        font-size: 14px;
    }

        .resultss{
        margin-top: 10px;
        text-align: center !important;
        display: block;
        width: 260px;
        height:35px;
        border-radius: 4px;
        background-color: red;
        border: 1px solid rgb(0, 68, 0);
        color: white;
        font-size: 14px;
    }
</style>
<body>

    <form method="post">
        <h2>Palindrome Checker</h2>
        <input type="text" name="userinput" id="usa" placeholder="Type any word or sentence" value="<?php echo $receivedTxt; ?>"><br><br>
        <button name="btn">Palindrome Check</button>
<table class="<?php echo $style; ?>">
            <tr><td><?php echo $out; ?></td></tr>
</table>
    </form>

    <div class="container">
     <h2>Test Cases to try out</h2>
     <h3>Test Case 1</h3>
     <p><b>Input :</b> "racecar"<br><b>Output:</b> <span class="ans">True</span></p>

     <h3>Test Case 2</h3>
     <p><b>Input :</b> "hello"<br><b>Output:</b> <span class="ans">False</span></p>

     <h3>Test Case 3</h3>
     <p><b>Input :</b> "A man, a plan, a canal: Panama"<br><b>Output:</b> <span class="ans">True</span></p>
    </div>
    
</body>
</html>