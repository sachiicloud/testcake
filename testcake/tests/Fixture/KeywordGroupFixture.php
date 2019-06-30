<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * KeywordGroupFixture
 */
class KeywordGroupFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'keyword_group';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'kgid' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'kid' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'lang' => ['type' => 'string', 'length' => 3, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'wcid' => ['type' => 'string', 'length' => 1, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'sort' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'createdate' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'updatedate' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'k_id' => ['type' => 'index', 'columns' => ['kid', 'lang', 'wcid'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['kgid', 'kid', 'lang', 'wcid'], 'length' => []],
            'keyword_group_ibfk_1' => ['type' => 'foreign', 'columns' => ['kid', 'lang', 'wcid'], 'references' => ['keyword', '1' => ['kid', 'lang', 'wcid']], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_general_ci'
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
                'kgid' => 1,
                'kid' => 1,
                'lang' => 'a435c5bc-023b-4d34-b2a3-8831a863bcd2',
                'wcid' => '3424c33c-1b30-4e29-94a4-9d53bf8aa06f',
                'sort' => 1,
                'createdate' => '2019-06-29 12:28:11',
                'updatedate' => '2019-06-29 12:28:11'
            ],
        ];
        parent::init();
    }
}
