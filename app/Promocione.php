<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Promocione
 * 
 * @property int $id
 * @property string $precioDes
 * @property int $producto_id
 * @property string $descripcion
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon|null $delated_at
 * 
 * @property Producto $producto
 *
 * @package App\Models
 */
class Promocione extends Model
{
	protected $table = 'promociones';

	protected $casts = [
		'producto_id' => 'int'
	];

	protected $dates = [
		'delated_at'
	];

	protected $fillable = [
		'precioDes',
		'producto_id',
		'descripcion',
		'delated_at'
	];

	public function producto()
	{
		return $this->belongsTo(Producto::class);
	}
}
