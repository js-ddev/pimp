<?php

namespace Payum;

use Payum\Core\Storage\StorageInterface;

use Payum\Core\Storage\FilesystemStorage;


class PayumStorage implements StorageInterface {


	public function getStorages($storage)
	{

		$storage = new FilesystemStorage(
		    '/storage',
		    'Payum\Core\Model\Payment',
		    'number'
		);

		return $storage;
	}

}
