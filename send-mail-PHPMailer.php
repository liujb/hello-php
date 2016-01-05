<?php


require_once 'libs/PHPMailer/class.phpmailer.php';
require_once "libs/PHPMailer/class.smtp.php";

$mail = new PHPMailer(true);

$mail->IsSMTP();
$mail->CharSet = "UTF-8";
$mail->SMTPAuth = true;

// 是否打开调试信息
// $mail->SMTPDebug = 1;

$mail->Host = "smtp.126.com";
$mail->Port = 25;

// smtp加密
// $mail->SMTPSecure = "ssl";
// $mail->Port = 465;

// 登录smtp服务的用户名和密码
$mail->Username = "xxxx";
$mail->Password = "xxxx";

// 发件人
$mail->SetFrom('xxxx@126.com', 'xxxx');

// 收件人
$mail->AddAddress('xxxx@qq.com', "xxxx");

// $mail->AddReplyTo('xxxx@126.com', 'xxxx');

$mail->isHTML(true);
$mail->Subject = 'Hello'; // 设置邮件标题
$mail->AltBody = "为了查看该邮件，请切换到支持 HTML 的邮件客户端";
$mail->MsgHTML('<div style="font-size:20px">What a fucking day.</div>');
//$mail->AddAttachment("images/phpmailer.gif"); // 附件

if (!$mail->Send()) {
	echo "发送失败：" . $mail->ErrorInfo;
} else {
	echo "恭喜，邮件发送成功！\r\n";
}
