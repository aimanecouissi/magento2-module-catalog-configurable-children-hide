<?php
/**
 * Aimane Couissi - https://aimanecouissi.com
 * Copyright © Aimane Couissi 2026–present. All rights reserved.
 * Licensed under the MIT License. See LICENSE for details.
 */

declare(strict_types=1);

namespace AimaneCouissi\CatalogProductGridConfigurableChildrenHide\Plugin\Catalog\Ui\DataProvider\Product;

use AimaneCouissi\CatalogProductGridConfigurableChildrenHide\Model\Config;
use Magento\Catalog\Model\ResourceModel\Product\Collection as ProductCollection;
use Magento\Catalog\Ui\DataProvider\Product\ProductDataProvider;

class ProductDataProviderPlugin
{
    private const string TABLE_CATALOG_PRODUCT_SUPER_LINK = 'catalog_product_super_link';

    /**
     * @param Config $config
     */
    public function __construct(private readonly Config $config)
    {
    }

    /**
     * Excludes configurable child products from the product collection.
     *
     * @param ProductDataProvider $subject
     * @param ProductCollection $collection
     * @return ProductCollection
     */
    public function afterGetCollection(ProductDataProvider $subject, ProductCollection $collection): ProductCollection
    {
        if (!$this->config->isHideConfigurableChildrenEnabled()) {
            return $collection;
        }
        $this->excludeConfigurableChildren($collection);
        return $collection;
    }

    /**
     * Excludes simple products linked to configurables from the given collection.
     *
     * @param ProductCollection $collection
     * @return void
     */
    private function excludeConfigurableChildren(ProductCollection $collection): void
    {
        $connection = $collection->getConnection();
        $superLinkTable = $collection->getTable(self::TABLE_CATALOG_PRODUCT_SUPER_LINK);
        $collection->getSelect()->where(
            'e.entity_id NOT IN (?)',
            $connection->select()->from($superLinkTable, ['product_id'])
        );
    }
}
