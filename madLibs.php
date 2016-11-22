<?php
  $noun1 = $_REQUEST['first-noun'];
  $noun2 = $_REQUEST['second-noun'];
  $noun3 = $_REQUEST['third-noun'];
  $noun4 = $_REQUEST['fourth-noun'];
  $adjective5 = $_REQUEST['adjective'];
  if(empty($noun1) || empty($adj) || empty($gname) || empty($bpart)) {
    echo "<br>Oops<br>";
  }
  else {
    echo "<p>But I must explain to you how all this mistaken idea of denouncing of $noun1 and praising $noun2 was born and I will give you a complete account of the system, and expound the actual teachings of the great $noun3 of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids $noun1 itself, because it is $noun1, but because those who do not know how to pursue $noun1 rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain $noun2 of itself, because it is $noun2, but occasionally circumstances occur in which $noun4 and $noun2 can procure him some $adjective5 pleasure.</p>";
    echo "<p><i>This mad lib is based on H. Rackham's 1914 translation of Cicero's</i> De finibus bonorum et malorum<i>--more specifically from paragraph 32, the original source of the Lorem Ipsum filler text.</i></p>";
  }
?>
