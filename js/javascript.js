(function() {
  $(".navbar").hide();
  $('#enter').hide();
})();

$(document).ready(function() {
  // Adds smooth scrolling to links
  // Referenced from http://www.w3schools.com/jquery/tryit.asp?filename=tryjquery_eff_animate_smoothscroll
  $('.in-page').on('click', function(event) {
    // Making sure this.hash has a value before overriding default behavior
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

  // Referenced from http://stackoverflow.com/questions/26266243/hide-div-when-in-top-of-page-with-jquery
  $(window).on("scroll", function() {
    var pagePos = $(window).scrollTop();
    if (pagePos <= 0) {
        $(".navbar").hide();
    }
    else {
        $(".navbar").fadeIn();
    }
  });

  $('#arrow').hover(function() {
    $('#enter').fadeIn();
  });

  $('#unhide').click(function() {
    $('#hideAtFirst').css("visibility", "visible");
  });

  $('#contactForm').submit(function(event) {
    event.preventDefault();

    var radioErrorsNotPresent = 0;
    var errorsPresentInDoc = 0;
    var nameV = document.getElementById('contactNameInput').value;
    var emailV = document.getElementById('emailAddressInput').value;
    var subjectV = document.getElementsByName('message-subject');
    var messageV = document.getElementById('message').value;
    var errorArr = [];
    var subV;

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
        subV = subjectV[j].value;
        break;
      }
    }
    if (!radioErrorsNotPresent)  {
      errorArr.push('<br>You must select a subject');
      errorsPresentInDoc = 1;
    }

    // check message
    if (messageV == '' || messageV == null) {
      errorArr.push('<br>You must enter a message');
      errorsPresentInDoc = 1;
    }

    // print validation outcome
    if (!errorsPresentInDoc) {
      document.getElementById('contactForm').innerHTML='<p id=\'successId\'>Message submitted successfully!</p>';
      var dataString = '&name=' + nameV + '&email=' + emailV + '&subject=' + subV + '&message=' + messageV;

      // fetch submission destination
      var url = $('#contactForm').attr('action');

      /* Referenced:
       * http://stackoverflow.com/questions/5143191/inserting-into-mysql-from-php-jquery-ajax
       * https://www.sanwebe.com/2012/04/ajax-add-delete-sql-records-jquery-php
       */
      $.ajax( {
        type: "POST",
        url: url,
        data: dataString,
        cache: false,
        dataType: 'text',
        success: function(result) {
          alert('Result: ' + result);
        },
        error: function(errData) {
          alert('AJAX error: ' + errData);
        }
      });
    }
    else {
      document.getElementById('errorSection').innerHTML='Error!\n' + errorArr.toString();
    }

    return false;
  });
});
