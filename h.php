<?php
echo '<html>';
echo '<head>';
echo '<title>hCaptcha Demo</title>';
echo '<script src="https://hcaptcha.com/1/api.js" async defer></script>';
echo '</head>';
echo '<body>';
echo '<form action="" method="POST">';
echo '<input type="text" name="email" placeholder="Email">';
echo '<input type="password" name="password" placeholder="Password">';
echo '<div class="h-captcha" data-sitekey="884f5730-bd53-4d5f-9f09-d4d48e5f47d7"></div>';
echo '<br>';
echo '<input type="submit" value="Submit">';
echo '</form>';
echo '</body>';
echo '</html>';
?>