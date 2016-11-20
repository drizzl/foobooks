<?php

namespace foobooks;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    /* Relationship Methods */

    /**
	*
	*/
    public function books()
    {
        return $this->belongsToMany('foobooks\Book')->withTimestamps();
    }

    /* End Relationship Methods */

    /**
	*
	*/
    public static function getForCheckboxes()
    {
        $tags = Tag::orderBy('name','ASC')->get();
        $tags_for_checkboxes = [];
        foreach($tags as $tag) {
            $tags_for_checkboxes[$tag->id] = $tag->name;
        }

        return $tags_for_checkboxes;
    }
}
