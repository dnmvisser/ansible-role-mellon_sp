<?php

/* TEST
 * Create metadata based to be used on the SP proxy
 *
 */
$metadata['https://{{ vhosts[0] }}/mellon/metadata'] = array (
  'entityid' => 'https://{{ vhosts[0] }}/mellon/metadata',
  'contacts' => 
  array (
  ),
  'metadata-set' => 'saml20-sp-remote',
  'AssertionConsumerService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://{{ vhosts[0] }}/mellon/postResponse',
      'index' => 0,
      'isDefault' => true,
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
      'Location' => 'https://{{ vhosts[0] }}/mellon/artifactResponse',
      'index' => 1,
    ),
    2 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:PAOS',
      'Location' => 'https://{{ vhosts[0] }}/mellon/paosResponse',
      'index' => 2,
    ),
  ),
  'SingleLogoutService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
      'Location' => 'https://{{ vhosts[0] }}/mellon/logout',
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://{{ vhosts[0] }}/mellon/logout',
    ),
  ),
  'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
  'keys' => 
  array (
    0 => 
    array (
      'encryption' => false,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => 'keydata',
    ),
    1 => 
    array (
      'encryption' => true,
      'signing' => false,
      'type' => 'X509Certificate',
      'X509Certificate' => '',
    ),
  ),
  'validate.authnrequest' => true,
  'saml20.sign.assertion' => true,
);
?>
