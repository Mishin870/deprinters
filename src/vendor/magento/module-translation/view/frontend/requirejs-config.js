/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

var config = {
    map: {
        '*': {
            editTrigger: 'mage/edit-trigger',
            addClass: 'Magento_Translation/js/add-class',
            'Magento_Translation/add-class': 'Magento_Translation/js/add-class',
            mageTranslationDictionary: 'Magento_Translation/js/mage-translation-dictionary'
        }
    },
    deps: [
        'mage/translate-inline',
        'mageTranslationDictionary'
    ]
};