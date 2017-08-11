<?php
namespace phpmailer;

class Email{
    /**
     * @param $to
     * @param $title
     * @param $content
     * @return bool
     */
    public static function send($to,$title,$content){
        date_default_timezone_set('PRC');
        if (empty($to)){
            return false;
        }
        try{
            vendor('phpmailer.PHPMailer');
            $mail = new PHPMailer();
            $mail->isSMTP();
            // 0 = off (for production use)
            // 1 = client messages
            // 2 = client and server messages
            $mail->SMTPDebug = 0;
            $mail->Debugoutput = 'html';

            $emailConf = C('EMAIL_CONFIG');

            $mail->Host = $emailConf['host'];
            $mail->Port = $emailConf['port'];
            $mail->SMTPAuth = true;
            $mail->Username = $emailConf['username'];//TODO 邮箱账号
            $mail->Password = $emailConf['password']; //TODO 客户端密码
            $mail->setFrom($emailConf['username'], '木头人');
            $mail->addAddress($to, 'xx');
            $mail->Subject = $title;
            $mail->msgHTML($content);
            if (!$mail->send()) {
                return false;
                //echo "Mailer Error: " . $mail->ErrorInfo;
            } else {
                return true;
                //echo "Message sent success!";
            }
        }catch (phpmailerException $e){
            return false;
        }
    }
}