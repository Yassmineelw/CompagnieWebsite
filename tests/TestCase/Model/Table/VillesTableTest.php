<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VillesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VillesTable Test Case
 */
class VillesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VillesTable
     */
    public $Villes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Villes',
        'app.Commandes',
        'app.Ressources',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Villes') ? [] : ['className' => VillesTable::class];
        $this->Villes = TableRegistry::getTableLocator()->get('Villes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Villes);

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
