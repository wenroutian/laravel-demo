<?php
/**
 * Created by PhpStorm.
 * User: samxiao
 * Date: 2019/4/16
 * Time: 下午11:07
 */

namespace App\Repositories;


use Prettus\Repository\Eloquent\BaseRepository;

class TagRepository extends BaseRepository
{
    public function model()
    {
        return 'App\\Tag';
    }


}
