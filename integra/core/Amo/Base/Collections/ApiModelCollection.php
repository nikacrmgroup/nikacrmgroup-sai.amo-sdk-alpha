<?php
/**
 * amoCRM API Model Collection class
 */
namespace Nikacrm\Core\Amo\Base\Collections;

class ApiModelCollection extends Collection
{
	protected $service;
	
    /**
     * Constructor
	 * @param array $elements
	 * @param Service $service
     */
    public function __construct(Array $elements = [], \Nikacrm\Core\Amo\Base\Services\Service &$service)
    {
        parent::__construct($elements);
		
		$this->service = $service;
	}
	
    public function service()
    {
		return $this->service;
	}
}
