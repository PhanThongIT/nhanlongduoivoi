<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RoleUser Model
 *
 * @property \App\Model\Table\RoleTable|\Cake\ORM\Association\BelongsTo $Role
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\RoleUser get($primaryKey, $options = [])
 * @method \App\Model\Entity\RoleUser newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RoleUser[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RoleUser|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RoleUser|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RoleUser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RoleUser[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RoleUser findOrCreate($search, callable $callback = null, $options = [])
 */
class RoleUserTable extends Table
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

        $this->setTable('role_user');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Role', [
            'foreignKey' => 'role_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['role_id'], 'Role'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
