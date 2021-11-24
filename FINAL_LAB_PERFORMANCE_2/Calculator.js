$(document).ready(function()
{
    $("button").click(function()
    {
        $.post("calc.php",  { formText : $("#ip1").val() },
            function(data, status) {  $("#ip1").val(data);
        });
    });
});

function ajax_post()
{
  var ajax = ajaxObj("POST","calc.php");
  var inp1 = document.getElementById("input1").value;
  var inp2 = document.getElementById("input2").value;
  var operator = document.getElementById("operator").value;
  var datastring = "name="+inp1+"&id="+inp2+"&op="+operator;
  ajax.onreadystatechange = function()
  {
    if(ajaxReturn(ajax) == true)
    {
      document.getElementById("status").innerHTML ="Value = " + ajax.responseText;
    }
  }
  ajax.send(datastring);
  document.getElementById("status").innerHTML = "Processing...";
}