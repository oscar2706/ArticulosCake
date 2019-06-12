<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsuariosFixture
 */
class UsuariosFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idUsuario' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nombre' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'contraseña' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'edad' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'idGenero' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'idEstadoCivil' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_Usuario_Genero_idx' => ['type' => 'index', 'columns' => ['idGenero'], 'length' => []],
            'fk_Usuario_EstadoCivil1_idx' => ['type' => 'index', 'columns' => ['idEstadoCivil'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idUsuario'], 'length' => []],
            'fk_Usuario_EstadoCivil1' => ['type' => 'foreign', 'columns' => ['idEstadoCivil'], 'references' => ['estados_civiles', 'idEstadoCivil'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Usuario_Genero' => ['type' => 'foreign', 'columns' => ['idGenero'], 'references' => ['generos', 'idGenero'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'idUsuario' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'contraseña' => 'Lorem ipsum dolor sit amet',
                'edad' => 'Lorem ipsum dolor sit amet',
                'idGenero' => 1,
                'idEstadoCivil' => 1
            ],
        ];
        parent::init();
    }
}
