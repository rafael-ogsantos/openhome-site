<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'title',
        'negociacao',
        'tipo',
        'areap',
        'areat',
        'numero_quartos',
        'iptu',
        'garagem',
        'banheiros',
        'situacao',
        'valor_cond',
        'valor_tot',
        'comissao',
        'cep',
        'endereco',
        'bairro',
        'numero',
        'cidade',
        'estado',
        'description',
        'price',
        'latitude',
        'longitude',
        'image', 
        'region', 
        'zip_code', 
        'extra_field'
    ];

    public function getImage()
	{
		return asset('project-assets/uploaded/images/'.$this->image);
	}
}
