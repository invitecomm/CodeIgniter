# Dynamic CodeIgniter Multi-Environment

This CodeIgniter branch demonstrates [Handling Multiple Environments](https://www.codeigniter.com/user_guide/general/environments.html) using `.htaccess` on Apache.

## Use Case

When working with CodeIgniter, we use different servers.  A server dedicated for development, and others are used in production.  Doing the development on `localhost` brings it's own complications.

### How it's used 

| FQDN        | CI_ENV           | Server  | Use |
| ------------- |:-------------:|:-----:|:-------:|
| anything.domain.tld       | production | production | Production |
| anything.web*.domain.tld     | testing      |   production | Staging |
| anything.dev*.domain.tld | development      |    development | Development |

#### .htaccess
```
SetEnvIf Host (.*).(.*).(.*)$ CI_ENV=production
SetEnvIf Host (.*).web(.*).(.*).(.*)$ CI_ENV=testing
SetEnvIf Host (.*).dev(.*).(.*).(.*)$ CI_ENV=development
```
_I wanted to use 'staging' instead of 'testing', but CodeIgniter did not like it._

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

#### Zone File
```
$ORIGIN example.com.
www					IN CNAME    production.example.com.
production			IN A    	N.N.N.1
development			IN A    	N.N.N.2

$ORIGIN web.example.com.
*.web.example.com.  IN CNAME    production.example.com.

$ORIGIN dev.example.com.
*.dev.example.com.  IN CNAME    development.example.com.
```
## Apache

Using dynamic hosts on the Apache HTTP servers, provides a lot of flexibility when building a site.  Combined with the dynamic sub-domains described above, only the final host needs a dedicated entry in BIND.

_Dynamic hosts provide a lot of flexibility.  Can turn-up new content without modifying the Apache configuration.  Just create the symlinks and it's ready to go._

#### Dynamic Virtual Host Configuration
```
<VirtualHost *:80>
    ServerName placeholdername
    ServerAlias *.web.example.com
    VirtualDocumentRoot /var/www/html/project/symlinks/%1/dev
</VirtualHost>

<VirtualHost *:80>
    ServerName placeholdername
    ServerAlias *.dev.example.com
    VirtualDocumentRoot /var/www/html/project/symlinks/%1/dev
</VirtualHost>
```

#### Virtual Host Configuration
```
<VirtualHost *:80>
    ServerName www.example.com
    ServerAlias example.com
    VirtualDocumentRoot /var/www/html/project/symlinks/www/live
</VirtualHost>
```

##### Symlinks

As you can see, `DocumentRoot` uses symbolic links.  This allows for quickly changing the site content without the need to reload Apache.

- `ln -s /var/www/html/project/symlinks/www/live PATH/TO/production`
- `ln -s /var/www/html/project/symlinks/www/dev PATH/TO/development`