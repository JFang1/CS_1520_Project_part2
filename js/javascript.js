$("#greatForm").submit(function(e) {
  e.preventDefault();
});

function validate(){
  var errorsNotPresent = 0;
  var errorsPresentInDoc = 0;
  var liftRadios = document.getElementsByName('lift-status');
  var cardioRadios = document.getElementsByName('cardio-status');
  var problemAnswer = document.getElementById('problemStatus').value;
  var errorArr = [];

  for (var i=0; i<liftRadios.length; i++) {
    if (liftRadios[i].checked) {
      errorsNotPresent = 1;
      break;
    }
  }
  if (!errorsNotPresent)
  {
    errorArr.push("You must select an option for the lifting question!<br>");
    errorsPresentInDoc = 1;
  }
  errorsNotPresent = 0;

  for (var j=0; j<cardioRadios.length; j++) {
    if (cardioRadios[j].checked) {
      errorsNotPresent = 1;
      break;
    }
  }
  if (!errorsNotPresent)
  {
    errorArr.push("You must select an option for the lifting question!<br>");
    errorsPresentInDoc = 1;
  }
  errorsNotPresent = 0;

  if (problemAnswer == "" || problemAnswer == null)
  {
    errorArr.push("You must explain why you avoid your problems!<br>");
    errorsPresentInDoc = 1;
  }

  if (!errorsPresentInDoc) {
    document.getElementById("toReplace").innerHTML="<p>Success!</p>";
  }
  else {
    document.getElementById("errorSection").innerHTML=errorArr.toString() + problemAnswer;
  }

  return false;
};
