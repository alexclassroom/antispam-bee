<?php
/**
 * Some filters indicate, that a certain data structure is not spam. Those filter
 * implement the NoSpamFilterInterface.
 *
 * If filter() returns 1, the data structure is not spam.
 * If filter() returns 0, the filter has no opinion about the data structure.
 *
 * @package Antispam Bee Filter
 */
declare( strict_types = 1 );

namespace Pluginkollektiv\AntispamBee\Filter;

interface NoSpamFilterInterface extends FilterInterface
{

}