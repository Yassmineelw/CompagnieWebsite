<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CommandesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CommandesTable Test Case
 */
class CommandesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CommandesTable
     */
    public $Commandes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Commandes',
        'app.Ressources',
        'app.Villes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Commandes') ? [] : ['className' => CommandesTable::class];
        $this->Commandes = TableRegistry::getTableLocator()->get('Commandes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Commandes);

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
