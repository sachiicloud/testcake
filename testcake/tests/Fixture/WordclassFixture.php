<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * WordclassFixture
 */
class WordclassFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'wordclass';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'wcid' => ['type' => 'string', 'length' => 1, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'lang' => ['type' => 'string', 'length' => 3, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'name' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'createdate' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'updatedate' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'lang' => ['type' => 'index', 'columns' => ['lang'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['wcid', 'lang'], 'length' => []],
            'wordclass_ibfk_1' => ['type' => 'foreign', 'columns' => ['lang'], 'references' => ['language', 'lang'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'wcid' => '37a6a0ed-eb6b-4f8b-bc4a-d76e6a8cfc7d',
                'lang' => 'f0ca4abb-36b1-401a-b250-2581c5800f99',
                'name' => 'Lorem ipsum dolor sit amet',
                'createdate' => '2019-06-29 12:18:32',
                'updatedate' => '2019-06-29 12:18:32'
            ],
        ];
        parent::init();
    }
}
