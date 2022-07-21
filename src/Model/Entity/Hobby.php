<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Hobby Entity
 *
 * @property int $id
 * @property string $hobby
 * @property int $user_id
 *
 * @property \App\Model\Entity\User $user
 */
class Hobby extends Entity
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
        'hobby' => true,
        'user_id' => true,
        'user' => true,
    ];
}
