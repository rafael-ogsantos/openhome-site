<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mail_send extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'mensagem',
        'telefone',
        'email',
        'nome',
        'email_dono'
    ];
    public $timestamps = false;

    public function getImage(){
		return asset('project-assets/uploaded/images/'.$this->image);
	}
}
