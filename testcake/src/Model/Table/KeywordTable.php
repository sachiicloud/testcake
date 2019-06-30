<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Keyword Model
 *
 * @method \App\Model\Entity\Keyword get($primaryKey, $options = [])
 * @method \App\Model\Entity\Keyword newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Keyword[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Keyword|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Keyword saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Keyword patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Keyword[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Keyword findOrCreate($search, callable $callback = null, $options = [])
 */
class KeywordTable extends Table
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

        $this->setTable('keyword');
        $this->setDisplayField('kid');
        $this->setPrimaryKey('kid');
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
            ->integer('kid')
            ->allowEmptyString('kid', 'create');

        $validator
            ->scalar('lang')
            ->maxLength('lang', 3)
            ->requirePresence('lang', 'create');
            //->notEmptyString('lang');

        $validator
            ->scalar('wcid')
            ->maxLength('wcid', 1)
            ->requirePresence('wcid', 'create');
            //->notEmptyString('wcid');

        $validator
            ->scalar('key_text')
            ->maxLength('key_text', 4000)
            ->requirePresence('key_text', 'create');
            //->notEmptyString('key_text');

        $validator
            ->dateTime('createdate')
            ->requirePresence('createdate', 'create');
            //->notEmptyDateTime('createdate');

        $validator
            ->dateTime('updatedate')
            ->requirePresence('updatedate', 'create');
            //->notEmptyDateTime('updatedate');

        return $validator;
    }
}
