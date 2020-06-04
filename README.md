# LMS plugin NodePorts

Extra node ports for assigned IP addresses to fast access.

![](lms-plugin-node-ports?raw=true)

## Requirements

Installed [LMS](https://lms.org.pl/) or [LMS-PLUS](https://lms-plus.org) (recommended).

## Installation

* Copy files to `<path-to-lms>/plugins/`
* Run `composer update` or `composer update --no-dev`
* Go to LMS website and activate it `Configuration => Plugins`

## Configuration

Go to `<path-to-lms>/?m=configlist` then add config parameters and values. Otherway default values will be used.

```
node.local_ports = 80, 81, 8080
node.public_ports = 80, 81, 8080
node.url_protocol = http
```

## Donations :)
https://github.com/kyob
