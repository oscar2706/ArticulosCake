<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Articulo Entity
 *
 * @property int $idArticulo
 * @property string $slug
 * @property string $titulo
 * @property string $subtitulo
 * @property string $contenido
 * @property \Cake\I18n\FrozenDate $fechaCreacion
 * @property string|resource $imagen
 * @property int $idTema
 * @property int $idUsuario
 */
class Articulo extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'slug' => true,
        'titulo' => true,
        'subtitulo' => true,
        'contenido' => true,
        'fechaCreacion' => true,
        'imagen' => true,
        'idTema' => true,
        'idUsuario' => true
    ];
}
