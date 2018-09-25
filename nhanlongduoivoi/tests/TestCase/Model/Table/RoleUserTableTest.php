<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RoleUserTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RoleUserTable Test Case
 */
class RoleUserTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RoleUserTable
     */
    public $RoleUser;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.role_user',
        'app.role',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('RoleUser') ? [] : ['className' => RoleUserTable::class];
        $this->RoleUser = TableRegistry::getTableLocator()->get('RoleUser', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RoleUser);

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
