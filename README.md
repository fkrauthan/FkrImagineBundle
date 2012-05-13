FkrImagineBundle
================

Integrates [Imagine](https://github.com/avalanche123/Imagine) into Symfony2.

Installation
============

Bring in the vendor libraries
-----------------------------

This can be done in two different ways:

**Method #1**) Use deps file
	
	[Imagine]
	    git=git://github.com/avalanche123/Imagine.git
		target=imagine
		version=v0.2.8
		
	[FkrImagineBundle]
	    git=git://github.com/fkrauthan/FkrImagineBundle.git
		target=bundles/Fkr/ImagineBundle


**Method #2**) Use git submodules

    git submodule add git://github.com/avalanche123/Imagine.git vendor/imagine
    git submodule add git://github.com/fkrauthan/FkrImagineBundle.git vendor/bundles/Fkr/ImagineBundle


Register the Imagine and Fkr namespaces
-----------------------------------------
	
    // app/autoload.php
    $loader->registerNamespaces(array(
        'Imagine' => __DIR__.'/../vendor/imagine/lib',
        'Fkr' => __DIR__.'/../vendor/bundles',
        // your other namespaces
    ));


Add SimplePieBundle to your application kernel
----------------------------------------------
	
	// app/AppKernel.php
    public function registerBundles()
    {
        return array(
            // ...
            new Fkr\ImagineBundle\FkrImagineBundle(),
            // ...
        );
    }


Configuration
=============

    # app/config.yml
    fkr_imagine:
        driver: gd


* driver: sets the driver which Imagine should use

**Allowed drivers:**
* gd (default) Use GD
* imagick Use IMagick
* gmagick Use GMagick


Usage
=====

To get a driver specific Imagine class instance just use the following code

	$this->get('fkr_imagine');
	
	
Thats all. For the complete api visit the [Imagine api doc](http://imagine.readthedocs.org/en/latest/index.html).


Licence
=======

[Resources/meta/LICENSE](https://github.com/fkrauthan/FkrSimplePieBundle/blob/master/Resources/meta/LICENSE)
