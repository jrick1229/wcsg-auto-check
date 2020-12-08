# WooCommerce Subscriptions Gifting - Auto-Check

 For use with [WooCommerce Subscriptions Gifting](https://woocommerce.com/products/woocommerce-subscriptions-gifting/).

Install and activate this plugin. It will auto-check the gifting checkbox on product pages.

## Requirements

This plugin was built while WC 3.4.2 and WCSG 2.0.1 were current, and have not been tested on any other versions. Use at own risk.

## Installation

To install:

1. Download the latest version of the plugin [here](https://github.com/jrick1229/wcsg-auto-check/archive/master.zip)
1. Go to **Plugins > Add New > Upload** administration screen on your WordPress site
1. Select the ZIP file you just downloaded
1. Click **Install Now**
1. Click **Activate**

## Instructions 

By default, once you activate this plugin, it will automatically check the Gifting checkbox on **all pages**. If you want to check it only on some **spefific pages**, you'll need to add this constant on wp-config.php file:

`define( 'WCSG_PAGES_TO_CHECK', array( 1, 2, 3 ) );`

Each of these numbers (1,2,3) is the ID of a page where this checkbox will be checked.

## Reporting Issues

If you find a problem or would like to request this plugin be extended, please [open a new Issue](https://github.com/jrick1229/wcsg-auto-check/issues/new).

---

<p align="center">
	<a href="https://prospress.com/">
		<img src="https://cloud.githubusercontent.com/assets/235523/11986380/bb6a0958-a983-11e5-8e9b-b9781d37c64a.png" width="160">
	</a>
</p>
