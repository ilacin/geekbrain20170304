<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset="utf-8" />
<title>Ваше мнение</title>
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

$res=mail("neguc@mail.ru", "Ваше мнение с сайта massaslovru", "Имя: $_POST[personname] \nE-mail: $_POST[emailaddress] \nКакой словарь, по вашему мнению, сейчас нужен: $_POST[youropinion] \nЧто, по вашему мнению, можно улучшить в этом словаре: $_POST[youropinion1]");

if ($res) {
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

    

















    















