<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;
    // criando as colunas do banco
    protected $fillable = ['id', 'nome', 'endereco', 'email', 'telefone'];

    /**
     *  É possível alterar a chave primária assim:
     *  protected $primaryKey = 'nome_da_pk';
     *
     * Para não ser auto_increment é assim:
     * public $increment = false;
     *
     * Para definir o tipo:
     * protected $keyType = 'string';
     *
     * Para tirar os campos timestamps:
     * public $timestamps = false;
     *
     */

    protected $table = 'Funcionario';


    public function clientes() {

        return $this->hasMany(Clientes::class, 'cliente_id');
    }

}
