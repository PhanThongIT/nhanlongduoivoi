<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $fullname
 * @property \Cake\I18n\FrozenDate $birthdate
 * @property string $gender
 * @property string $address
 * @property string $email
 * @property string $phone
 * @property string $remember_token
 * @property \Cake\I18n\FrozenTime $updated_at
 * @property \Cake\I18n\FrozenTime $created_at
 *
 * @property \App\Model\Entity\RoleUser[] $role_user
 */
class User extends Entity
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
        'username' => true,
        'password' => true,
        'fullname' => true,
        'birthdate' => true,
        'gender' => true,
        'address' => true,
        'email' => true,
        'phone' => true,
        'remember_token' => true,
        'updated_at' => true,
        'created_at' => true,
        'role_user' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
