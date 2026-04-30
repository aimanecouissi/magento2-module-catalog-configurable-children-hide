# AimaneCouissi_CatalogProductGridConfigurableChildrenHide

[![Latest Stable Version](http://poser.pugx.org/aimanecouissi/module-catalog-product-grid-configurable-children-hide/v)](https://packagist.org/packages/aimanecouissi/module-catalog-product-grid-configurable-children-hide) [![Total Downloads](http://poser.pugx.org/aimanecouissi/module-catalog-product-grid-configurable-children-hide/downloads)](https://packagist.org/packages/aimanecouissi/module-catalog-product-grid-configurable-children-hide) [![Magento Version](https://img.shields.io/badge/magento-2.4.x-E68718)](https://packagist.org/packages/aimanecouissi/module-catalog-product-grid-configurable-children-hide) [![License](http://poser.pugx.org/aimanecouissi/module-catalog-product-grid-configurable-children-hide/license)](https://packagist.org/packages/aimanecouissi/module-catalog-product-grid-configurable-children-hide) [![PHP Version Require](http://poser.pugx.org/aimanecouissi/module-catalog-product-grid-configurable-children-hide/require/php)](https://packagist.org/packages/aimanecouissi/module-catalog-product-grid-configurable-children-hide)

Hides simple child products assigned to configurable products from the **Admin → Catalog → Products** grid. The module
keeps parent-configurable products and standalone products in the grid while removing assigned child rows from the Admin
product listing.

## Installation

```bash
composer require aimanecouissi/module-catalog-product-grid-configurable-children-hide
bin/magento module:enable AimaneCouissi_CatalogProductGridConfigurableChildrenHide
bin/magento setup:upgrade
bin/magento cache:flush
```

## Configuration

Navigate to **Stores → Configuration → Catalog → Admin**. Set **Hide Configurable Product Children** to `Yes` to exclude
simple products linked to configurable products from the **Admin → Catalog → Products** grid. Set **Hide Configurable
Product Children** to `No` to keep Magento default grid behavior.

## Usage

When **Hide Configurable Product Children** is `Yes`, the **Admin → Catalog → Products** grid excludes simple products
assigned to configurable products. Parent-configurable products and standalone products remain visible.

## Uninstall

```bash
bin/magento module:disable AimaneCouissi_CatalogProductGridConfigurableChildrenHide
composer remove aimanecouissi/module-catalog-product-grid-configurable-children-hide
bin/magento setup:upgrade
bin/magento cache:flush
```

## Changelog

See [CHANGELOG](CHANGELOG.md) for all recent changes.

## License

[MIT](LICENSE)
