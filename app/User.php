<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $id
 * @property string $nombre
 * @property string $apellidos
 * @property string $email
 * @property string $contraseña
 * @property int $rol_id
 * @property Carbon $created_at
 * @property Carbon $update_at
 * @property Carbon|null $delated_at
 * 
 * @property Role $role
 * @property Collection|Factura[] $facturas
 * @property Collection|Favorito[] $favoritos
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'users';
	public $timestamps = false;

	protected $casts = [
		'rol_id' => 'int'
	];

	protected $dates = [
		'update_at',
		'delated_at'
	];

	protected $fillable = [
		'nombre',
		'apellidos',
		'email',
		'contraseña',
		'rol_id',
		'update_at',
		'delated_at'
	];

	public function role()
	{
		return $this->belongsTo(Role::class, 'rol_id');
	}

	public function facturas()
	{
		return $this->hasMany(Factura::class);
	}

	public function favoritos()
	{
		return $this->hasMany(Favorito::class);
	}
}
