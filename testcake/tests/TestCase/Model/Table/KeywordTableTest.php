<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\KeywordTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\KeywordTable Test Case
 */
class KeywordTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\KeywordTable
     */
    public $Keyword;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Keyword'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Keyword') ? [] : ['className' => KeywordTable::class];
        $this->Keyword = TableRegistry::getTableLocator()->get('Keyword', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Keyword);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
