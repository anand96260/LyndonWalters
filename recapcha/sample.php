        <?php
          require_once('recaptchalib.php');
          $publickey = "6Lfim9oSAAAAAC5Jd8ullbgqoV-y1fjwM-_4ecJF"; // you got this from the signup page
          echo recaptcha_get_html($publickey);
        ?>
      