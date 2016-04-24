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
	public static function createFromFormat($format, $time, $timezone = NULL)
	{
		return new self(parent::createFromFormat($format, $time, $timezone)->format('Y-m-d'));
	}
}