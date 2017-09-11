
function getObject(obj) {
  var theObj;
  if(document.all) {
    if(typeof obj=="string") {
      return document.all(obj);
    } else {
      return obj.style;
    }
  }
  if(document.getElementById) {
    if(typeof obj=="string") {
      return document.getElementById(obj);
    } else {
      return obj.style;
    }
  }
  return null;
}

function toCheck(entrance) {
  var entranceObj=getObject(entrance);
  var mystring=entranceObj.value;

if (mystring.match(/%$/)) {
	//alert("autoSubmit barcode");
	document.form1.submit();
	}

  
;
}


function toCount(entrance,exit,text,characters) {
  var entranceObj=getObject(entrance);
  var exitObj=getObject(exit);
  var length=characters - entranceObj.value.length;
  
	toCheck(entrance);
 
 if(length == 80) {
	//alert('ping');
		var uri;
		uri ='?art='+document.form1.text2.value+'&logic2=';

	  window.location.href=uri;	}
  
  if(length <= 0) {
    length=0;
    text='<span class="disable"> '+text+' </span>';
    entranceObj.value=entranceObj.value.substr(0,characters);
    }
  exitObj.innerHTML = text.replace("{CHAR}",length);
  
}


string="";
function app(cc) {
  string+=cc;
  document.form1.text1.value=string;
  toCount('text1','sBann','{CHAR} bytes left',100);
}
function clear() {
  string="";
  document.form1.text1.value=string;
}
function calc() {
  if(string.length > 0) {
    inp="out="+string;
    eval(inp);
  } else out="0";
  document.form1.text1.value=out;
  string=""+out;
  
}
function upda() {
  string=""+document.form1.text1.value; 
  //window.location.href='?logic='+document.form1.text1.value;
}
function upda2() {
  string=""+document.form1.text1.value; 
}
