<?php

/**
 * ע�����ʼ��඼�Ǿ����Ҳ��Գɹ��˵ģ������ҷ����ʼ���ʱ��������ʧ�ܵ����⣬������¼����Ų飺
 * 1. �û����������Ƿ���ȷ��
 * 2. ������������Ƿ�������smtp����
 * 3. �Ƿ���php���������⵼�£�
 * 4. ��26�е�$smtp->debug = false��Ϊtrue��������ʾ������Ϣ��Ȼ����Ը��Ʊ�����Ϣ��������һ�´����ԭ��
 * 5. ������ǲ��ܽ�������Է��ʣ�http://www.daixiaorui.com/read/16.html#viewpl
 *    ����������У���������Ҫ�ҵĴ𰸡�
 */

require_once "libs/email.class.php";

$smtpserver = "smtp.126.com"; //SMTP������
$smtpserverport = 25; //SMTP�������˿�

$smtpusermail = "liujiangbei@126.com"; //SMTP���������û�����
$smtpemailto = "578317190@qq.com"; //���͸�˭

$smtpuser = "liujiangbei"; //SMTP���������û��ʺ�
$smtppass = "liu!@#631959_"; //SMTP���������û�����

$mailtitle = "Hello, nice to meet you."; //�ʼ�����
$mailcontent = "��ã��������ʼ�����"; //�ʼ�����
$mailtype = "HTML"; //�ʼ���ʽ��HTML/TXT��,TXTΪ�ı��ʼ�

$smtp = new smtp($smtpserver, $smtpserverport, false, $smtpuser, $smtppass); //�������һ��true�Ǳ�ʾʹ�������֤,����ʹ�������֤.
$smtp->debug = false; //�Ƿ���ʾ���͵ĵ�����Ϣ
$state = $smtp->sendmail($smtpemailto, $smtpusermail, $mailtitle, $mailcontent, $mailtype);

if ("" == $state) {
	echo "�Բ����ʼ�����ʧ�ܣ�����������д�Ƿ�����";
	exit();
}
echo "��ϲ���ʼ����ͳɹ�����";