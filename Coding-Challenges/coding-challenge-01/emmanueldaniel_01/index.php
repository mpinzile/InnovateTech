<?php
$starter = "Hello, World!";
$css = "display: none;";
function vowelsCounter($txt) {
    $validVowels = ['a', 'e', 'i', 'o', 'u'];
    $initCounter = 0;

    for($i = 0; $i < strlen($txt); $i++) {
        if(in_array($txt[$i], $validVowels)) {
            $initCounter++;
        }
    }
    return $initCounter;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$txt = $_POST['string'];
$sanitized_string = strtolower($txt);
$output = vowelsCounter($sanitized_string);
$res =  $output;
$starter = $txt;
$css = "display: block;";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vowel Counter</title>
</head>

<style>
    body {
         background-color: rgb(241, 241, 241);
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    #input {
        padding-top: 4px;
        padding-left: 10px;
        padding-right: 10px;
        border: 2px  solid rgb(22, 145, 194);
        border-radius: 7px;
        width: 210px;
        height: 70px;
        background-color: transparent;
        resize: none;
    }
    button {
        margin-top: 5px;
        cursor: pointer;
        width: 235px;
        padding: 10px;
    color: white;
    font-weight: bold;    
    border: none;
    border-radius: 5px !important;
    background-color: rgb(22, 145, 194);
    }

    ::-webkit-input-placeholder{
        font-size: 13px;
           font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif !important;
    }

    #container {
        margin-top:80px;
           background-color: white;
    box-shadow: 3px 3px 6px #cfcece, -3px -3px 6px #ffffff;
        border-radius: 10px;
        width: 300px;
        padding: 30px 10px 20px 10px;

    }

    #res {
        font-weight: bold;
        text-align: left !important;
        padding: 10px 10px 10px 10px;
        border-radius: 7px;
        margin-top: 20px;
        font-size: 13px;
        display: block;
        width: 220px;
        background-color: beige;
    }

    .prev {
        color: gray;
        font-weight: normal !important;
    }

    #cnt {
        font-weight: bolder;
        color: rgb(22, 145, 194);
    }

    h6 {
        font-size: 12px;
        color: grey;
    }
</style>
<body>
    <center>
        <div id="container">
          <h1>= Vowel Counter =</h1> 
          <form method="post">
            <textarea name="string" placeholder="Type any word/sentence here..." id="input"><?php echo $starter; ?></textarea><br>
            <button name='counter'>Count vowels</button>
            <div id="res" style="<?php echo $css; ?>">The string: <span class="prev">"<?php echo $txt; ?>"<br><br> </span> Contains: <span id="cnt"><?php echo $res; ?> vowels</span> </div>
          </form>
<br>
                  <div>
            <h6>#arktech , @2023</h6>
        </div>
        </div>


    </center>
    

</body>
</html>