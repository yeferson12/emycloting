<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Factura
 * 
 * @property int $id
 * @property string $total
 * @property int $estado_id
 * @property int $user_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon|null $delated_at
 * 
 * @property User $user
 * @property Estado $estado
 * @property Collection|Favorito[] $favoritos
 *
 * @package App\Models
 */
class Factura extends Model
{
	protected $table = 'facturas';

	protected $casts = [
		'estado_id' => 'int',
		'user_id' => 'int'
	];

	protected $dates = [
		'delated_at'
	];

	protected $fillable = [
		'total',
		'estado_id',
		'user_id',
		'delated_at'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function estado()
	{
		return $this->belongsTo(Estado::class);
	}

	public function favoritos()
	{
		return $this->hasMany(Favorito::class);
	}
}
