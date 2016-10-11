$(document).ready(function(){

  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 400, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  });

  $("#contactForm").submit(function(e) {
    e.preventDefault();
  });
});


function validate() {

  var radioErrorsNotPresent = 0;
  var errorsPresentInDoc = 0;
  var nameV = document.getElementById('contactNameInput').value;
  var emailV = document.getElementById('emailAddressInput').value;
  var subjectV = document.getElementsByName('message-subject');
  var messageV = document.getElementById('message').value;
  var errorArr = [];

  if (nameV == "" || nameV == null) {
    errorArr.push("<br>You must enter your name");
    errorsPresentInDoc = 1;
  }

  if (emailV == "" || emailV == null) {
    errorArr.push("<br>You must enter your email address");
    errorsPresentInDoc = 1;
  }

  for (var j=0; j<subjectV.length; j++) {
    if (subjectV[j].checked) {
      radioErrorsNotPresent = 1;
      break;
    }
  }
  if (!radioErrorsNotPresent)  {
    errorArr.push("<br>You must select a subject");
    errorsPresentInDoc = 1;
  }

  if (messageV == "" || messageV == null) {
    errorArr.push("<br>You must enter a message");
    errorsPresentInDoc = 1;
  }

  if (!errorsPresentInDoc) {
    document.getElementById("contactForm").innerHTML="<p id=\"successId\">The information has been submitted!</p>";
    document.getElementById("errorSection").innerHTML="";
  }
  else {
    document.getElementById("errorSection").innerHTML="Error!\n" + errorArr.toString();
  }

  return false;
};
