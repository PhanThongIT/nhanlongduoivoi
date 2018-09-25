<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property int $category_id
 * @property int $page_url_id
 * @property string $name
 * @property string $detail
 * @property float $price
 * @property float $promotion_price
 * @property string $promotion
 * @property int $size_id
 * @property string|resource $image
 * @property bool $status
 * @property bool $new
 * @property \Cake\I18n\FrozenDate $update_at
 * @property bool $deleted
 *
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\PageUrl $page_url
 * @property \App\Model\Entity\Size $size
 * @property \App\Model\Entity\BillDetail[] $bill_detail
 */
class Product extends Entity
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
        'category_id' => true,
        'page_url_id' => true,
        'name' => true,
        'detail' => true,
        'price' => true,
        'promotion_price' => true,
        'promotion' => true,
        'size_id' => true,
        'image' => true,
        'status' => true,
        'new' => true,
        'update_at' => true,
        'deleted' => true,
        'category' => true,
        'page_url' => true,
        'size' => true,
        'bill_detail' => true
    ];
}
