<?php declare(strict_types = 1);

namespace PhpStan\TypeParser\Ast\PhpDoc;


class GeneralTagValueNode implements PhpDocTagValueNode
{
	/** @var string (may be empty) */
	public $value;


	public function __construct(string $value)
	{
		$this->value = $value;
	}


	public function __toString(): string
	{
		return $this->value;
	}
}