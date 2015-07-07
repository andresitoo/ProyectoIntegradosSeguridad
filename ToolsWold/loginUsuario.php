<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Tools World </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style/960.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="images/tools.ico" />
<link href="style/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/min.js"></script>
<script type="text/javascript" src="js/script.js"></script>

<style type="text/css">
	@font-face {
	font-family: "Titulo";
	font-style: normal;
	font-weight: normal;
	src: local("?"), url("_font/pepsi.woff") format("woff"), url("_font/pepsi.ttf") format("truetype");
}
	@font-face {
	font-family: "label";
	font-style: normal;
	font-weight: normal;
	src: local("?"), url("_font/grend.woff") format("woff"), url("_font/grend.ttf") format("truetype");
}
</style>
</head>
<body>
<!--container_12 start here-->
<div class="container_12">
  <!--grid_12 start here-->
  <div class="grid_12">
    <!--logo_container start here-->
    <div  class="estilo1"><img src="images/tools.png" alt=""/> Tools World 
    </div>
    <!--logo_container end here-->
    
  </div>
  <!--grid_12 end here-->

  <!--grid_9 start here-->
  <div class="grid_9">
  <hr  />
    <!--contact_form start here-->
    <br />
    <br />
    <img src="images/user.png" class="imagen1" alt=""/>
    <br />
    <br />
    <form name="ingreso" action="pages/objetos/validarUsuario.php" method="post">
      <br />
      <fieldset class="input">
        <p id="login-form-username">
          <label for="modlgn_username" class="estilo2">Usuario: </label>
          <input id="usuario" type="text" name="usuario" class="inputbox" size="18" autocomplete="off" />
        </p>
        <br />
        <input type="submit" name="Submit" class="button" value="Siguiente" />
        <!--container_12 end here-->
      </fieldset>
    </form>
    <br /><br />
  </div>
</div>
</body>
</html>
