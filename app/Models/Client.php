<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'empresa',
        'niche_id',
        'uf',
        'cidade',
        'tipo',
        'estagio',
        'instagram',
        'facebook',
        'whatsapp',
        'outras_redes',
        'site',
        'telefone',
        'user_id',
        'representante'
    ];

    public function getEstagioAttribute($value)
    {
      switch ($value) {
          case 'aguardando':
              return 'Aguardando';
              break;          
          case 'contato':
              return 'Em Contato';
              break;          
          default:
              return $value;
              break;
      }
    }

    public function niche()
    {
        return $this->belongsTo(Niche::class);
    }
    public function vendedor()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function records()
    {
        return $this->hasMany(Record::class)->orderBy('created_at','desc');
    }
}
