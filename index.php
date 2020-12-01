<?php
$key = openssl_pkey_new(array('private_key_bits' => 2048));

$bob_key = openssl_pkey_get_details($key);
$bob_public_key = $bob_key['key'];

$alice_msg = "Hi Bob, im sending you a private message";
openssl_public_encrypt($alice_msg, $pvt_msg, $bob_public_key);

openssl_private_decrypt( $pvt_msg, $bob_received_msg, $key);
print $bob_received_msg;