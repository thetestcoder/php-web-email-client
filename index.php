<?php

$data = require_once 'config.php';

// imap_open, imap_headers, imap_num_msg, imap_header, imap_body, imap_close

$mail_handle = imap_open("{imap.gmail.com:993/ssl}", $data['mail']['username'], $data['mail']['password']);

$headers = imap_headers($mail_handle);

$last = imap_num_msg($mail_handle);

$single_mail = imap_header($mail_handle, $last);

$single_mail_body = imap_body($mail_handle, $last);

echo "<pre>";

print_r($single_mail_body);

echo "</pre>";


imap_close($mail_handle);