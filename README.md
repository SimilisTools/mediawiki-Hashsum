# Hashsum

Generates different types of hashsums from a text string.

## Installation

The easier way is using [Composer](http://www.mediawiki.org/wiki/Composer). From the root of your wiki, run:

	composer require "mediawiki/hashsum" "dev-master"
  
## Usage

The extension provides two functions so far using a different hash function for converting the supplied string argument. 

* {{#md5sum:String example}} renders: 18b2e700a83c1cd0175429ae506bd693
* {{#sha1sum:String example}} renders: 1d396c063cf540c4f7cfe02c1a6f8c99b28abfc8



