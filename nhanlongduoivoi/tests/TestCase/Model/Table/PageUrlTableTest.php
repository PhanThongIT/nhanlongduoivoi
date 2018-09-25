<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PageUrlTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PageUrlTable Test Case
 */
class PageUrlTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PageUrlTable
     */
    public $PageUrl;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.page_url',
        'app.categories',
        'app.products'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PageUrl') ? [] : ['className' => PageUrlTable::class];
        $this->PageUrl = TableRegistry::getTableLocator()->get('PageUrl', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PageUrl);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
