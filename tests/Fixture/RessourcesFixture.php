<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RessourcesFixture
 */
class RessourcesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'commande_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ville_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'code' => ['type' => 'string', 'length' => 10, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'name' => ['type' => 'string', 'length' => 30, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'commande_id' => ['type' => 'index', 'columns' => ['commande_id'], 'length' => []],
            'fk_ville_id' => ['type' => 'index', 'columns' => ['ville_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_ville_id' => ['type' => 'foreign', 'columns' => ['ville_id'], 'references' => ['villes', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'commande_id' => ['type' => 'foreign', 'columns' => ['commande_id'], 'references' => ['commandes', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'commande_id' => 1,
                'ville_id' => 1,
                'code' => 'Lorem ip',
                'name' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
