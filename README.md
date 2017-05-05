# WSUWP Send REST Email

[![Build Status](https://travis-ci.org/washingtonstateuniversity/WSUWP-Plugin-Send-REST-Email.svg?branch=master)](https://travis-ci.org/washingtonstateuniversity/WSUWP-Plugin-Send-REST-Email)

A WordPress plugin that sends email through [REST Email Proxy](https://github.com/washingtonstateuniversity/WSUWP-Plugin-REST-Email-Proxy).

## Setup

For this plugin to process email properly, the following must be configured:

* [REST Email Proxy](https://github.com/washingtonstateuniversity/WSUWP-Plugin-REST-Email-Proxy) should be installed and fully configured on a remote site.
* The `send_rest_email_secret_key` filter used by this plugin should be configured.
* The `send_rest_email_endpoint` filter used by this plugin should be configured.

The original `wp_mail_from` and `wp_mail_from_name` filters are still available as needed.

## How mail is processed

Send REST Email includes a replacement for the pluggable `wp_mail()` that ships with WordPress core. This allows us to intercept a mail request and package for shipment to a REST endpoint rather than via PHPMailer.

As with the original `wp_mail()`, only `true` or `false` will be returned when mail is sent. If `false`, you can assume that mail was not delivered. If `true`, the mail at least made it to a mail server somewhere. At that point it's up to the mail server to finish delivery.
