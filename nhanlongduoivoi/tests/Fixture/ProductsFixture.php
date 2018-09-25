<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductsFixture
 *
 */
class ProductsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'category_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'page_url_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'name' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'detail' => ['type' => 'string', 'length' => 500, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'price' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'promotion_price' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => ''],
        'promotion' => ['type' => 'string', 'length' => 200, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'size_id' => ['type' => 'integer', 'length' => 100, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '1:nhỏ, 2 vừa , 3 lớn', 'precision' => null, 'autoIncrement' => null],
        'image' => ['type' => 'binary', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'status' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '0: sp bình thường, 1: sp đặc biệt', 'precision' => null],
        'new' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '0: old, 1:new', 'precision' => null],
        'update_at' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'deleted' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '0: chua xoa, 1: da xoa', 'precision' => null],
        '_indexes' => [
            'id_type' => ['type' => 'index', 'columns' => ['category_id'], 'length' => []],
            'id_url' => ['type' => 'index', 'columns' => ['page_url_id'], 'length' => []],
            'size' => ['type' => 'index', 'columns' => ['size_id'], 'length' => []],
            'name_2' => ['type' => 'fulltext', 'columns' => ['name'], 'length' => []],
            'search1' => ['type' => 'fulltext', 'columns' => ['name', 'detail'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'products_ibfk_1' => ['type' => 'foreign', 'columns' => ['category_id'], 'references' => ['categories', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'products_ibfk_2' => ['type' => 'foreign', 'columns' => ['page_url_id'], 'references' => ['page_url', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'sizeproduct_ibfk_size' => ['type' => 'foreign', 'columns' => ['size_id'], 'references' => ['size', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
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
                'id' => 1,
                'category_id' => 1,
                'page_url_id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'detail' => 'Lorem ipsum dolor sit amet',
                'price' => 1,
                'promotion_price' => 1,
                'promotion' => 'Lorem ipsum dolor sit amet',
                'size_id' => 1,
                'image' => 'Lorem ipsum dolor sit amet',
                'status' => 1,
                'new' => 1,
                'update_at' => '2018-09-22',
                'deleted' => 1
            ],
        ];
        parent::init();
    }
}
