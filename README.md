Ansible Role: mod_auth_mellon
=============================

An Ansible Role that installs the `mod_auth_mellon` Apache module.
This module implements a SAML 2.0 service provider, to authenticate against a SAML 2.0 Identity Provider (Idp).

This role installs and enables the apache module, copies cryptograhic key material, and adds IdP metadata.
You are encouraged to encrypt the generated private key using the `ansible-vault encrypt <keyfile>` command.
When this is done you will need to issue `--ask-vault-pass` or similar when running the playbook.
 
The module configuration should be done in your Apache config.

Requirements
------------

Generate a self signed cert with OpenSSL:

`openssl req -new -x509 -days 3652 -nodes -out sp.crt -keyout sp.key`

Define these vars in your playbook (or elsewhere - probably encrypt the private key) as:

* mellon_sp_key
* mellon_sp_crt

Role Variables
--------------

    mellon_sp_cfg_dir: "/etc/apache2/mellon"

The directory where the keypair and IdP metdata is stored.


    mellon_sp_remote_idp_metadata_url:
      - "https://idp.unilely.nl/saml2/idp/metadata.php"

A list of URLs from where to fetch the IdP metadata. 


Dependencies
------------

None

Example Playbook
----------------

    - hosts: sso-webservers
      roles:
         - dnmvisser.mellon_sp

License
-------

MIT

Author Information
------------------

This role was created in 2017 by Dick Visser <dick.visser@geant.org>.
