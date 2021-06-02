
# docker-apache-php-ssi

Simple Docker build for SSI-enabled Apache with PHP.

apache2.conf
```xml
<Directory /var/www/html>
	Options Includes
	AllowOverride None
	Require all granted
	AddType text/html .shtml .php
	AddOutputFilter INCLUDES .shtml .php
</Directory>
```

Build with:
```
docker build -t tex2e/apache-php-ssi .
```

Run with:
```
docker run --rm --name apache-php-ssi -p 5001:80 -v ${PWD}/www:/var/www/html tex2e/apache-php-ssi
```
