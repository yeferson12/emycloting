<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CategoriaProducto
 * 
 * @property int $id
 * @property int $categoria_id
 * @property int $producto_id
 * 
 * @property Categoria $categoria
 * @property Producto $producto
 *
 * @package App\Models
 */
class CategoriaProducto extends Model
{
	protected $table = 'categoria_producto';
	public $timestamps = false;

	protected $casts = [
		'categoria_id' => 'int',
		'producto_id' => 'int'
	];

	protected $fillable = [
		'categoria_id',
		'producto_id'
	];

	public function categoria()
	{
		return $this->belongsTo(Categoria::class);
	}

	public function producto()
	{
		return $this->belongsTo(Producto::class);
	}
}
