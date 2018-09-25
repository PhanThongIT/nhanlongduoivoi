<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Bill Entity
 *
 * @property int $id
 * @property int $customer_id
 * @property \Cake\I18n\FrozenDate $date_order
 * @property float $promt_price
 * @property float $total
 * @property string $payment_method
 * @property string $note
 * @property string $token
 * @property float $token_date
 * @property int $status
 *
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\BillDetail[] $bill_detail
 */
class Bill extends Entity
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
        'customer_id' => true,
        'date_order' => true,
        'promt_price' => true,
        'total' => true,
        'payment_method' => true,
        'note' => true,
        'token' => true,
        'token_date' => true,
        'status' => true,
        'customer' => true,
        'bill_detail' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'token'
    ];
}
