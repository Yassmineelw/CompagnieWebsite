<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RessourcesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RessourcesTable Test Case
 */
class RessourcesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RessourcesTable
     */
    public $Ressources;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Ressources',
        'app.Commandes',
        'app.Villes',
        'app.Companies',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Ressources') ? [] : ['className' => RessourcesTable::class];
        $this->Ressources = TableRegistry::getTableLocator()->get('Ressources', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Ressources);

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
