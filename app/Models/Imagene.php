<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Imagene
 * 
 * @property int $id
 * @property string $img
 * @property int $producto_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string|null $deleted_at
 * 
 * @property Producto $producto
 *
 * @package App\Models
 */
class Imagene extends Model
{
	use SoftDeletes;
	protected $table = 'imagenes';

	protected $casts = [
		'producto_id' => 'int'
	];

	protected $fillable = [
		'img',
		'producto_id'
	];

	public function producto()
	{
		return $this->belongsTo(Producto::class);
	}
}
