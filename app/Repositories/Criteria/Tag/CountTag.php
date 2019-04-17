<?php
/**
 * Created by PhpStorm.
 * User: samxiao
 * Date: 2019/4/16
 * Time: 下午11:31
 */

namespace App\Repositories\Criteria\Tag;

use App\Tag;
use Prettus\Repository\Contracts\RepositoryInterface;
use Prettus\Repository\Contracts\CriteriaInterface;

class CountTag implements CriteriaInterface
{
    public function apply($model, RepositoryInterface $repository)
    {
        /**
         * @var $model Tag
         */
        return $model->withCount('post');
    }
}
