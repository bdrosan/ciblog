<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'posts';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields 		= ['title', 'slug', 'description'];

	// Dates
	protected $useTimestamps        = false;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = [];
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];


	public function getPost($slug = false)
	{
		if ($slug === false) {
			return $this->findAll();
		}

		return $this->asArray()
			->where(['slug' => $slug])
			->first();
	}

	public function getPostLimit($limit = false)
	{
		if ($limit === false) {
			return false;
		}

		return $this->asArray()->findAll($limit, 0);
	}

	public function getPostsFromCatgory($catId)
	{
		if (!$catId) return false;

		return $this->asArray()
			->where(['category_id' => $catId])
			->findAll();
	}
}