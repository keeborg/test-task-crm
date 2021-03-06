<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ClientsInterest Entity
 *
 * @property int $client_id
 * @property int $interest_id
 *
 * @property \App\Model\Entity\Client $client
 * @property \App\Model\Entity\Interest $interest
 */
class ClientsInterest extends Entity
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
        'client' => true,
        'interest' => true
    ];
}
