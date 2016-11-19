$(document).ready(function(){

  // Adds smooth scrolling to links
  // Referenced from http://www.w3schools.com/jquery/tryit.asp?filename=tryjquery_eff_animate_smoothscroll
  $('.inPage').on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      event.preventDefault(); // prevents default behavior upon link click
      var hash = this.hash; // hash refers to the anchor locations in the page--called "hash" because they are indicated by # in the URL
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 400, function(){ // 400 ms is time of the animation
        window.location.hash = hash;
      });
    }
  });

  $('#contactForm').submit(function(e) {
    e.preventDefault();
    validate();
  });
});


// Validates form
function validate() {

  var radioErrorsNotPresent = 0;
  var errorsPresentInDoc = 0;
  var nameV = document.getElementById('contactNameInput').value;
  var emailV = document.getElementById('emailAddressInput').value;
  var subjectV = document.getElementsByName('message-subject');
  var messageV = document.getElementById('message').value;
  var errorArr = [];

  // check name
  if (nameV == '' || nameV == null) {
    errorArr.push('<br>You must enter your name');
    errorsPresentInDoc = 1;
  }

  // check email
  if (emailV == '' || emailV == null) {
    errorArr.push('<br>You must enter your email address');
    errorsPresentInDoc = 1;
  }

 // check subject radios
  for (var j=0; j<subjectV.length; j++) {
    if (subjectV[j].checked) {
      radioErrorsNotPresent = 1;
      break;
    }
  }
  if (!radioErrorsNotPresent)  {
    errorArr.push('<br>You must select a subject');
    errorsPresentInDoc = 1;
  }

  if (messageV == '' || messageV == null) {
    errorArr.push('<br>You must enter a message');
    errorsPresentInDoc = 1;
  }

  // print validation outcome
  if (!errorsPresentInDoc) {
    document.getElementById('contactForm').innerHTML='<p id=\'successId\'>The information has been submitted!</p>';
  }
  else {
    document.getElementById('errorSection').innerHTML='Error!\n' + errorArr.toString();
  }

  return false;
};
