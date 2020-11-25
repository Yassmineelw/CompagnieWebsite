<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ville Entity
 *
 * @property int $id
 * @property int $commande_id
 * @property string $code
 * @property string $name
 *
 * @property \App\Model\Entity\Commande $commande
 * @property \App\Model\Entity\Ressource[] $ressources
 */
class Ville extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'commande_id' => true,
        'code' => true,
        'name' => true,
        'commande' => true,
        'ressources' => true,
    ];
}
