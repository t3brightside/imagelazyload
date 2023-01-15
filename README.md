# Image Lazy Load
[![License](https://poser.pugx.org/t3brightside/imagelazyload/license)](LICENSE.txt)
[![Packagist](https://img.shields.io/packagist/v/t3brightside/imagelazyload.svg?style=flat)](https://packagist.org/packages/t3brightside/imagelazyload)
[![Downloads](https://poser.pugx.org/t3brightside/imagelazyload/downloads)](https://packagist.org/packages/t3brightside/imagelazyload)
[![Brightside](https://img.shields.io/badge/by-t3brightside.com-orange.svg?style=flat)](https://t3brightside.com)

**Adding an option to disable images lazy load in TYPO3 CMS extensions: pagelist, personnel, gallerycontent, and custom elements.**

It's a good practice to keep your above the fold content images loading not lazy.

## Installation
- `composer req t3brightside/imagelazyload` or from TYPO3 extension repository **[imagelazyload](https://extensions.typo3.org/extension/imagelazyload/)**

## Use in custom elements
- Add `tx_imagelazyload` to your content element TCA
- Add `loading="{f:if(condition: '!{data.tx_imagelazyload}', then: 'lazy')}"` in your image tag.

## Development & maintenance
[Brightside OÜ – TYPO3 development and hosting specialised web agency](https://t3brightside.com/)
