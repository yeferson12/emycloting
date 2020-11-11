<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Estado
 * 
 * @property int $id
 * @property string $nombre
 * 
 * @property Collection|Factura[] $facturas
 *
 * @package App\Models
 */
class Estado extends Model
{

	const si = 1;
	const no = 0;


	protected $table = 'estado';
	public $timestamps = false;

	protected $fillable = [
		'nombre'
	];

	public function facturas()
	{
		return $this->hasMany(Factura::class);
	}
}
