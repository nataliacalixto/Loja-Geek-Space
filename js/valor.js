
function ForceNumericInput(event, This, AllowDecimal, AllowMinus)
{
if(arguments.length == 1)
{
var s = This.value;

var i = s.lastIndexOf("-");
if(i == -1)
return;
if(i != 0)
This.value = s.substring(0,i)+s.substring(i+1);
return;
}
switch(event.keyCode)
{
case 8:     // backspace
case 9:     // tab
case 37:    // left arrow
case 39:    // right arrow
case 46:    // delete
event.returnValue = true;
return;
}
if(event.keyCode == 189)     // sinal de número de negativo
{
if(AllowMinus == false)
{
CancelEventExecution(event);
return;
}
// aguarda até que o controle tenha sido atualizado
var s = "ForceNumericInput(document.getElementById('"+This.id+"'))";
setTimeout(s, 250);
return;
}
if(AllowDecimal &amp;&amp; event.keyCode == 188)
{
if(This.value.indexOf(",") &gt;= 0)
{

CancelEventExecution(event);
return;
}
event.returnValue = true;
return;
}

if(event.keyCode &gt;= 48 &amp;&amp; event.keyCode &lt;= 57)
{
event.returnValue = true;
return;
}
CancelEventExecution(event);
}

function CancelEventExecution(event)
{
if (navigator.appName == "Netscape")
{
event.preventDefault();
}
else
{
event.returnValue = false;
}
}