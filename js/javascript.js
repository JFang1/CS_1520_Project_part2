$(document).ready(function(){

  // Adds smooth scrolling to links
  // Referenced from http://www.w3schools.com/jquery/tryit.asp?filename=tryjquery_eff_animate_smoothscroll
  $('a').on('click', function(event) {
    event.preventDefault(); // prevents default behavior upon link click
    var hash = this.hash; // hash refers to ID'd locations in the page
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 400, function(){ // 400 ms is time of the animation
      window.location.hash = hash;
    });
  });

  // Implements a floating nav bar
  // Referenced from http://www.dwuser.com/education/content/creating-a-floating-navigation-menu/
  $(function() {
    var nav = $('nav');
    var originalNavBarPosition = nav.offset().top;
    var $windowVar = $(window);
    $windowVar.scroll(function() { // When scrolling occurs
      // A problem here is when you refresh at a hash partway down the page, e.g. [PATH]/index.html#currentProjects, you haven't actually scrolled, so the nav bar doesn't show up
      var scrollPos = $windowVar.scrollTop();
      var shouldBeFixedBool = scrollPos > originalNavBarPosition + 500; // Have you scrolled down past the nav bar + 500, requiring the nav bar to change position?  The 500 makes it so that the float isn't immediate.
      if (shouldBeFixedBool) { // i.e. when you've scrolled down past the nav bar
        nav.css ({
          position: 'fixed', // in relation to the viewing pane
          top: 0, // to keep it at the top of the screen instead of its original location on the screen when you're at the very top
          left: nav.offset().left,
          width: $windowVar.width(), // Instead of referencing the original width of the nav bar, I'm using the width of the window in case that changes
        });
      }
      else if (!shouldBeFixedBool) { // i.e. when you're not yet past the original nav bar location
        nav.css({
          position: 'static' // in relation to the other elements on the page
        });
      }
    });
  });

  $('#contactForm').submit(function(e) {
    e.preventDefault();
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
    document.getElementById('errorSection').innerHTML='';
  }
  else {
    document.getElementById('errorSection').innerHTML='Error!\n' + errorArr.toString();
  }

  return false;
};
