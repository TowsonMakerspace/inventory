<?PHP if(empty($SECURITY)){ die('No direct file access'); } ?>
<table border="1" width="100%" cellpadding="5" cellspacing="0"><tr>
 <td align="center" style="font-size:45px;"><?PHP echo strtoupper($_COOKIE['name']); ?></td>
 <td align="center" style="font-size:45px;"><a href='/inventory/'>HOME</a></td>
 <td align="center" style="font-size:45px;"><a href='terminal.php'>CHECKOUT</a></td>
 <td align="center" style="font-size:45px;"><a href='inventory.php'>HARDWARE</a></td>
 <td align="center" style="font-size:45px;"><a href='members.php'>MEMBERS</a></td>
 <td align="center" style="font-size:45px;"><a href='logout.php'>LOG OUT<a/></td>
 <td align="center"><a href="https://www.towsonmaker.space"><img height="100px" width="100px" src="http://www.towsonmaker.space/wp-content/uploads/2017/08/Towson.png"></a></td>
</tr></table>
