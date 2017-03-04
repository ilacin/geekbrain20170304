<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset="utf-8" />
<title>Связаться</title>
<link href="formletter.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="main_border">
  <? include ("blocks/header.php");?>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpading="0">
      <tr>
  <? include("blocks/lefttd.php");?>
        <td valign="top">
		<?

$result=mail("neguc@mail.ru", "Связаться с сайта massaslovru", "Имя: $_POST[personname] \nE-mail: $_POST[emailaddress] \nТекст письма: $_POST[letterfrommassaslovru]");

if ($result) {
echo "<p>Спасибо за отправленное сообщение!</p>";	
	
}
else {
echo "<p>Извините, но из-за технических проблем письмо отправить не удалось</p>";		
	
}

?>

       </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td></td>
  </tr>
</table>


</body>
</html>

    

















    















