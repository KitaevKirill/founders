<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class PostNew extends Model
{
    use Searchable;

    public function option()
    {
        return $this->hasMany(PostOption::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id');
    }

    public function searchableAs()
    {
        return 'post_news';
    }

    public function toSearchableArray()
    {
        $array = $this->toArray();

        return array('id' => $array['id'],'title' => $array['title'], 'excerpt' => $array['excerpt'], 'body' => $array['body']);
    }
}
