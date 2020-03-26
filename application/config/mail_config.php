<?php
defined('BASEPATH') or exit('Direct script not allowed');
$config['mail'] = array(
    /*--------------------------------------------
     |	MAIL AUTHORIZATION
     ---------------------------------------------
     */
    'protocol'      => 'mail',
    'smtp_user'     => 'yourname@example.com',
    'smtp_host'     => 'mail.example.com',
    'smtp_pass'     => 'password',
    'smtp_port'     => '587',
    'smtp_crypto'   => 'tsl',
    'mailtype'      => 'html',
    'charset'       => 'utf-8',

    /*--------------------------------------------
     |	MAIL CONFIGURATION
     ---------------------------------------------
     */
    'mail_to'       => 'irahulsaini01@gmail.com', /* Multiple Email Seperated by comma (,) */
    //'mail_cc'       => 'irahulsaini01@gmail.com', /* Multiple Email Seperated by comma (,) */
    //'mail_bcc'      => 'irahulsaini01@gmail.com', /* Multiple Email Seperated by comma (,) */
    'from_name'     => ucfirst(str_replace('www.','',$_SERVER['HTTP_HOST'])),
    'from_email'    => 'engine@'.str_replace('www.','',$_SERVER['HTTP_HOST']),
    'mail_2'        => 1, /* 0 = disable, 1 = enable */
     
     

    /*--------------------------------------------
     |	CONTACT FORM CONFIGURATION
     ---------------------------------------------
     */
    'contact' => array(
        'subject_1'      => 'You have recevied a query',
        'message_1'      => '<p><b>Details:</b></p><table><tr><td><strong>Name</strong</td><th>:</th><td>{name}</td></tr><tr><td><strong>Email</strong</td><th>:</th><td>{email}</td></tr><tr><td><strong>Phone</strong</td><th>:</th><td>{phone}</td></tr><tr><td><strong>Message</strong</td><th>:</th><td>&nbsp;</td></tr><tr><td colspan="3">{message}</td></tr></table><p><strong>Sent from:</strong> {url}</p>',
        'subject_2'    => 'Thank you for contacting us',
        'message_2'    => '<p>Dear {name}, Thank you for contacting us. We\'ll revert you soon</p><p><strong>Thanks &amp; Regards</strong>'
    )
     
);
