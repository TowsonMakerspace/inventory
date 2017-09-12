<?PHP
 if(empty($SECURITY)){ die('No direct file access'); } 

function hardware($id){
	global $database;
	$r = mysqli_query($database,"select * from HARDWARE where ID = '$id'");
	$d = mysqli_fetch_array($r,MYSQLI_ASSOC);
	return $d['name'].' ('.$description.')';
}


/**
* Function for mkmonth
* 
* @method string mkmonth()
*/
function mkmonth(){
	$opt = "<option selected value='".date('m')."'>".date('m')."</option>";
	$opt .= "<option value='01'>1</option>";
	$opt .= "<option value='02'>2</option>";
	$opt .= "<option value='03'>3</option>";
	$opt .= "<option value='04'>4</option>";
	$opt .= "<option value='05'>5</option>";
	$opt .= "<option value='06'>6</option>";
	$opt .= "<option value='07'>7</option>";
	$opt .= "<option value='08'>8</option>";
	$opt .= "<option value='09'>9</option>";
	$opt .= "<option value='10'>10</option>";
	$opt .= "<option value='11'>11</option>";
	$opt .= "<option value='12'>12</option>";
	return $opt;
}
/**
* Function for mkday
* 
* @method string mkday()
*/
function mkday(){
	$opt = "<option selected value='".date('d')."'>".date('d')."</option>";
	$opt .= "<option value='01'>1</option>";
	$opt .= "<option value='02'>2</option>";
	$opt .= "<option value='03'>3</option>";
	$opt .= "<option value='04'>4</option>";
	$opt .= "<option value='05'>5</option>";
	$opt .= "<option value='06'>6</option>";
	$opt .= "<option value='07'>7</option>";
	$opt .= "<option value='08'>8</option>";
	$opt .= "<option value='09'>9</option>";
	$opt .= "<option value='10'>10</option>";
	$opt .= "<option value='11'>11</option>";
	$opt .= "<option value='12'>12</option>";
	$opt .= "<option value='13'>13</option>";
	$opt .= "<option value='14'>14</option>";
	$opt .= "<option value='15'>15</option>";
	$opt .= "<option value='16'>16</option>";
	$opt .= "<option value='17'>17</option>";
	$opt .= "<option value='18'>18</option>";
	$opt .= "<option value='19'>19</option>";
	$opt .= "<option value='20'>20</option>";
	$opt .= "<option value='21'>21</option>";
	$opt .= "<option value='22'>22</option>";
	$opt .= "<option value='23'>23</option>";
	$opt .= "<option value='24'>24</option>";
	$opt .= "<option value='25'>25</option>";
	$opt .= "<option value='26'>26</option>";
	$opt .= "<option value='27'>27</option>";
	$opt .= "<option value='28'>28</option>";
	$opt .= "<option value='29'>29</option>";
	$opt .= "<option value='30'>30</option>";
	$opt .= "<option value='31'>31</option>";
	return $opt;
}
/**
* Function for mkyear
* 
* @method string mkyear()
*/
function mkyear(){
	$opt = "<option selected value='".date('Y')."'>".date('Y')."</option>";
	$opt .= "<option value='2008'>2008</option>";
	$opt .= "<option value='2009'>2009</option>";
	$opt .= "<option value='2010'>2010</option>";
	$opt .= "<option value='2011'>2011</option>";
	return $opt;
}
?>
