# AimaneCouissi_CatalogProductGridConfigurableChildrenHide

[![Latest Stable Version](http://poser.pugx.org/aimanecouissi/module-catalog-product-grid-configurable-children-hide/v)](https://packagist.org/packages/aimanecouissi/module-catalog-product-grid-configurable-children-hide) [![Total Downloads](http://poser.pugx.org/aimanecouissi/module-catalog-product-grid-configurable-children-hide/downloads)](https://packagist.org/packages/aimanecouissi/module-catalog-product-grid-configurable-children-hide) [![Magento Version Require](https://img.shields.io/badge/magento-2.4.x-E68718)](https://packagist.org/packages/aimanecouissi/module-catalog-product-grid-configurable-children-hide) [![License](http://poser.pugx.org/aimanecouissi/module-catalog-product-grid-configurable-children-hide/license)](https://packagist.org/packages/aimanecouissi/module-catalog-product-grid-configurable-children-hide) [![PHP Version Require](http://poser.pugx.org/aimanecouissi/module-catalog-product-grid-configurable-children-hide/require/php)](https://packagist.org/packages/aimanecouissi/module-catalog-product-grid-configurable-children-hide)

Hides configurable product children from the **Admin → Catalog → Products** grid, keeping it focused on parent and standalone products.

## Installation
```bash
composer require aimanecouissi/module-catalog-product-grid-configurable-children-hide
bin/magento module:enable AimaneCouissi_CatalogProductGridConfigurableChildrenHide
bin/magento setup:upgrade
bin/magento cache:flush
```

## Configuration

Navigate to **Stores → Configuration → Catalog → Admin**. Set **Hide Configurable Product Children** to `Yes` to exclude simple products linked to configurables from the grid, or `No` to restore default Magento behavior.

## Usage

The **Hide Configurable Product Children** setting defaults to `Yes`, so simple products assigned to configurables are excluded from the **Admin → Catalog → Products** grid immediately after installation. Only parent and standalone products are shown. The setting can be changed at any time from the Admin configuration.

## Uninstall
```bash
bin/magento module:disable AimaneCouissi_CatalogProductGridConfigurableChildrenHide
composer remove aimanecouissi/module-catalog-product-grid-configurable-children-hide
bin/magento setup:upgrade
bin/magento cache:flush
```

## License

[MIT](LICENSE)
