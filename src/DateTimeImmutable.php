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


	/**
	 * @inheritdoc
	 */
	public static function createFromFormat($format, $time)
	{
		return new self(parent::createFromFormat($format, $time)->format('Y-m-d'));
	}
}