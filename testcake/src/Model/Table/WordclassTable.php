<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Wordclass Model
 *
 * @method \App\Model\Entity\Wordclas get($primaryKey, $options = [])
 * @method \App\Model\Entity\Wordclas newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Wordclas[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Wordclas|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Wordclas saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Wordclas patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Wordclas[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Wordclas findOrCreate($search, callable $callback = null, $options = [])
 */
class WordclassTable extends Table
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

        $this->setTable('wordclass');
        $this->setDisplayField('name');
        $this->setPrimaryKey(['wcid', 'lang']);
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
            ->scalar('wcid')
            ->maxLength('wcid', 1)
            ->allowEmptyString('wcid', 'create');

        $validator
            ->scalar('lang')
            ->maxLength('lang', 3)
            ->allowEmptyString('lang', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

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
