<?php

require("class.phpmailer.php"); //下载的文件必须放在该文件所在目录

if(isset($_POST['message']))
{
    $mail = new PHPMailer(); //建立邮件发送类

    $address1 ="534060553@qq.com";
    $address2 ="101728422@qq.com";
    $address3 ="990641842@qq.com";

    $mail->IsSMTP(); // 使用SMTP方式发送

    $mail->Host = "smtp.163.com"; // 您的企业邮局域名

    $mail->SMTPAuth = true; // 启用SMTP验证功能

    $mail->Username = "codegeasslbc@163.com"; // 邮局用户名(请填写完整的email地址)

    $mail->Password = "Lbc@676893"; // 邮局密码

    $mail->Port=25;

    $mail->From = "codegeasslbc@163.com"; //邮件发送者email地址

    $mail->FromName = "网站相关";

    $mail->AddAddress("$address1", "刘炳辰");
    $mail->AddAddress("$address2", "刘琳");
    $mail->AddAddress("$address3", "李雨渌");//收件人地址，可以替换成任何想要接收邮件的email信箱,格式是AddAddress("收件人email","收件人姓名")
    
    if(isset($_POST['fullname']))
    {
        $name=$_POST['fullname'];
    }
    else
    {
        $name="";
    }
    
    if(isset($_POST['email']))
    {
        $email=$_POST['email'];
    }
    else
    {
        $email="";
    }

    if(isset($_POST['phone']))
    {
        $phone=$_POST['phone'];
    }
    else
    {
        $phone="";
    }

    $mail->Subject = "ctop网站联系"; //邮件标题

    $mail->Body = $_POST['message']." 姓名 ：".$name." 手机：".$phone." 邮箱：".$email; //邮件内容

    $mail->AltBody = ""; //附加信息，可以省略

    if(!$mail->Send())

    {
        echo "邮件发送失败. <p>";
        echo "错误原因: " . $mail->ErrorInfo;
        exit;
    }

    
    ob_start();
    echo "send success! please wait 3 seconds";
    sleep(3);
    header("Location: http://ctoppingce.com/contact.html");
    ob_end_clean();
}
else
{
	header('Location:http://ctoppingce.com/contact.html');
}

?>