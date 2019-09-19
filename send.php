<?php
$name = $_POST['name'];
$tel = $_POST['tel'];
mail("rebrum1920@mail.ru", "Заявка с сайта", "Имя:".$name.". Телефон: ".$tel)
?>
<!-- ,"From: info@borlakova.store \r\n" -->
<!-- <script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="https://borlakova.store/");}
window.setTimeout("changeurl();",1000);
</script> -->