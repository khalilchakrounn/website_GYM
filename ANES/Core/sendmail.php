<?php
require_once "phpmailer/class.phpmailer.php";
$Subject ='Verify';
$message = '  <tr>
          <td valign="top">
            <table class="innermain" cellpadding="0" width="580" cellspacing="0" border="0"
            bgcolor="#F4F7FA" align="center" style="margin:0 auto; table-layout: fixed;">
              <tbody>
            
                <tr>
                  <td colspan="4">
                  
                    <table class="logo" width="100%" cellpadding="0" cellspacing="0" border="0">
                      <tbody>
                        <tr>
                          <td colspan="2" height="30"></td>
                        </tr>
                        <tr>
                          <td valign="top" align="center">
                            <a href="https://www.facebook.com/bfacademie/" style="display:inline-block; cursor:pointer; text-align:center;">
                              <img src="https://pbs.twimg.com/profile_images/539841957132910592/CpRx-N1j_400x400.png"
                              height="75" width="104" border="0" alt="BF Academie">
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="2" height="30"></td>
                        </tr>
                      </tbody>
                    </table>
                 
                    <table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#ffffff"
                    style="border-radius: 4px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
                      <tbody>
                        <tr>
                          <td height="40"></td>
                        </tr>
                        <tr style="font-family: -apple-system,BlinkMacSystemFont,&#39;Segoe UI&#39;,&#39;Roboto&#39;,&#39;Oxygen&#39;,&#39;Ubuntu&#39;,&#39;Cantarell&#39;,&#39;Fira Sans&#39;,&#39;Droid Sans&#39;,&#39;Helvetica Neue&#39;,sans-serif; color:#4E5C6E; font-size:14px; line-height:20px; margin-top:20px;">
                          <td class="content" colspan="2" valign="top" align="center" style="padding-left:90px; padding-right:90px;">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#ffffff">
                              <tbody>
                                <tr>
                                  <td align="center" valign="bottom" colspan="2" cellpadding="3">
                                    <img alt="Coinbase" width="80" src="https://www.coinbase.com/assets/app/icon_email-e8c6b940e8f3ec61dcd56b60c27daed1a6f8b169d73d9e79b8999ff54092a111.png"
                                    />
                                  </td>
                                </tr>
                                <tr>
                                  <td height="30" &nbsp;=""></td>
                                </tr>
                                <tr>
                                  <td align="center"> <span style="color:#48545d;font-size:22px;line-height: 24px;">
          Verify your email address
        </span>

                                  </td>
                                </tr>
                                <tr>
                                  <td height="24" &nbsp;=""></td>
                                </tr>
                                <tr>
                                  <td height="1" bgcolor="#DAE1E9"></td>
                                </tr>
                                <tr>
                                  <td height="24" &nbsp;=""></td>
                                </tr>
                                <tr>
                                  <td align="center"> <span style="color:#48545d;font-size:14px;line-height:24px;">
          In order to start using your BF Academie account, you need to confirm your email address.
        </span>

                                  </td>
                                </tr>
                                <tr>
                                  <td height="20" &nbsp;=""></td>
                                </tr>
                                <tr>

                                  <td valign="top" width="48%" align="center"> <span>
          <a href="http://localhost/pi-web-svn/Core/activer.php?email=$email&token=$token" style="display:block; padding:15px 25px; background-color:#0087D1; color:#ffffff; border-radius:3px; text-decoration:none;">Verify Email Address</a>
        </span>

                                  </td>
                                </tr>
                                <tr>
                                  <td height="20" &nbsp;=""></td>
                                </tr>
                                <tr>
                                  <td align="center">
                                    <img src="https://s3.amazonaws.com/app-public/Coinbase-notification/hr.png" width="54"
                                    height="2" border="0">
                                  </td>
                                </tr>
                                <tr>
                                  <td height="20" &nbsp;=""></td>
                                </tr>
                                <tr>
                                  <td align="center">
                                    <p style="color:#a2a2a2; font-size:12px; line-height:17px; font-style:italic;">If you did not sign up for this account you can ignore this email and the account
                                      will be deleted.</p>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                        <tr>
                          <td height="60"></td>
                        </tr>
                      </tbody>
                    </table>
           
         
          </td>
        </tr>';

        

$mail = new PHPMailer(true);


$mail->IsSMTP();


$mail->SMTPDebug = 0;


$mail->SMTPAuth = true;

// sets the prefix to the server
$mail->SMTPSecure = 'ssl';


$mail->Host = 'smtp.gmail.com';


$mail->Port = 465;


$mail->Username = 'anes.temani@esprit.tn';


$mail->Password = 'anes1996';


$mail->SetFrom('anes.temani@esprit.tn', 'anes');


$mail->AddAddress($_POST['email']);

//
$mail->MsgHTML($message);


try {
    // send mail
    $mail->Send();
    $msg = "Mail send successfully";
} catch (phpmailerException $e) {
    $msg = $e->getMessage();
} catch (Exception $e) {
    $msg = $e->getMessage();
}

?>