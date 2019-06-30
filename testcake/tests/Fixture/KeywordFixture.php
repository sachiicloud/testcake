<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * KeywordFixture
 */
class KeywordFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'keyword';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'kid' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'lang' => ['type' => 'string', 'length' => 3, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'wcid' => ['type' => 'string', 'length' => 1, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'key_text' => ['type' => 'string', 'length' => 4000, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'createdate' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'updatedate' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'lang' => ['type' => 'index', 'columns' => ['lang'], 'length' => []],
            'wcid' => ['type' => 'index', 'columns' => ['wcid'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['kid'], 'length' => []],
            'keyword_ibfk_1' => ['type' => 'foreign', 'columns' => ['lang'], 'references' => ['language', 'lang'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'keyword_ibfk_2' => ['type' => 'foreign', 'columns' => ['wcid'], 'references' => ['wordclass', 'wcid'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'kid' => 1,
                'lang' => 'L',
                'wcid' => 'L',
                'key_text' => 'Lorem ipsum dolor sit amet',
                'createdate' => '2019-06-30 05:29:26',
                'updatedate' => '2019-06-30 05:29:26'
            ],
        ];
        parent::init();
    }
}
