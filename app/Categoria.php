<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Carbon\Carbon;
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
 *
 * @package App\Models
 */
class Categoria extends Model
{
	use SoftDeletes;
	protected $table = 'categorias';
	public $incrementing = false;

	protected $casts = [
		'id' => 'int',
		'producto_id' => 'int'
	];

	protected $fillable = [
		'id',
		'nombre',
		'producto_id'
	];

	public function producto()
	{
		return $this->belongsTo(Producto::class);
	}
}
