###################
Dynamic CodeIgniter Multi-Environment
###################

The CodeIgniter branch demonstrates `Handling Multiple Environments <https://www.codeigniter.com/user_guide/general/environments.html>`_ using .htaccess on Apache.

*******************
Multiple Web Servers
*******************

The branch used multiple Apache HTTP Servers.  This has been tested on the following servers.

-  Apache/2.2.15
-  Apache/2.4.6


BIND
----
Without getting too deep into how multple servers are handled.  Much of the functionalty is uses wildcards in BIND.  Much of the details are omitted.  Let me know if you need more indormation.

    $ORIGIN example.com.
        www.example.com.      IN CNAME    production.example.com.
    $ORIGIN web.example.com.
        *.web.example.com.  IN CNAME    production.example.com.
    $ORIGIN dev.example.com.
        *.dev.example.com.  IN CNAME    development.example.com.
