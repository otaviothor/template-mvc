<?php

namespace Src\Models;

use CoffeeCode\DataLayer\DataLayer;

/**
 * Class User
 * @package Src\Models
 */
class Model extends DataLayer
{
  /**
	 * Name of database table
	 * @var string
	 */
  protected $table;

  /**
	 * Name of required fields of table table
	 * @var array
	 */
  protected $requiredFields = [];

  /**
	 * The table's primary key.
	 * @var string
	 */
  protected $primaryKey = "id";

  /**
	 * If table have timestamps fields(created_at and updated_at).
	 * @var bool
	 */
  protected $timestamps = true;

  /** User constructor. */
  public function __construct()
  {
    parent::__construct($this->table, $this->requiredFields, $this->primaryKey, $this->timestamps);
  }
}
