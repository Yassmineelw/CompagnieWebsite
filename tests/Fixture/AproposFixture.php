<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AproposFixture
 */
class AproposFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'information' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['information'], 'length' => []],
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
                'information' => 1,
            ],
        ];
        parent::init();
    }
}
