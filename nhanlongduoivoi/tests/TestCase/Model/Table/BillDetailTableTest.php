<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BillDetailTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BillDetailTable Test Case
 */
class BillDetailTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BillDetailTable
     */
    public $BillDetail;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.bill_detail',
        'app.bills',
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
        $config = TableRegistry::getTableLocator()->exists('BillDetail') ? [] : ['className' => BillDetailTable::class];
        $this->BillDetail = TableRegistry::getTableLocator()->get('BillDetail', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BillDetail);

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
