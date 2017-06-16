<?php
declare (strict_types = 1);
if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip'))
    ob_start("ob_gzhandler");
else
    ob_start();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Paul Senior">
  <title>Oh SNAP</title>

  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
  <!-- CSS Reset -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.css">
  <!-- Milligram CSS minified -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">

  <style type="text/css">
    body {
      margin: 40px auto;
      max-width: 650px;
      line-height: 1.6;
      font-size: 18px;
      color: #444;
      padding: 0 10px
    }
    
    h1,
    h2,
    h3 {
      line-height: 1.2
    }
  </style>

</head>

<body>
  <a href="http://www.myflorida.com/accessflorida" target="_blank"><img src="http://www.myflorida.com/accessflorida/images/logo.png"></a>

  <p>This web app helps you find out when your Electronic Benefits Transfer (EBT) funds are deposited into your Supplemental Nutrition Assistance Program (SNAP) account each month.</p>

  <h3>Step 1</h3>

  <p><a href="http://www.myflorida.com/accessflorida" target="_blank">Click on this link to login to the MyACCESS Florida website and get your Case Number.</a></p>

  <h3>Step 2</h3>

  <p>Enter your Case Number below:</p>

  <input id="caseNum">

  <br>
  <button type="button" onclick="myFunction()">Submit</button>

  <p id="demo"></p>

  <script>
    function myFunction() {
      var caseNum, benefit, answer;

      var caseNum = document.getElementById("caseNum").value;
      var benefit = caseNum[8] + caseNum[7];
      var answer = "";

      switch (benefit) {
        case "00":
        case "01":
        case "02":
        case "03":
          answer = "1st";
          break;
        case "04":
        case "05":
        case "06":
          answer = "2nd";
          break;
        case "07":
        case "08":
        case "09":
        case "10":
          answer = "3rd";
          break;
        case "11":
        case "12":
        case "13":
          answer = "4th";
          break;
        case "14":
        case "15":
        case "16":
        case "17":
          answer = "5th";
          break;
        case "18":
        case "19":
        case "20":
          answer = "6th";
          break;
        case "21":
        case "22":
        case "23":
        case "24":
          answer = "7th";
          break;
        case "25":
        case "26":
        case "27":
          answer = "8th";
          break;
        case "28":
        case "29":
        case "30":
        case "31":
          answer = "9th";
          break;
        case "32":
        case "33":
        case "34":
          answer = "10th";
          break;
        case "35":
        case "36":
        case "37":
        case "38":
          answer = "11th";
          break;
        case "39":
        case "40":
        case "41":
          answer = "12th";
          break;
        case "42":
        case "43":
        case "44":
        case "45":
          answer = "13th";
          break;
        case "46":
        case "47":
        case "48":
          answer = "14th";
          break;
        case "49":
        case "50":
        case "51":
        case "52":
        case "53":
          answer = "15th";
          break;
        case "54":
        case "55":
        case "56":
        case "57":
          answer = "16th";
          break;
        case "58":
        case "59":
        case "60":
          answer = "17th";
          break;
        case "61":
        case "62":
        case "63":
        case "64":
          answer = "18th";
          break;
        case "65":
        case "66":
        case "67":
          answer = "19th";
          break;
        case "68":
        case "69":
        case "70":
        case "71":
          answer = "20th";
          break;
        case "72":
        case "73":
        case "74":
          answer = "21st";
          break;
        case "75":
        case "76":
        case "77":
        case "78":
          answer = "22nd";
          break;
        case "79":
        case "80":
        case "81":
          answer = "23rd";
          break;
        case "82":
        case "83":
        case "84":
        case "85":
          answer = "24th";
          break;
        case "86":
        case "87":
        case "88":
          answer = "25th";
          break;
        case "89":
        case "90":
        case "91":
        case "92":
          answer = "26th";
          break;
        case "93":
        case "94":
        case "95":
          answer = "27th";
          break;
        case "96":
        case "97":
        case "98":
        case "99":
          answer = "28th";
          break;
        default:
          answer = "unknown";
      }

      console.log("Your case number is " + caseNum);
      console.log("benefit is " + benefit);
      console.log("answer is " + answer);

      var string = "";
      string = "Benefits will be deposited on the  " + answer + " of each month.";

      document.getElementById("demo").innerHTML = string;
    }
  </script>

</body>

</html>
