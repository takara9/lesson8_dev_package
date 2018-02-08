<?php
include "mt_framework2.php";
include "mt_dao_persons.php";
$fw = new MtF();
$fw->check_login();
include "header2.php";
//include "parts_top_page.php";
$_SESSION['view_counter'] = $_SESSION['view_counter'] + 1;

$dao = new DaoPersons();
$rslt = $dao->find_by_userid($_SESSION["userid"]);
?>

<h1>アプリ ver 1.0</h1>

<table>
<tr>
  <th width="100">
    項目
  </th>
  <th width="100">
    データ
  </th>
  <th width="180">
    写真
  </th>
</tr>

<tr>
<td>
  ユーザー名:
</td>
<td>
  <font size=7 color="black">
    <?php print $rslt['kanji_name']; ?>
  </font>
</td>
<td rowspan="3" align="center">
  <img src="images/<?php print $rslt['photo_file_name']?>" width="150">
</td>
</tr>
<!--
<tr>
<td>
  <p>ホスト名:
</td>
<td>
  <font size=5 color="yellow">
    <?php print gethostname() ?>
  </font>
</td>
</tr>
-->
<tr>
  <td>
    カウンタ =
  </td>
  <td>
    <font size=7 color="blue">
      <?php print $_SESSION['view_counter'] ?>
    </font>                          
  </td>
</tr>
<tr>
  <td>
    <button id="btn" name="reload">アップ</button>
  </td>
  <td>
    <a href='do_logout2.php'>ログアウト</a>
  </td>
</tr>
  
</table>


<script>
$(function() {
  $('#btn').click(function(e) {
    $(this).text("アップ");
    location.reload();
  });
});
</script>


