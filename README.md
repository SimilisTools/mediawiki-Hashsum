# Hashsum

Generates different types of hashsums from a text string.

## Installation

The easier way is using [Composer](http://www.mediawiki.org/wiki/Composer). From the root of your wiki, run:

	composer require "mediawiki/hashsum" "dev-master"
  
## Usage

The extension provides two functions so far using a different hash function for converting the supplied string argument. 

* 	{{#md5sum|My string}}
* 	{{#sha1sum|My string}}
