<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Talla
 * 
 * @property int $id
 * @property string $nombre
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon|null $delated_at
 * 
 * @property Collection|Producto[] $productos
 *
 * @package App\Models
 */
class Talla extends Model
{
	protected $table = 'tallas';

	protected $dates = [
		'delated_at'
	];

	protected $fillable = [
		'nombre',
		'delated_at'
	];

	public function productos()
	{
		return $this->belongsToMany(Producto::class, 'productos_tallas')
					->withPivot('id', 'deleted_at')
					->withTimestamps();
	}
}
