<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ProductosTalla
 * 
 * @property int $id
 * @property int $producto_id
 * @property int $talla_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string|null $deleted_at
 * 
 * @property Producto $producto
 * @property Talla $talla
 *
 * @package App\Models
 */
class ProductosTalla extends Model
{
	use SoftDeletes;
	protected $table = 'productos_tallas';

	protected $casts = [
		'producto_id' => 'int',
		'talla_id' => 'int'
	];

	protected $fillable = [
		'producto_id',
		'talla_id'
	];

	public function producto()
	{
		return $this->belongsTo(Producto::class);
	}

	public function talla()
	{
		return $this->belongsTo(Talla::class);
	}
}
