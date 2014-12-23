<?php

namespace ContactBundle\Tests\Handler;

class PageHandlerTest
{
	public function testGet()
	{
		$id = 1;
		$contact = $this->getContact();
		$this->repository->expects($this->once())
			->method('find')
			->with($this->equalTo($id))
			->will($this->returnValue($page));
		$this->pageHandler->get($id);
	}
}