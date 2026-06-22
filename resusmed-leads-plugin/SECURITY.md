# Security Rules

This repository must not contain:

- wp-config.php
- database backups
- WooCommerce order exports
- student lists
- customer lists
- API keys
- SMTP credentials
- ClickSend credentials
- SendLayer credentials
- private SSH keys
- passwords
- access tokens
- PHI or sensitive student/customer information

If a secret is accidentally committed:
1. Treat it as compromised.
2. Rotate the credential immediately.
3. Remove it from the repository.
4. Document what happened.
