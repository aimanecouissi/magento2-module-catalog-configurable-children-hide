<?php
/**
 * Aimane Couissi - https://aimanecouissi.com
 * Copyright © Aimane Couissi 2026–present. All rights reserved.
 * Licensed under the MIT License. See LICENSE for details.
 */

declare(strict_types=1);

namespace AimaneCouissi\CatalogProductGridConfigurableChildrenHide\Plugin\Magento\Catalog\Ui\DataProvider\Product;

use AimaneCouissi\CatalogProductGridConfigurableChildrenHide\Model\Config;
use Magento\Catalog\Model\ResourceModel\Product\Collection as ProductCollection;
use Magento\Catalog\Ui\DataProvider\Product\ProductDataProvider;

class ProductDataProviderPlugin
{
    /**
     * @param Config $config
     */
    public function __construct(private readonly Config $config)
    {
    }

    /**
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
     * @param ProductCollection $collection
     * @return void
     */
    private function excludeConfigurableChildren(ProductCollection $collection): void
    {
        $connection = $collection->getConnection();
        $superLinkTable = $collection->getTable('catalog_product_super_link');
        $collection->getSelect()->where(
            'e.entity_id NOT IN (?)',
            $connection->select()->from($superLinkTable, ['product_id'])
        );
    }
}
