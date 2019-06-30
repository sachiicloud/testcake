<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GroupLink Model
 *
 * @method \App\Model\Entity\GroupLink get($primaryKey, $options = [])
 * @method \App\Model\Entity\GroupLink newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GroupLink[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GroupLink|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GroupLink saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GroupLink patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GroupLink[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GroupLink findOrCreate($search, callable $callback = null, $options = [])
 */
class GroupLinkTable extends Table
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

        $this->setTable('group_link');
        $this->setDisplayField('kgid');
        $this->setPrimaryKey(['kgid', 'kgid2']);
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
            ->integer('kgid')
            ->allowEmptyString('kgid', 'create');

        $validator
            ->integer('kgid2')
            ->allowEmptyString('kgid2', 'create');

        $validator
            ->integer('sort')
            ->allowEmptyString('sort');

        $validator
            ->dateTime('createdate')
            ->requirePresence('createdate', 'create')
            ->notEmptyDateTime('createdate');

        $validator
            ->dateTime('updatedate')
            ->requirePresence('updatedate', 'create')
            ->notEmptyDateTime('updatedate');

        return $validator;
    }
}
