# AimaneCouissi_CatalogConfigurableChildrenHide

[![Latest Stable Version](http://poser.pugx.org/aimanecouissi/module-catalog-configurable-children-hide/v)](https://packagist.org/packages/aimanecouissi/module-catalog-configurable-children-hide) [![Total Downloads](http://poser.pugx.org/aimanecouissi/module-catalog-configurable-children-hide/downloads)](https://packagist.org/packages/aimanecouissi/module-catalog-configurable-children-hide) [![Latest Unstable Version](http://poser.pugx.org/aimanecouissi/module-catalog-configurable-children-hide/v/unstable)](https://packagist.org/packages/aimanecouissi/module-catalog-configurable-children-hide) [![License](http://poser.pugx.org/aimanecouissi/module-catalog-configurable-children-hide/license)](https://packagist.org/packages/aimanecouissi/module-catalog-configurable-children-hide) [![PHP Version Require](http://poser.pugx.org/aimanecouissi/module-catalog-configurable-children-hide/require/php)](https://packagist.org/packages/aimanecouissi/module-catalog-configurable-children-hide)

Are you tired of seeing all the simple products linked to configurables cluttering your Admin product grid? This module hides configurable product children from the Admin grid, making the page cleaner, easier to manage, and focused only on parent products.

## Installation
```bash
composer require aimanecouissi/module-catalog-configurable-children-hide
bin/magento module:enable AimaneCouissi_CatalogConfigurableChildrenHide
bin/magento setup:upgrade
bin/magento cache:flush
```

## Configuration
- **Stores → Configuration → Catalog → Admin → Hide Configurable Product Children**  
- Set to **Yes** to hide simple products that belong to configurables from the Admin product grid, or **No** to restore the default Magento grid behavior.

## Usage
By default, the **Hide Configurable Product Children** setting is **enabled**, so after installation all **simple products assigned to configurable products** are automatically excluded from the Admin product grid. Only parent and standalone products are visible. You can toggle this setting at any time from the Admin configuration.

## Uninstall
```bash
bin/magento module:disable AimaneCouissi_CatalogConfigurableChildrenHide
composer remove aimanecouissi/module-catalog-configurable-children-hide
bin/magento setup:upgrade
bin/magento cache:flush
```

## License
[MIT](LICENSE)
