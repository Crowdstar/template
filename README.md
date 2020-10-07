[![Build Status](https://travis-ci.org/Crowdstar/template.svg?branch=master)](https://travis-ci.org/Crowdstar/template)
[![Latest Stable Version](https://poser.pugx.org/Crowdstar/template/v/stable.svg)](https://packagist.org/packages/crowdstar/template)
[![Latest Unstable Version](https://poser.pugx.org/Crowdstar/template/v/unstable.svg)](https://packagist.org/packages/crowdstar/template)
[![License](https://poser.pugx.org/Crowdstar/template/license.svg)](https://packagist.org/packages/crowdstar/template)

# Summary

A wrapper for template engines. The purpose of this library is to make it easier to switch between different template engines.

# Installation

```bash
composer require crowdstar/template
```

# Sample Usage
 
```php
<?php
use CrowdStar\Template\Template;
use CrowdStar\Template\TemplateEngine\Mustache;

(new Template(new Mustache()))->render('Hello {{planet}}', ['planet' => 'World!']); // "Hello World!"
?>
```
