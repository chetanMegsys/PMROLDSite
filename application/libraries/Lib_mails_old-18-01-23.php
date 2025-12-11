<?php
class Lib_mails {

    function LibMail($email_setting){

    	$to 	 = $email_setting['email_to'];
    	$subject = $email_setting['subject'];
    	$message = $this->getTemplate($email_setting);

        $headers = "From: PMR Sales <sales@persistencemarketresearch.com>\r\n";
        $headers.= 'MIME-Version: 1.0' . "\r\n";
        $headers.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $sent = @mail($to, $subject, $message, $headers);
        return $sent;

    }

    function LibDPMail($email_setting, $paymentType){

        $to      = $email_setting['email_to'];
        $subject = $email_setting['subject'];
        $message = $this->getDPTemplate($email_setting, $paymentType);

        $headers = "From: PMR Sales <sales@persistencemarketresearch.com>\r\n";
        $headers.= 'MIME-Version: 1.0' . "\r\n";
        $headers.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $sent = @mail($to, $subject, $message, $headers);
        return $sent;

    }

    function getTemplate($email_setting){
        $template = '<div style="width: 550px;margin:20px auto;">
            <table style="width: 550px;margin:0 auto;border-collapse: collapse;border: 1px solid #ddd;font-family: Calibri,Arial,Verdana,Sans-Serif;font-size: 14px;background: #f9f9f9;border-radius: 4px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <tbody>
                    <tr>
                        <td colspan="2" style="padding: 0 20px;">
                        <h1 style="text-align: center;line-height: 2em;border-bottom: 1px dotted #ddd;color: #0192D8;font-size: 1.8em;">Persistence Market Research</h1>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding: 0 20px;">
                        <p style="font-weight: bold;">Dear Sales Team,</p>

                        <p style="margin-bottom:15px;">Please find details below for <span style="font-weight: bold;">'.$email_setting['source'].'</span> query.</p>
                        </td>
                    </tr>
                    <tr style="background: #F0F2FF">
                        <td style="padding: 10px;border:1px solid #ddd;"><span style="font-weight: bold;">Name:</span></td>
                        <td style="padding: 10px;border:1px solid #ddd;"><span>'.$email_setting['name'].'</span></td>
                    </tr>
                    <tr>
                        <td style="padding: 10px;border:1px solid #ddd;"><span style="font-weight: bold;">Email:</span></td>
                        <td style="padding: 10px;border:1px solid #ddd;"><span>'.$email_setting['email'].'</span></td>
                    </tr>
                    <tr>
                        <td style="padding: 10px;border:1px solid #ddd;"><span style="font-weight: bold;">Company:</span></td>
                        <td style="padding: 10px;border:1px solid #ddd;"><span>'.$email_setting['comapny'].'</span></td>
                    </tr>
                    <tr style="background: #F0F2FF">
                        <td style="padding: 10px;border:1px solid #ddd;"><span style="font-weight: bold;">Job Title:</span></td>
                        <td style="padding: 10px;border:1px solid #ddd;"><span>'.$email_setting['job_title'].'</span></td>
                    </tr>
                    <tr style="background: #F0F2FF">
                        <td style="padding: 10px;border:1px solid #ddd;"><span style="font-weight: bold;">Report:</span></td>
                        <td style="padding: 10px;border:1px solid #ddd;"><span style="font-weight: bold;">'.$email_setting['report'].'</span></td>
                    </tr>
                    <tr style="background: #F0F2FF">
                        <td style="padding: 10px;border:1px solid #ddd;"><span style="font-weight: bold;">Report Type:</span></td>
                        <td style="padding: 10px;border:1px solid #ddd;"><span style="font-weight: bold;">'.$email_setting['report_type'].'</span></td>
                    </tr>
                    <tr>
                        <td style="padding: 10px;border:1px solid #ddd;"><span style="font-weight: bold;">Category:</span></td>
                        <td style="padding: 10px;border:1px solid #ddd;"><span>'.$email_setting['category'].'</span></td>
                    </tr>
                    <tr style="background: #F0F2FF">
                        <td style="padding: 10px;border:1px solid #ddd;"><span style="font-weight: bold;">Phone:</span></td>
                        <td style="padding: 10px;border:1px solid #ddd;"><span>'.$email_setting['phone'].'</span></td>
                    </tr>
                    <tr>
                        <td style="padding: 10px;border:1px solid #ddd;"><span style="font-weight: bold;">Country:</span></td>
                        <td style="padding: 10px;border:1px solid #ddd;"><span>'.$email_setting['country'].'</span></td>
                    </tr>
                    <tr style="background: #F0F2FF">
                        <td style="padding: 10px;border:1px solid #ddd;"><span style="font-weight: bold;">Source:</span></td>
                        <td style="padding: 10px;border:1px solid #ddd;"><span>'.$email_setting['source'].'</span></td>
                    </tr>
                    <tr>
                        <td style="padding: 10px;border:1px solid #ddd;"><span style="font-weight: bold;">Message:</span></td>
                        <td style="padding: 10px;border:1px solid #ddd;"><span>'.$email_setting['message'].'</span></td>
                    </tr>
                    <tr>
                        <td colspan="2">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            </div>
            ';

        return $template;
           
    }

    function getDPTemplate($email_setting, $paymentType){
        $template = '<div style="width: 550px;margin:20px auto;">
            <table style="width: 550px;margin:0 auto;border-collapse: collapse;border: 1px solid #ddd;font-family: Calibri,Arial,Verdana,Sans-Serif;font-size: 14px;background: #f9f9f9;border-radius: 4px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <tbody>
                    <tr>
                        <td colspan="2" style="padding: 0 20px;">
                        <h1 style="text-align: center;line-height: 2em;border-bottom: 1px dotted #ddd;color: #0192D8;font-size: 1.8em;">Persistence Market Research</h1>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding: 0 20px;">
                        <p style="font-weight: bold;">Dear Sales Team,</p>

                        <p style="margin-bottom:15px;">Please find details below for <span style="font-weight: bold;">'.$email_setting['source'].'</span> query.</p>
                        </td>
                    </tr>
                    <tr style="background: #F0F2FF">
                        <td style="padding: 10px;border:1px solid #ddd;"><span style="font-weight: bold;">Name:</span></td>
                        <td style="padding: 10px;border:1px solid #ddd;"><span>'.$email_setting['name'].'</span></td>
                    </tr>
                    <tr>
                        <td style="padding: 10px;border:1px solid #ddd;"><span style="font-weight: bold;">Email:</span></td>
                        <td style="padding: 10px;border:1px solid #ddd;"><span>'.$email_setting['email'].'</span></td>
                    </tr>
                    <tr>
                        <td style="padding: 10px;border:1px solid #ddd;"><span style="font-weight: bold;">Phone:</span></td>
                        <td style="padding: 10px;border:1px solid #ddd;"><span>'.$email_setting['phone'].'</span></td>
                    </tr>
                    <tr style="background: #F0F2FF">
                        <td style="padding: 10px;border:1px solid #ddd;"><span style="font-weight: bold;">Address:</span></td>
                        <td style="padding: 10px;border:1px solid #ddd;"><span>'.$email_setting['address'].'</span></td>
                    </tr>
                    <tr style="background: #F0F2FF">
                        <td style="padding: 10px;border:1px solid #ddd;"><span style="font-weight: bold;">Report:</span></td>
                        <td style="padding: 10px;border:1px solid #ddd;"><span style="font-weight: bold;">'.$email_setting['report'].'</span></td>
                    </tr>
                    <tr style="background: #F0F2FF">
                        <td style="padding: 10px;border:1px solid #ddd;"><span style="font-weight: bold;">Report Type:</span></td>
                        <td style="padding: 10px;border:1px solid #ddd;"><span style="font-weight: bold;">'.$email_setting['report_type'].'</span></td>
                    </tr>
                    <tr style="background: #F0F2FF">
                        <td style="padding: 10px;border:1px solid #ddd;"><span style="font-weight: bold;">Report Price:</span></td>
                        <td style="padding: 10px;border:1px solid #ddd;"><span style="font-weight: bold;"> $'.$email_setting['price'].'</span></td>
                    </tr>
                    <tr style="background: #F0F2FF">
                        <td style="padding: 10px;border:1px solid #ddd;"><span style="font-weight: bold;">Phone:</span></td>
                        <td style="padding: 10px;border:1px solid #ddd;"><span>'.$email_setting['phone'].'</span></td>
                    </tr>
                    <tr>
                        <td style="padding: 10px;border:1px solid #ddd;"><span style="font-weight: bold;">Country:</span></td>
                        <td style="padding: 10px;border:1px solid #ddd;"><span>'.$email_setting['country'].'</span></td>
                    </tr>
                    <tr style="background: #F0F2FF">
                        <td style="padding: 10px;border:1px solid #ddd;"><span style="font-weight: bold;">Source:</span></td>
                        <td style="padding: 10px;border:1px solid #ddd;"><span>'.$paymentType.'</span></td>
                    </tr>
                    <tr>
                        <td colspan="2">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            </div>
            ';

        return $template;
           
    }

}
?>