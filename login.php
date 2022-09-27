<?php


if($_SERVER['REQUEST_METHOD'] == "POST"){


if(trim($_POST['email']) == ""){
$errors .= "Az email cím kitöltése kötelező!";

}else{


  if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL )){

  $errors .="Az email cim hibás!<br>";

  }
  if(trim($_POST['password']) == "" || strlen($_POST['password'])<8){

 $errors .="A jelszó üres vagy nincs meg 8 karakter!";

  }


  if($errors == " "){
$sql = "SELECT fid,nev,email,auth password
FROM felhasznalok 
WHERE email='".mysqli_real_escape_string($dbConn,$_POST['email'])."' LIMIT 1;";
$res = mysqli_query($dbConn,$sql);
echo $tomb= [1,2,3,4,5,6]
echo $tomb[5];

  }else{


echo $errors;

  }
}


}

?>



<form method="POST">
<label for="email">E-mail cím</label>
<input type="email" name="email" id="email"><br>

<label for="email">Jelszó</label>
<input type="password" name="password" id="password"><br>

<button type="submit" name="loginBtn">Bejelentkezés</button>

</form>