<?php
/**
 * Created by PhpStorm.
 * User: samxiao
 * Date: 2019/4/17
 * Time: 下午3:05
 */

namespace App\Repositories\Criteria\Post;


use Illuminate\Database\Query\Builder;
use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

class TagFilter implements CriteriaInterface
{
    public function apply($model, RepositoryInterface $repository)
    {

        $model->whereHas('tag', function ($query) {
            /** @var  $query Builder */
            $query->when(\request('tag_id'), function ($query) {
                $query->where('id', '=', \request('tag_id'));
            });
        });
        return $model;
    }
}
