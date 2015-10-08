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
$mail->Username = "liujiangbei";
$mail->Password = "liu!@#631959_";

// 发件人
$mail->SetFrom('liujiangbei@126.com', 'JiangbeiLiu');

// 收件人
$mail->AddAddress('578317190@qq.com', "578317190");
$mail->AddAddress('578317190@qq.com', "578317190");

// $mail->AddReplyTo('liujiangbei@126.com', 'JiangbeiLiu');

$mail->isHTML(true);
$mail->Subject = 'Hello'; // 设置邮件标题
$mail->AltBody = "为了查看该邮件，请切换到支持 HTML 的邮件客户端";
$mail->MsgHTML('<div style="font-size:20px">刘江北你好，请您立刻回家。</div>');
//$mail->AddAttachment("images/phpmailer.gif"); // 附件

if (!$mail->Send()) {
	echo "发送失败：" . $mail->ErrorInfo;
} else {
	echo "恭喜，邮件发送成功！\r\n";
}