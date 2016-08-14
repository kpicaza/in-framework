In Framework
============

[![Code Coverage](https://scrutinizer-ci.com/g/kpicaza/silex-skeleton/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/kpicaza/silex-skeleton/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/kpicaza/silex-skeleton/badges/build.png?b=master)](https://scrutinizer-ci.com/g/kpicaza/silex-skeleton/build-status/master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/219ec29d-44d6-4cbe-862e-6f7463163b14/mini.png)](https://insight.sensiolabs.com/projects/219ec29d-44d6-4cbe-862e-6f7463163b14)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/kpicaza/silex-skeleton/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/kpicaza/silex-skeleton/?branch=master)

 PHP development starter on top of silex micro-framework oriented to micro-service development and focused on Test Driven Development and Behaviour Driven Development styles.
 
## Features
 
* **Composer**
* **Silex Micro-framework**
* **Symfony console**
* **Monolog**
* **Symfony Form**
* **Symfony Validators**
* **PHPUnit integration**
* **PHPSpec integration**
* **Scrutinizer integration**
* Easy to extend thanks to Pimple and Silex Providers.
 
## Installation
 
With composer:

    composer create-project kpicaza/in-fw project-name -sdev
    cd project-name
    phpunit

From source:

    git clone https://github.com/kpicaza/in-framework.git project-name
    cd project-name
    cp app/config/parameters.php.dist app/config/parameters.php
    phpunit

* By default In framework does not provide any templating system, you can install easily twig folowing official documentation at Silex Docs.     
 
* By default In framework does not provide any persistence layer.

## Disclaimer

This software is not used on any production environment yet, feel free to use to your own purposes and opening issues if you have some questions.
