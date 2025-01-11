<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    /**
     * Укажите имя таблицы (если отличается от имени модели в нижнем регистре).
     *
     * @var string
     */
    protected $table = 'posts';

    /**
     * Укажите столбцы, которые можно массово заполнять.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','content',
    ];

    /**
     * Укажите, какие столбцы скрыть в выводе JSON.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at','deleted_at',
    ];

    /**
     * Укажите, какие столбцы преобразовать в другие типы данных.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime',
    ];
}
