<?php
/**
 * Aimane Couissi - https://aimanecouissi.com
 * Copyright © Aimane Couissi 2026–present. All rights reserved.
 * Licensed under the MIT License. See LICENSE for details.
 */

declare(strict_types=1);

namespace AimaneCouissi\CatalogProductGridConfigurableChildrenHide\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;

class Config
{
    private const string XML_PATH_CATALOG_ADMIN_HIDE_CONFIGURABLE_CHILDREN = 'catalog/admin/hide_configurable_children';

    /**
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(private readonly ScopeConfigInterface $scopeConfig)
    {
    }

    /**
     * Checks whether hiding configurable children in the admin catalog is enabled.
     *
     * @return bool
     */
    public function isHideConfigurableChildrenEnabled(): bool
    {
        return $this->scopeConfig->isSetFlag(self::XML_PATH_CATALOG_ADMIN_HIDE_CONFIGURABLE_CHILDREN);
    }
}
