<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Category Entity
 *
 * @property int $id
 * @property int $parent_id
 * @property string $name
 * @property int $page_url_id
 * @property string $icon
 *
 * @property \App\Model\Entity\Category $parent_category
 * @property \App\Model\Entity\PageUrl $page_url
 * @property \App\Model\Entity\Category[] $child_categories
 * @property \App\Model\Entity\Product[] $products
 */
class Category extends Entity
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
        'parent_id' => true,
        'name' => true,
        'page_url_id' => true,
        'icon' => true,
        'parent_category' => true,
        'page_url' => true,
        'child_categories' => true,
        'products' => true
    ];
}
