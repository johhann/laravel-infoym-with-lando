<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    public $table = 'posts';

    public $with = ['category'];

    public $fillable = [
        'title',
        'body',
        'category_id'
    ];

    protected $casts = [
        'title' => 'string',
        'body' => 'string'
    ];

    public static array $rules = [
        'title' => 'required,string',
        'body' => 'required,string',
        'category_id' => 'required,exists:categories,id'
    ];

    /**
     * Get the category that owns the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }


}
