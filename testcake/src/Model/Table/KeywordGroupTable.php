<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * KeywordGroup Model
 *
 * @method \App\Model\Entity\KeywordGroup get($primaryKey, $options = [])
 * @method \App\Model\Entity\KeywordGroup newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\KeywordGroup[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\KeywordGroup|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\KeywordGroup saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\KeywordGroup patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\KeywordGroup[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\KeywordGroup findOrCreate($search, callable $callback = null, $options = [])
 */
class KeywordGroupTable extends Table
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

        $this->setTable('keyword_group');
        $this->setDisplayField('kgid');
        $this->setPrimaryKey(['kgid', 'kid', 'lang', 'wcid']);
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
            ->integer('kid')
            ->allowEmptyString('kid', 'create');

        $validator
            ->scalar('lang')
            ->maxLength('lang', 3)
            ->allowEmptyString('lang', 'create');

        $validator
            ->scalar('wcid')
            ->maxLength('wcid', 1)
            ->allowEmptyString('wcid', 'create');

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
