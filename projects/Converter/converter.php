<html lang="RU">
  <head>
  	<meta charset="UTF-8">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<title>Converter</title>
  	<style>
  	  fieldset {
  	  	width: 35%;
  	  }
  	  .submit {
  	  	width: 100%;
  	  }
  	  .container {
  	  	display: none;
  	  }
    </style>
  </head>

  <body>

  	<h1>Converter</h1>
  	<p>It can convert mass, temperature, currency</p>
  	<hr>

  	<!-- Mass converter -->
  	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
  	  <fieldset class="f-block">
  	  	<legend>Mass</legend>

  	  	<div class="container mass">
  	  	  From kilogramms to pounds<br>
  	  	  <input type="text" name="kilo" placeholder="Input kilo">&nbsp
  	  	  in pound it's&nbsp

  	  	  <?php

  	  	    $kilo = htmlspecialchars($_GET["kilo"]); // for avoid XSS
  	  	    if (is_numeric($kilo)) {
  	  	  	  $kilo = (float)$kilo;
  	  	  	  $pound = $kilo * 2.20462262;
  	  	  	  echo round($pound, 2) . " pounds";
  	  	    } elseif ($kilo == "") {
  	  	  	  //in case empty string do nothing
  	  	    } else {
  	  	  	  echo "<b>You inputed something wrong. Try to use <i>numbers</i></b>";
  	  	    }
  	  	  
  	  	  ?>
  	  	  <br><br>
  	  	  From pounds to kilogramms<br>
  	  	  <input type="text" name="pounds" placeholder="Input pounds">&nbsp
  	  	  in kilogramms it's&nbsp

  	  	  <?php
  	  	    $pounds = htmlspecialchars($_GET["pounds"]);
  	  	    if (is_numeric($pounds)) {
  	  	   	  $pounds = (float)$pounds;
  	  	  	  $to_kilo = $pounds / 2.20462262;
  	  	  	  echo round($to_kilo, 2) . " kilogramms";
  	  	    } elseif ($kilo == "") {
  	  	  	  //in case empty string do nothing
  	  	    } else {
  	  	  	  echo "<b>You inputed something wrong. Try to use <i>numbers</i></b>";
  	  	    }
  	  	  ?>
  	  	  <br><br>

  	  	  <input class="submit" type="submit" value="Calculate">
        </div>
  	  </fieldset>

  	  <!-- Temperature converter -->
  	  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
  	  	<fieldset class="s-block">
  	  	  <legend>Temperature</legend>
  	  	    <div class="container temperature">
  	        
  	        From Celsium to Fahrenheit<br>
  	        <input type="text" name="cels" placeholder="Input degree in Celsium">&nbsp
  	        is&nbsp

  	        <?php
  	          $cels = htmlspecialchars($_GET["cels"]);
  	          if (is_numeric($cels)) {
  	            $cels = ($cels * (9/5)) + 32;
  	            echo round($cels, 2) . " in Fahrenheit.";
  	          } elseif ($cels == "") {
  	            //in case empty string do nothing
  	          } else {
  	            echo "You inputed something wrong. Try to use <i>numbers</i></b>";
  	          }
  	        ?>
  	        <br><br>

  	        From Fahrenheit to Celsium<br>
  	        <input type="text" name="fahr" placeholder="Input degree in Fahrenheit">&nbsp
  	        is&nbsp

  	        <?php
  	          $fahr = htmlspecialchars($_GET["fahr"]);
  	          if (is_numeric($fahr)) {
  	            $fahr = ($fahr - 32) * (5 / 9);
  	            echo $fahr . " in Celsium";
  	          } elseif ($fahr == "") {
  	            //in case empty string do nothing  	        
  	          } else {
  	            echo "You inputed something wrong. Try to use <i>numbers</i></b>";
  	          }
  	        ?>
  	        <br><br>

  	        <input class="submit" type="submit" value="Calculate">
          </div>
  	  	</fieldset>
      </form>

  <script>
    $(document).ready(function(){
      //mass-block hide/show
      $(".f-block").mouseenter(function(){
        $(".mass").stop().show(650);
       
      });
      $(".f-block").mouseleave(function(){
        $(".mass").stop().hide(650);
      });

      //temperature-block hide/show
      $(".s-block").mouseenter(function(evt){
        evt.stopPropagation();
        $(".temperature").stop().show(650);
       
      });
      $(".s-block").mouseleave(function(evt){
      	evt.stopPropagation();
        $(".temperature").stop().hide(650);
      });
    });
</script>
  </body>
</html>
