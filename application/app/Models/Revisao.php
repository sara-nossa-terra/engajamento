<?php

namespace App\Models;

class Revisao extends EngajamentoModel
{
    protected $table = 'tb_revisoes';
    protected $dates = ['deleted_at', 'dt_revisao', 'dt_cadastro'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'dt_revisao', 'dt_cadastro', 'deleted_id'
    ];
}