<?php
	namespace Fkr\ImagineBundle\DependencyInjection\Factory;
	
	use Symfony\Component\HttpKernel\Util\Filesystem;
	
	
	class ImagineFactory {
		
		public static function create($driver) {
			$driver = strtolower($driver);
			
			if($driver=='gd') {
				return new \Imagine\Gd\Imagine();
			}
			else if($driver=='imagick') {
				return new \Imagine\Imagick\Imagine();
			}
			else if($driver=='gmagick') {
				return new \Imagine\Gmagick\Imagine();
			}
			
			return null;
		}
		
	}
