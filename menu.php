<?PHP if(empty($SECURITY)){ die('No direct file access'); } ?>
<table border="1" width="100%" cellpadding="5" cellspacing="0"><tr>
 <td align="center" style="font-size:45px;"><?PHP echo $_COOKIE['name']; ?></td>
 <td align="center" style="font-size:45px;"><a href='/inventory/'>Home</a></td>
 <td align="center" style="font-size:45px;"><a href='terminal.php'>Terminal</a></td>
 <td align="center" style="font-size:45px;"><a href='inventory.php'>Inventory</a></td>
 <td align="center" style="font-size:45px;"><a href='members.php'>Members</a></td>
 <td align="center" style="font-size:45px;"><a href='logout.php'>Log Out<a/></td>
 <td align="center"><a href="https://www.towsonmaker.space"><img height="50px" width="50px" src="http://www.towsonmaker.space/wp-content/uploads/2017/08/Towson.png"></a></td>
</tr></table>
