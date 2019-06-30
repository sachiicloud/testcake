<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WordclassTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WordclassTable Test Case
 */
class WordclassTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\WordclassTable
     */
    public $Wordclass;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Wordclass'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Wordclass') ? [] : ['className' => WordclassTable::class];
        $this->Wordclass = TableRegistry::getTableLocator()->get('Wordclass', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Wordclass);

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
