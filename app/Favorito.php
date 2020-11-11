<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Favorito
 * 
 * @property int $id
 * @property int $factura_id
 * @property int $producto_id
 * @property int $user_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon|null $delated_at
 * 
 * @property User $user
 * @property Factura $factura
 * @property Producto $producto
 *
 * @package App\Models
 */
class Favorito extends Model
{
	protected $table = 'favoritos';

	protected $casts = [
		'factura_id' => 'int',
		'producto_id' => 'int',
		'user_id' => 'int'
	];

	protected $dates = [
		'delated_at'
	];

	protected $fillable = [
		'factura_id',
		'producto_id',
		'user_id',
		'delated_at'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function factura()
	{
		return $this->belongsTo(Factura::class);
	}

	public function producto()
	{
		return $this->belongsTo(Producto::class);
	}
}
