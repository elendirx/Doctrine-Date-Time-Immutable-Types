<?php

namespace VasekPurchart\Doctrine\Type\DateTimeImmutable;


class DateTimeImmutable extends \DateTimeImmutable
{

	/**
	 * @inheritdoc
	 */
	public function __toString()
	{
		return (string) $this->getTimestamp();
	}
}