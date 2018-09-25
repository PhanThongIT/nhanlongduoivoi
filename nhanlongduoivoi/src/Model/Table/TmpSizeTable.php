<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TmpSize Model
 *
 * @property \App\Model\Table\SizesTable|\Cake\ORM\Association\BelongsTo $Sizes
 *
 * @method \App\Model\Entity\TmpSize get($primaryKey, $options = [])
 * @method \App\Model\Entity\TmpSize newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TmpSize[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TmpSize|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TmpSize|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TmpSize patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TmpSize[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TmpSize findOrCreate($search, callable $callback = null, $options = [])
 */
class TmpSizeTable extends Table
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

        $this->setTable('tmp_size');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Sizes', [
            'foreignKey' => 'size_id',
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

        $validator
            ->scalar('description')
            ->maxLength('description', 255)
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->scalar('flagDelete')
            ->maxLength('flagDelete', 255)
            ->requirePresence('flagDelete', 'create')
            ->notEmpty('flagDelete');

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
        $rules->add($rules->existsIn(['size_id'], 'Sizes'));

        return $rules;
    }
}
