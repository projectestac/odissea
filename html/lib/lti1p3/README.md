# LTI 1.3 Tool Library

A library used for building IMS-certified LTI 1.3 tool providers in PHP.

This library is a fork of the [packbackbooks/lti-1-3-php-library](https://github.com/packbackbooks/lti-1-3-php-library), patched specifically for use in [Moodle](https://github.com/moodle/moodle).

It is currently based on version [5.2.1 of the packbackbooks/lti-1-3-php-library](https://github.com/packbackbooks/lti-1-3-php-library/releases/tag/v5.2.1) library.

The following changes are included so that the library may be used with Moodle:

  * Replace the phpseclib dependency with openssl equivalent call in public key generation code.
  * Replace the Guzzle dependency with generic HTTP client interfaces for client, response, exception.
  * Small fix to http_build_query() calls, which now explicitly include the '&' arg separator param, for compatibility with applications that override PHP's arg_separator.output value via an ini_set() call, like Moodle does.

Please see the original [README](https://github.com/packbackbooks/lti-1-3-php-library/blob/master/README.md) for more information about the upstream library.


