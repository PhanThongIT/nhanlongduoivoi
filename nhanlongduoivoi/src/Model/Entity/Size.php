<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Size Entity
 *
 * @property int $id
 * @property string $name_size
 * @property string $note
 *
 * @property \App\Model\Entity\Product[] $products
 * @property \App\Model\Entity\TmpSize[] $tmp_size
 */
class Size extends Entity
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
        'name_size' => true,
        'note' => true,
        'products' => true,
        'tmp_size' => true
    ];
}
