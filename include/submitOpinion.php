<?php
date_default_timezone_set('Asia/Manila');
      //Connect to MySQL
require_once("../database/connect.php");
      if (isset($_POST["submitPro"])) {               //process this block if submitted from the Add 
        //$userID = $_SESSION['userid'];
        $discid = 1;
        $comment = $_POST["comment"];
        $datetoday = date_create()->format('Y-m-d H:i:s');
          //Build the query to use to insert the new record
        $query = "INSERT INTO comment(DiscussionID, UserID, ComTypeID, Comment, DateAdded)
        VALUES ('$discid', 1, 1, '$comment', '$datetoday')";

          //Insert new opinion into MySQL
        if ($conn->query($query) === TRUE) {
          ?>
          <script>
            window.location.href='../discussion.php?<?php echo $discid?>';
          </script>
          <?php
        } else {
          ?>
          <script>
            window.location.href='../discussion.php?<?php echo $discid ?>';
          </script>
          <?php
          die ($conn->error);
          /*}*/
        }
    } elseif(isset($_POST["submitCon"])) {               //process this block if submitted from the Add 
        //$userID = $_SESSION['userid'];
      $discid = 1;
      $comment = $_POST["comment"];
      $datetoday = date_create()->format('Y-m-d H:i:s');

          //Build the query to use to insert the new record
      $query = "INSERT INTO comment(DiscussionID, UserID, ComTypeID, Comment, DateAdded)
      VALUES ('$discid', 1, 2, '$comment', '$datetoday')";

          //Insert new opinion into MySQL
      if ($conn->query($query) === TRUE) {
        ?>
        <script>
          window.location.href='../discussion.php?<?php echo $discid?>';
        </script>
        <?php
      } else {
        ?>
        <script>
          window.location.href='../discussion.php?<?php echo $discid ?>';
        </script>
        <?php
        die ($conn->error);
        /*}*/
      }
    }
    ?>