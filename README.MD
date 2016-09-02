# Dynamic CodeIgniter Multi-Environment

This CodeIgniter branch demonstrates [Handling Multiple Environments](https://www.codeigniter.com/user_guide/general/environments.html) using `.htaccess` on Apache.

## Multiple Web Servers

This branch used multiple Apache HTTP Servers.  It has been tested on the following Apache server versions.

-  Apache/2.2.15
-  Apache/2.4.6


## BIND

Without getting too deep into HOW multple servers are handled.  Much of the functionality uses wildcards in BIND.  Many details are omitted.  Let me know if you need more information.

This example would support the following URL's:

- `www.example.com`
- `www.web.example.com`
- `www.dev.example.com`

```
$ORIGIN example.com.
www.example.com.      IN CNAME    production.example.com.

$ORIGIN web.example.com.
*.web.example.com.  IN CNAME    production.example.com.

$ORIGIN dev.example.com.
*.dev.example.com.  IN CNAME    development.example.com.
```