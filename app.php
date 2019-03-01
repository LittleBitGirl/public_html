<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
  
  <meta content="text/html; charset=utf-8" http-equiv="content-type">
  <title>Morphological analyser</title>

  
  
  <style type="text/css">
body {
  background-color: #cccccc;
}
#main {
  border: 1px solid red;
  margin: 20px auto 10px;
  padding: 25px;
  font-family: Verdana;
  background-color: white;
  width: 750px;
}

  </style>
</head><body>
<div id="main">
<div style="text-align: center;">
  <br>
<big style="font-family: Droid Sans; color: rgb(153, 153, 0);"><big><span style="font-weight: bold;">QAZAQ Natural Language Processing<br>
<br>
</span></big></big></div>
<div style="text-align: center;"><a href="index.html">Home</a>
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <a href="QazaqNLP.html">Qazaq NLP</a>&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <a href="Publications.html">Publications</a>&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <span style="font-weight: bold;">Projects</span>
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <a href="author.html">Author</a><span style="font-weight: bold;">&nbsp;&nbsp;&nbsp;</span>
&nbsp;&nbsp;&nbsp; <a href="contacts.html">Contacts</a><big style="font-weight: bold;"><big><br>
</big></big>
</div>
<big style="font-weight: bold;"><big><br>
</big></big>
<div style="text-align: justify;">
<pre style="font-weight: bold;" id="line1"><big><big>Morphological analyser</big></big></pre>
<small style="color: rgb(39, 39, 39);">&nbsp;</small><br>
<form action="app.php" method="post" accept-charset="UTF-8"> Сөз: <input name="user_input" value="<?php echo $var = isset($_POST['user_input']) ? $_POST['user_input'] : ''; ?>" type="text"><br>
  <br>
  <input value="Analyse" type="submit"></form>

<?php 

mb_internal_encoding('UTF-8');
if (isset($_POST['user_input']) && !empty($_POST['user_input'])){
	$user_input = mb_strtolower(trim($_POST['user_input']));
       
	$fp = fsockopen("ssl://nlp-algorithmssss.000webhostapp.com", 6062, $errno, $errstr, 30); 
  fputs($fp, $user_input); 
  $response = fread($fp, 2048); 
  fclose($fp); 

print "<pre>$response</pre>";

        
}

?>
<br>
<br>
<br>
<br>
<br><hr>
<br>
<br>
<small><small>©</small></small><small><small> </small></small><a href="privatepolicy.html"><small><small>Private Policy</small></small></a><small><small><a href="privatepolicy.html">&nbsp;</a>&nbsp; </small></small>
</div>
</div>

</body></html>
