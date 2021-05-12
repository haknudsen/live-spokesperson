<?php
$pageURL = 'http';
if ( $_SERVER[ "HTTPS" ] == "on" ) {
  $pageURL .= "s";
}
$pageURL .= "://";
if ( $_SERVER[ "SERVER_PORT" ] != "80" ) {
  $pageURL .= $_SERVER[ "SERVER_NAME" ] . ":" . $_SERVER[ "SERVER_PORT" ] . $_SERVER[ "REQUEST_URI" ];
} else {
  $pageURL .= $_SERVER[ "SERVER_NAME" ] . $_SERVER[ "REQUEST_URI" ];
}
if ( isset( $_SERVER[ 'HTTP_X_FORWARDED_FOR' ] ) && $_SERVER[ 'HTTP_X_FORWARTDED_FOR' ] != '' ) {
  $sentIP = $_SERVER[ 'HTTP_X_FORWARDED_FOR' ];
} else {
  $sentIP = $_SERVER[ 'REMOTE_ADDR' ];
}
?>
<div class="card card-contact">
  <h5 class="card-header bg-gradient-mine text-white text-center text-uppercase">Contact Us</h5>
  <div class="card-body">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <form name="New Contact" id="__vtigerWebForm" action="https://websitetalkingheads.od1.vtiger.com/modules/Webforms/capture.php" enctype="multipart/form-data" method="post" accept-charset="utf-8">
      <input name="__vtrftk" type="hidden" value="sid:b79968d90e35e8ca67984873214e5597bbaee00c,1505250565">
      <input name="publicid" type="hidden" value="7d2174f0e1764a1915290b61d33c94b1">
      <input name="urlencodeenable" type="hidden" value="1">
      <input name="name" type="hidden" value="New Contact">
      <input name="__vtCurrency" type="hidden" value="1">
      <input name="designation" type="hidden" value="<?=$sentIP?>" data-label="">
      <input name="cf_1001" type="hidden" value="<?=$pageURL?>" data-label="">
      <table>
        <tbody>
          <tr>
            <td>
              <label>Name*</label>
            </td>
            <td>
              <input name="lastname" required="" type="text" value="" data-label="">
            </td>
          </tr>
          <tr>
            <td>
              <label>Email*</label>
            </td>
            <td>
              <input name="email" required="" type="email" value="" data-label="">
            </td>
          </tr>
          <tr>
            <td>
              <label>Phone*</label>
            </td>
            <td>
              <input name="phone" required="" type="text" value="" data-label="">
            </td>
          </tr>
          <tr>
            <td>
              <label>Message</label>
            </td>
            <td>
              <textarea rows="3" name="description"></textarea>
            </td>
          </tr>
        </tbody>
      </table>
      <div class="recaptcha-holder">
        <script src="https://www.google.com/recaptcha/api.js"></script>
        <div class="g-recaptcha" data-sitekey="6LcmdSATAAAAAGWw734vGo0AXQwuxJS7RmDZA_Fe"></div>
        <input id="captchaUrl" type="hidden" value="https://websitetalkingheads.od1.vtiger.com/modules/Settings/Webforms/actions/ValidateCaptcha.php">
        <input name="recaptcha_validation_value" id="recaptcha_validation_value" type="hidden">
      </div>
      <div class="text-center mt-2">
        <div class="submit-pointer">
          <i class="fad fa-hand-point-right shake"></i>
        </div>
        <button id="vtigerFormSubmitBtn" type="submit" value="Submit" class="btn btn-custom center-block btn-lg text-center">SUBMIT</button>
      </div>
    </form>
  </div>
</div>
<script src="http://www.live-spokesperson.com/forms/form.js"></script>
