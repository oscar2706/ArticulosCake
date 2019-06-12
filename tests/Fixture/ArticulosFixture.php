<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ArticulosFixture
 */
class ArticulosFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idArticulo' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'slug' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'titulo' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'subtitulo' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'contenido' => ['type' => 'string', 'length' => 1500, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'fechaCreacion' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'imagen' => ['type' => 'binary', 'length' => 4294967295, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'idTema' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'idUsuario' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_Articulo_Tema1_idx' => ['type' => 'index', 'columns' => ['idTema'], 'length' => []],
            'fk_Articulo_Usuario1_idx' => ['type' => 'index', 'columns' => ['idUsuario'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idArticulo'], 'length' => []],
            'fk_Articulo_Tema1' => ['type' => 'foreign', 'columns' => ['idTema'], 'references' => ['temas', 'idTema'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Articulo_Usuario1' => ['type' => 'foreign', 'columns' => ['idUsuario'], 'references' => ['usuarios', 'idUsuario'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'idArticulo' => 1,
                'slug' => 'Lorem ipsum dolor sit amet',
                'titulo' => 'Lorem ipsum dolor sit amet',
                'subtitulo' => 'Lorem ipsum dolor sit amet',
                'contenido' => 'Lorem ipsum dolor sit amet',
                'fechaCreacion' => '2019-06-12',
                'imagen' => 'Lorem ipsum dolor sit amet',
                'idTema' => 1,
                'idUsuario' => 1
            ],
        ];
        parent::init();
    }
}
