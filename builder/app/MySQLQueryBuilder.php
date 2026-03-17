<?php
namespace App;

class MySQLQueryBuilder implements QueryBuilderInterface
{
	private string $select = '';
	private string $from = '';
	private string $where = '';

	public function select(string $fields): self
	{
		$this->select = $fields;
		return $this;
	}

	public function from(string $table): self
	{
		$this->from = $table;
		return $this;
	}

	public function where(string $condition): self
	{
		$this->where = $condition;
		return $this;
	}

	public function getSQL(): string
	{
		$sql = 'SELECT ' . $this->select . ' FROM ' . $this->from;
		if ($this->where) {
			$sql .= ' WHERE ' . $this->where;
		}
		return $sql;
	}
}
