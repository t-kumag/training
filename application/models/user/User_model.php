<?php

class User_model extends MY_Model {

	// テーブルカラムを public フィールドとして定義
	public $id;
	public $sub;

	/**
	 * constructor
	 */
	public function __construct()
	{
		// 第1引数でテーブル名を渡す
		parent::__construct('user');
		// ID列名がID以外の場合は、第2引数で列名を渡す
		// parent::__construct('user', 'id');
	}
}

?>