<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Usuarios Model
 *
 * @method \App\Model\Entity\Usuario get($primaryKey, $options = [])
 * @method \App\Model\Entity\Usuario newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Usuario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Usuario|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Usuario saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Usuario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Usuario[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Usuario findOrCreate($search, callable $callback = null, $options = [])
 */
class UsuariosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('usuarios');
        $this->setDisplayField('idUsuario');
        $this->setPrimaryKey('idUsuario');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('idUsuario')
            ->allowEmptyString('idUsuario', 'create');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 45)
            ->requirePresence('nombre', 'create')
            ->allowEmptyString('nombre', false);

        $validator
            ->scalar('contraseña')
            ->maxLength('contraseña', 45)
            ->requirePresence('contraseña', 'create')
            ->allowEmptyString('contraseña', false);

        $validator
            ->scalar('edad')
            ->maxLength('edad', 45)
            ->requirePresence('edad', 'create')
            ->allowEmptyString('edad', false);

        $validator
            ->integer('idGenero')
            ->requirePresence('idGenero', 'create')
            ->allowEmptyString('idGenero', false);

        $validator
            ->integer('idEstadoCivil')
            ->requirePresence('idEstadoCivil', 'create')
            ->allowEmptyString('idEstadoCivil', false);

        return $validator;
    }
}
