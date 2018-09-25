<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Customer Entity
 *
 * @property int $id
 * @property string $name
 * @property string $gender
 * @property string $email
 * @property string $address
 * @property string $phone
 * @property string $note
 * @property int $status
 *
 * @property \App\Model\Entity\Bill[] $bills
 */
class Customer extends Entity
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
        'name' => true,
        'gender' => true,
        'email' => true,
        'address' => true,
        'phone' => true,
        'note' => true,
        'status' => true,
        'bills' => true
    ];
}
