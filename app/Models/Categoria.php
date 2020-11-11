<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Categoria
 * 
 * @property int $id
 * @property string $nombre
 * @property int $producto_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string|null $deleted_at
 * 
 * @property Producto $producto
 * @property Collection|Producto[] $productos
 *
 * @package App\Models
 */
class Categoria extends Model
{
	use SoftDeletes;
	protected $table = 'categorias';

	protected $casts = [
		'producto_id' => 'int'
	];

	protected $fillable = [
		'nombre',
		'producto_id'
	];

	public function producto()
	{
		return $this->belongsTo(Producto::class);
	}

	public function productos()
	{
		return $this->belongsToMany(Producto::class)
					->withPivot('id');
	}
}
