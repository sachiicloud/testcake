<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GroupLinkTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GroupLinkTable Test Case
 */
class GroupLinkTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GroupLinkTable
     */
    public $GroupLink;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.GroupLink'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('GroupLink') ? [] : ['className' => GroupLinkTable::class];
        $this->GroupLink = TableRegistry::getTableLocator()->get('GroupLink', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GroupLink);

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
