<?php

require_once dirname(__FILE__).'/../lib/vendor/symfony/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
	public function setup()
	{
		$this->enablePlugins('sfDoctrinePlugin');
		$this->enablePlugins('sfDoctrineGuardPlugin');
	}
	
	public function setRootDir($rootDir)
	{
		parent::setRootDir($rootDir);

		$this->setWebDir($rootDir . DIRECTORY_SEPARATOR . 'web');
	}
}
