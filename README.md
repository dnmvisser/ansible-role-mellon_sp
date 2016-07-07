Ansible Role: mod_auth_mellon
=============================

An Ansible Role that installs the `mod_auth_mellon` Apache module.
This module implements a SAML 2.0 service provider, so you can authenticate against a SAML 2.0 Identity Provider (Idp).

This role installs and enables the apache module, creates cryptograhic key material, and adds IdP metadata.
You are encouraged to encrypt the generated private key using the `ansible-vault encrypt <keyfile>` command.
When this is done you will need to issue `--ask-vault-pass` or similar when running the playbook.
 
The module configuration should be done in your Apache config.

Requirements
------------

A local `openssl` binary is used to generate cryptograhic key material.


Role Variables
--------------

    mellon_sp_cfg_dir: "/etc/apache2/mellon"

The directory where the keypair and IdP metdata is stored.


    mellon_sp_crt_subject: "C=NL/ST=FL/L=Lelystad/O=University of Lelystad/CN={{ inventory_hostname }}"

The subject to use when generating the self-signed cert. Note that this has little relevance as no PKI is involved.


    mellon_sp_idp_metadata_url: "https://idp.unilely.nl/saml2/idp/metadata.php"

The URL from where to fetch the IdP metadata. 


Dependencies
------------

FIXME should geerlingguy.apache role be listed here?

Example Playbook
----------------

    - hosts: sso-webservers
      roles:
         - dnmvisser.mellon_sp

*Inside `vars/main.yml`*:

    mellon_sp_idp_metadata_url: http://login.university.edu/saml2/idp/metadata.php

License
-------

MIT

Author Information
------------------

This role was created in 2016 by Dick Visser <dick.visser@geant.org>.
