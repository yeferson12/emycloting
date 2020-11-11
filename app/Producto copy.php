<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Producto
 * 
 * @property int $id
 * @property string $nombre
 * @property string $precio
 * @property string $cantidad
 * @property string $peso
 * @property Carbon $crated_at
 * @property Carbon $updated_at
 * @property string|null $deleted_at
 * 
 * @property Categoria $categoria
 * @property Collection|Favorito[] $favoritos
 * @property Collection|Imagene[] $imagenes
 * @property Collection|Talla[] $tallas
 * @property Collection|Promocione[] $promociones
 *
 * @package App\Models
 */
class Producto extends Model
{
	use SoftDeletes;
	protected $table = 'productos';
	public $timestamps = false;

	protected $dates = [
		'crated_at'
	];

	protected $fillable = [
		'nombre',
		'precio',
		'cantidad',
		'peso',
		'crated_at'
	];

	public function categoria()
	{
		return $this->hasOne(Categoria::class);
	}

	public function favoritos()
	{
		return $this->hasMany(Favorito::class);
	}

	public function imagenes()
	{
		return $this->hasMany(Imagene::class);
	}

	public function tallas()
	{
		return $this->belongsToMany(Talla::class, 'productos_tallas')
					->withPivot('id', 'deleted_at')
					->withTimestamps();
	}

	public function promociones()
	{
		return $this->hasMany(Promocione::class);
	}
}
