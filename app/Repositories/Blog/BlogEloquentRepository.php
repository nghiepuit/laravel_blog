<?php

namespace App\Repositories\Blog;

use App\Blog;
use App\Repositories\EloquentRepository;

class BlogEloquentRepository extends EloquentRepository implements IBlogRepository {

    function setModel()
    {
        return Blog::class;
    }
}