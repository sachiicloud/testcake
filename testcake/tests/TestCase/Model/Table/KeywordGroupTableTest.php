<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\KeywordGroupTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\KeywordGroupTable Test Case
 */
class KeywordGroupTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\KeywordGroupTable
     */
    public $KeywordGroup;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.KeywordGroup'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('KeywordGroup') ? [] : ['className' => KeywordGroupTable::class];
        $this->KeywordGroup = TableRegistry::getTableLocator()->get('KeywordGroup', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->KeywordGroup);

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
