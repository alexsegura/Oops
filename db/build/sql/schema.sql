
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- djland_access
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_access`;

CREATE TABLE `djland_access`
(
	`id_profile` int(10) unsigned NOT NULL,
	`id_tab` int(10) unsigned NOT NULL,
	`view` INTEGER NOT NULL,
	`add` INTEGER NOT NULL,
	`edit` INTEGER NOT NULL,
	`delete` INTEGER NOT NULL,
	PRIMARY KEY (`id_profile`,`id_tab`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_accessory
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_accessory`;

CREATE TABLE `djland_accessory`
(
	`id_product_1` int(10) unsigned NOT NULL,
	`id_product_2` int(10) unsigned NOT NULL,
	PRIMARY KEY (`id_product_1`),
	INDEX `accessory_product` (`id_product_1`, `id_product_2`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_address
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_address`;

CREATE TABLE `djland_address`
(
	`id_address` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`id_country` int(10) unsigned NOT NULL,
	`id_state` int(10) unsigned,
	`id_customer` int(10) unsigned DEFAULT 0 NOT NULL,
	`id_manufacturer` int(10) unsigned DEFAULT 0 NOT NULL,
	`id_supplier` int(10) unsigned DEFAULT 0 NOT NULL,
	`alias` VARCHAR(32) NOT NULL,
	`company` VARCHAR(32),
	`lastname` VARCHAR(32) NOT NULL,
	`firstname` VARCHAR(32) NOT NULL,
	`address1` VARCHAR(128) NOT NULL,
	`address2` VARCHAR(128),
	`postcode` VARCHAR(12),
	`city` VARCHAR(64) NOT NULL,
	`other` TEXT,
	`phone` VARCHAR(16),
	`phone_mobile` VARCHAR(16),
	`vat_number` VARCHAR(32),
	`dni` VARCHAR(16),
	`date_add` DATETIME NOT NULL,
	`date_upd` DATETIME NOT NULL,
	`active` tinyint(1) unsigned DEFAULT 1 NOT NULL,
	`deleted` tinyint(1) unsigned DEFAULT 0 NOT NULL,
	PRIMARY KEY (`id_address`),
	INDEX `address_customer` (`id_customer`),
	INDEX `id_country` (`id_country`),
	INDEX `id_state` (`id_state`),
	INDEX `id_manufacturer` (`id_manufacturer`),
	INDEX `id_supplier` (`id_supplier`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_address_format
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_address_format`;

CREATE TABLE `djland_address_format`
(
	`id_country` int(10) unsigned NOT NULL,
	`format` VARCHAR(255) DEFAULT '' NOT NULL,
	PRIMARY KEY (`id_country`),
	INDEX `country` (`id_country`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_alias
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_alias`;

CREATE TABLE `djland_alias`
(
	`id_alias` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`alias` VARCHAR(255) NOT NULL,
	`search` VARCHAR(255) NOT NULL,
	`active` TINYINT(1) DEFAULT 1 NOT NULL,
	PRIMARY KEY (`id_alias`),
	UNIQUE INDEX `alias` (`alias`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_attachment
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_attachment`;

CREATE TABLE `djland_attachment`
(
	`id_attachment` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`file` VARCHAR(40) NOT NULL,
	`file_name` VARCHAR(128) NOT NULL,
	`mime` VARCHAR(128) NOT NULL,
	PRIMARY KEY (`id_attachment`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_attachment_lang
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_attachment_lang`;

CREATE TABLE `djland_attachment_lang`
(
	`id_attachment` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`id_lang` int(10) unsigned NOT NULL,
	`name` VARCHAR(32),
	`description` TEXT,
	PRIMARY KEY (`id_attachment`,`id_lang`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_attribute
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_attribute`;

CREATE TABLE `djland_attribute`
(
	`id_attribute` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`id_attribute_group` int(10) unsigned NOT NULL,
	`color` VARCHAR(32),
	PRIMARY KEY (`id_attribute`),
	INDEX `attribute_group` (`id_attribute_group`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_attribute_group
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_attribute_group`;

CREATE TABLE `djland_attribute_group`
(
	`id_attribute_group` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`is_color_group` TINYINT(1) DEFAULT 0 NOT NULL,
	PRIMARY KEY (`id_attribute_group`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_attribute_group_lang
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_attribute_group_lang`;

CREATE TABLE `djland_attribute_group_lang`
(
	`id_attribute_group` int(10) unsigned NOT NULL,
	`id_lang` int(10) unsigned NOT NULL,
	`name` VARCHAR(128) NOT NULL,
	`public_name` VARCHAR(64) NOT NULL,
	PRIMARY KEY (`id_attribute_group`,`id_lang`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_attribute_impact
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_attribute_impact`;

CREATE TABLE `djland_attribute_impact`
(
	`id_attribute_impact` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`id_product` int(11) unsigned NOT NULL,
	`id_attribute` int(11) unsigned NOT NULL,
	`weight` FLOAT NOT NULL,
	`price` DECIMAL(17,2) NOT NULL,
	PRIMARY KEY (`id_attribute_impact`),
	UNIQUE INDEX `id_product` (`id_product`, `id_attribute`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_attribute_lang
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_attribute_lang`;

CREATE TABLE `djland_attribute_lang`
(
	`id_attribute` int(10) unsigned NOT NULL,
	`id_lang` int(10) unsigned NOT NULL,
	`name` VARCHAR(128) NOT NULL,
	PRIMARY KEY (`id_attribute`,`id_lang`),
	INDEX `id_lang` (`id_lang`, `name`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_carrier
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_carrier`;

CREATE TABLE `djland_carrier`
(
	`id_carrier` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`id_tax_rules_group` int(10) unsigned DEFAULT 0,
	`name` VARCHAR(64) NOT NULL,
	`url` VARCHAR(255),
	`active` tinyint(1) unsigned DEFAULT 0 NOT NULL,
	`deleted` tinyint(1) unsigned DEFAULT 0 NOT NULL,
	`shipping_handling` tinyint(1) unsigned DEFAULT 1 NOT NULL,
	`range_behavior` tinyint(1) unsigned DEFAULT 0 NOT NULL,
	`is_module` tinyint(1) unsigned DEFAULT 0 NOT NULL,
	`is_free` tinyint(1) unsigned DEFAULT 0 NOT NULL,
	`shipping_external` tinyint(1) unsigned DEFAULT 0 NOT NULL,
	`need_range` tinyint(1) unsigned DEFAULT 0 NOT NULL,
	`external_module_name` VARCHAR(64),
	`shipping_method` INTEGER(2) DEFAULT 0 NOT NULL,
	PRIMARY KEY (`id_carrier`),
	INDEX `deleted` (`deleted`, `active`),
	INDEX `id_tax_rules_group` (`id_tax_rules_group`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_carrier_group
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_carrier_group`;

CREATE TABLE `djland_carrier_group`
(
	`id_carrier` int(10) unsigned NOT NULL,
	`id_group` int(10) unsigned NOT NULL,
	PRIMARY KEY (`id_carrier`),
	UNIQUE INDEX `id_carrier` (`id_carrier`, `id_group`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_carrier_lang
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_carrier_lang`;

CREATE TABLE `djland_carrier_lang`
(
	`id_carrier` int(10) unsigned NOT NULL,
	`id_lang` int(10) unsigned NOT NULL,
	`delay` VARCHAR(128),
	PRIMARY KEY (`id_carrier`),
	UNIQUE INDEX `shipper_lang_index` (`id_lang`, `id_carrier`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_carrier_zone
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_carrier_zone`;

CREATE TABLE `djland_carrier_zone`
(
	`id_carrier` int(10) unsigned NOT NULL,
	`id_zone` int(10) unsigned NOT NULL,
	PRIMARY KEY (`id_carrier`,`id_zone`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_cart
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_cart`;

CREATE TABLE `djland_cart`
(
	`id_cart` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`id_carrier` int(10) unsigned NOT NULL,
	`id_lang` int(10) unsigned NOT NULL,
	`id_address_delivery` int(10) unsigned NOT NULL,
	`id_address_invoice` int(10) unsigned NOT NULL,
	`id_currency` int(10) unsigned NOT NULL,
	`id_customer` int(10) unsigned NOT NULL,
	`id_guest` int(10) unsigned NOT NULL,
	`secure_key` VARCHAR(32) DEFAULT '-1' NOT NULL,
	`recyclable` tinyint(1) unsigned DEFAULT 1 NOT NULL,
	`gift` tinyint(1) unsigned DEFAULT 0 NOT NULL,
	`gift_message` TEXT,
	`date_add` DATETIME NOT NULL,
	`date_upd` DATETIME NOT NULL,
	PRIMARY KEY (`id_cart`),
	INDEX `cart_customer` (`id_customer`),
	INDEX `id_address_delivery` (`id_address_delivery`),
	INDEX `id_address_invoice` (`id_address_invoice`),
	INDEX `id_carrier` (`id_carrier`),
	INDEX `id_lang` (`id_lang`),
	INDEX `id_currency` (`id_currency`),
	INDEX `id_guest` (`id_guest`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_cart_discount
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_cart_discount`;

CREATE TABLE `djland_cart_discount`
(
	`id_cart` int(10) unsigned NOT NULL,
	`id_discount` int(10) unsigned NOT NULL,
	PRIMARY KEY (`id_cart`),
	INDEX `cart_discount_index` (`id_cart`, `id_discount`),
	INDEX `id_discount` (`id_discount`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_cart_product
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_cart_product`;

CREATE TABLE `djland_cart_product`
(
	`id_cart` int(10) unsigned NOT NULL,
	`id_product` int(10) unsigned NOT NULL,
	`id_product_attribute` int(10) unsigned,
	`quantity` int(10) unsigned DEFAULT 0 NOT NULL,
	`date_add` DATETIME NOT NULL,
	PRIMARY KEY (`id_cart`),
	INDEX `cart_product_index` (`id_cart`, `id_product`),
	INDEX `id_product_attribute` (`id_product_attribute`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_category
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_category`;

CREATE TABLE `djland_category`
(
	`id_category` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`id_parent` int(10) unsigned NOT NULL,
	`level_depth` tinyint(3) unsigned DEFAULT 0 NOT NULL,
	`nleft` int(10) unsigned DEFAULT 0 NOT NULL,
	`nright` int(10) unsigned DEFAULT 0 NOT NULL,
	`active` tinyint(1) unsigned DEFAULT 0 NOT NULL,
	`date_add` DATETIME NOT NULL,
	`date_upd` DATETIME NOT NULL,
	`position` int(10) unsigned DEFAULT 0 NOT NULL,
	PRIMARY KEY (`id_category`),
	INDEX `category_parent` (`id_parent`),
	INDEX `nleftright` (`nleft`, `nright`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_category_group
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_category_group`;

CREATE TABLE `djland_category_group`
(
	`id_category` int(10) unsigned NOT NULL,
	`id_group` int(10) unsigned NOT NULL,
	PRIMARY KEY (`id_category`),
	UNIQUE INDEX `category_group_index` (`id_category`, `id_group`),
	INDEX `id_category` (`id_category`),
	INDEX `id_group` (`id_group`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_category_lang
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_category_lang`;

CREATE TABLE `djland_category_lang`
(
	`id_category` int(10) unsigned NOT NULL,
	`id_lang` int(10) unsigned NOT NULL,
	`name` VARCHAR(128) NOT NULL,
	`description` TEXT,
	`link_rewrite` VARCHAR(128) NOT NULL,
	`meta_title` VARCHAR(128),
	`meta_keywords` VARCHAR(255),
	`meta_description` VARCHAR(255),
	PRIMARY KEY (`id_category`,`id_lang`),
	UNIQUE INDEX `category_lang_index` (`id_category`, `id_lang`),
	INDEX `category_name` (`name`),
	INDEX `djland_category_lang_FI_2` (`id_lang`),
	CONSTRAINT `djland_category_lang_FK_1`
		FOREIGN KEY (`id_category`)
		REFERENCES `djland_category` (`id_category`),
	CONSTRAINT `djland_category_lang_FK_2`
		FOREIGN KEY (`id_lang`)
		REFERENCES `djland_lang` (`id_lang`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_category_product
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_category_product`;

CREATE TABLE `djland_category_product`
(
	`id_category` int(10) unsigned NOT NULL,
	`id_product` int(10) unsigned NOT NULL,
	`position` int(10) unsigned DEFAULT 0 NOT NULL,
	PRIMARY KEY (`id_category`,`id_product`),
	INDEX `category_product_index` (`id_category`, `id_product`),
	INDEX `id_product` (`id_product`),
	CONSTRAINT `djland_category_product_FK_1`
		FOREIGN KEY (`id_product`)
		REFERENCES `djland_product` (`id_product`),
	CONSTRAINT `djland_category_product_FK_2`
		FOREIGN KEY (`id_category`)
		REFERENCES `djland_category` (`id_category`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_cms
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_cms`;

CREATE TABLE `djland_cms`
(
	`id_cms` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`id_cms_category` int(10) unsigned NOT NULL,
	`position` int(10) unsigned DEFAULT 0 NOT NULL,
	`active` tinyint(1) unsigned DEFAULT 0 NOT NULL,
	PRIMARY KEY (`id_cms`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_cms_block
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_cms_block`;

CREATE TABLE `djland_cms_block`
(
	`id_cms_block` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`id_cms_category` int(10) unsigned NOT NULL,
	`name` VARCHAR(40) NOT NULL,
	`location` tinyint(1) unsigned NOT NULL,
	`position` int(10) unsigned DEFAULT 0 NOT NULL,
	`display_store` tinyint(1) unsigned DEFAULT 1 NOT NULL,
	PRIMARY KEY (`id_cms_block`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_cms_block_lang
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_cms_block_lang`;

CREATE TABLE `djland_cms_block_lang`
(
	`id_cms_block` int(10) unsigned NOT NULL,
	`id_lang` int(10) unsigned NOT NULL,
	`name` VARCHAR(40) DEFAULT '' NOT NULL,
	PRIMARY KEY (`id_cms_block`,`id_lang`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_cms_block_page
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_cms_block_page`;

CREATE TABLE `djland_cms_block_page`
(
	`id_cms_block_page` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`id_cms_block` int(10) unsigned NOT NULL,
	`id_cms` int(10) unsigned NOT NULL,
	`is_category` tinyint(1) unsigned NOT NULL,
	PRIMARY KEY (`id_cms_block_page`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_cms_category
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_cms_category`;

CREATE TABLE `djland_cms_category`
(
	`id_cms_category` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`id_parent` int(10) unsigned NOT NULL,
	`level_depth` tinyint(3) unsigned DEFAULT 0 NOT NULL,
	`active` tinyint(1) unsigned DEFAULT 0 NOT NULL,
	`date_add` DATETIME NOT NULL,
	`date_upd` DATETIME NOT NULL,
	`position` int(10) unsigned DEFAULT 0 NOT NULL,
	PRIMARY KEY (`id_cms_category`),
	INDEX `category_parent` (`id_parent`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_cms_category_lang
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_cms_category_lang`;

CREATE TABLE `djland_cms_category_lang`
(
	`id_cms_category` int(10) unsigned NOT NULL,
	`id_lang` int(10) unsigned NOT NULL,
	`name` VARCHAR(128) NOT NULL,
	`description` TEXT,
	`link_rewrite` VARCHAR(128) NOT NULL,
	`meta_title` VARCHAR(128),
	`meta_keywords` VARCHAR(255),
	`meta_description` VARCHAR(255),
	PRIMARY KEY (`id_cms_category`),
	UNIQUE INDEX `category_lang_index` (`id_cms_category`, `id_lang`),
	INDEX `category_name` (`name`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_cms_lang
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_cms_lang`;

CREATE TABLE `djland_cms_lang`
(
	`id_cms` int(10) unsigned NOT NULL,
	`id_lang` int(10) unsigned NOT NULL,
	`meta_title` VARCHAR(128) NOT NULL,
	`meta_description` VARCHAR(255),
	`meta_keywords` VARCHAR(255),
	`content` LONGTEXT,
	`link_rewrite` VARCHAR(128) NOT NULL,
	PRIMARY KEY (`id_cms`,`id_lang`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_compare_product
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_compare_product`;

CREATE TABLE `djland_compare_product`
(
	`id_compare_product` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`id_product` int(10) unsigned NOT NULL,
	`id_guest` int(10) unsigned NOT NULL,
	`id_customer` int(10) unsigned NOT NULL,
	`date_add` DATETIME NOT NULL,
	`date_upd` DATETIME NOT NULL,
	PRIMARY KEY (`id_compare_product`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_configuration
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_configuration`;

CREATE TABLE `djland_configuration`
(
	`id_configuration` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(32) NOT NULL,
	`value` TEXT,
	`date_add` DATETIME NOT NULL,
	`date_upd` DATETIME NOT NULL,
	PRIMARY KEY (`id_configuration`),
	UNIQUE INDEX `name` (`name`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_configuration_lang
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_configuration_lang`;

CREATE TABLE `djland_configuration_lang`
(
	`id_configuration` int(10) unsigned NOT NULL,
	`id_lang` int(10) unsigned NOT NULL,
	`value` TEXT,
	`date_upd` DATETIME,
	PRIMARY KEY (`id_configuration`,`id_lang`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_connections
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_connections`;

CREATE TABLE `djland_connections`
(
	`id_connections` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`id_guest` int(10) unsigned NOT NULL,
	`id_page` int(10) unsigned NOT NULL,
	`ip_address` BIGINT,
	`date_add` DATETIME NOT NULL,
	`http_referer` VARCHAR(255),
	PRIMARY KEY (`id_connections`),
	INDEX `id_guest` (`id_guest`),
	INDEX `date_add` (`date_add`),
	INDEX `id_page` (`id_page`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_connections_page
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_connections_page`;

CREATE TABLE `djland_connections_page`
(
	`id_connections` int(10) unsigned NOT NULL,
	`id_page` int(10) unsigned NOT NULL,
	`time_start` DATETIME NOT NULL,
	`time_end` DATETIME,
	PRIMARY KEY (`id_connections`,`id_page`,`time_start`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_connections_source
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_connections_source`;

CREATE TABLE `djland_connections_source`
(
	`id_connections_source` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`id_connections` int(10) unsigned NOT NULL,
	`http_referer` VARCHAR(255),
	`request_uri` VARCHAR(255),
	`keywords` VARCHAR(255),
	`date_add` DATETIME NOT NULL,
	PRIMARY KEY (`id_connections_source`),
	INDEX `connections` (`id_connections`),
	INDEX `orderby` (`date_add`),
	INDEX `http_referer` (`http_referer`),
	INDEX `request_uri` (`request_uri`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_contact
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_contact`;

CREATE TABLE `djland_contact`
(
	`id_contact` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`email` VARCHAR(128) NOT NULL,
	`customer_service` TINYINT(1) DEFAULT 0 NOT NULL,
	`position` tinyint(2) unsigned DEFAULT 0 NOT NULL,
	PRIMARY KEY (`id_contact`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_contact_lang
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_contact_lang`;

CREATE TABLE `djland_contact_lang`
(
	`id_contact` int(10) unsigned NOT NULL,
	`id_lang` int(10) unsigned NOT NULL,
	`name` VARCHAR(32) NOT NULL,
	`description` TEXT,
	PRIMARY KEY (`id_contact`),
	UNIQUE INDEX `contact_lang_index` (`id_contact`, `id_lang`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_country
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_country`;

CREATE TABLE `djland_country`
(
	`id_country` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`id_zone` int(10) unsigned NOT NULL,
	`id_currency` int(10) unsigned DEFAULT 0 NOT NULL,
	`iso_code` VARCHAR(3) NOT NULL,
	`call_prefix` INTEGER(10) DEFAULT 0 NOT NULL,
	`active` tinyint(1) unsigned DEFAULT 0 NOT NULL,
	`contains_states` TINYINT(1) DEFAULT 0 NOT NULL,
	`need_identification_number` TINYINT(1) DEFAULT 0 NOT NULL,
	`need_zip_code` TINYINT(1) DEFAULT 1 NOT NULL,
	`zip_code_format` VARCHAR(12) DEFAULT '' NOT NULL,
	`display_tax_label` TINYINT(1) NOT NULL,
	PRIMARY KEY (`id_country`),
	INDEX `country_iso_code` (`iso_code`),
	INDEX `country_` (`id_zone`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_country_lang
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_country_lang`;

CREATE TABLE `djland_country_lang`
(
	`id_country` int(10) unsigned NOT NULL,
	`id_lang` int(10) unsigned NOT NULL,
	`name` VARCHAR(64) NOT NULL,
	PRIMARY KEY (`id_country`),
	UNIQUE INDEX `country_lang_index` (`id_country`, `id_lang`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_county
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_county`;

CREATE TABLE `djland_county`
(
	`id_county` INTEGER NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(64) NOT NULL,
	`id_state` INTEGER NOT NULL,
	`active` TINYINT(1) NOT NULL,
	PRIMARY KEY (`id_county`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_county_zip_code
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_county_zip_code`;

CREATE TABLE `djland_county_zip_code`
(
	`id_county` INTEGER NOT NULL,
	`from_zip_code` INTEGER NOT NULL,
	`to_zip_code` INTEGER NOT NULL,
	PRIMARY KEY (`id_county`,`from_zip_code`,`to_zip_code`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_currency
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_currency`;

CREATE TABLE `djland_currency`
(
	`id_currency` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(32) NOT NULL,
	`iso_code` VARCHAR(3) DEFAULT '0' NOT NULL,
	`iso_code_num` VARCHAR(3) DEFAULT '0' NOT NULL,
	`sign` VARCHAR(8) NOT NULL,
	`blank` tinyint(1) unsigned DEFAULT 0 NOT NULL,
	`format` tinyint(1) unsigned DEFAULT 0 NOT NULL,
	`decimals` tinyint(1) unsigned DEFAULT 1 NOT NULL,
	`conversion_rate` DECIMAL(13,6) NOT NULL,
	`deleted` tinyint(1) unsigned DEFAULT 0 NOT NULL,
	`active` tinyint(1) unsigned DEFAULT 1 NOT NULL,
	PRIMARY KEY (`id_currency`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_customer
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_customer`;

CREATE TABLE `djland_customer`
(
	`id_customer` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`id_gender` int(10) unsigned NOT NULL,
	`id_default_group` int(10) unsigned DEFAULT 1 NOT NULL,
	`firstname` VARCHAR(32) NOT NULL,
	`lastname` VARCHAR(32) NOT NULL,
	`email` VARCHAR(128) NOT NULL,
	`passwd` VARCHAR(32) NOT NULL,
	`last_passwd_gen` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`birthday` DATE,
	`newsletter` tinyint(1) unsigned DEFAULT 0 NOT NULL,
	`ip_registration_newsletter` VARCHAR(15),
	`newsletter_date_add` DATETIME,
	`optin` tinyint(1) unsigned DEFAULT 0 NOT NULL,
	`secure_key` VARCHAR(32) DEFAULT '-1' NOT NULL,
	`note` TEXT,
	`active` tinyint(1) unsigned DEFAULT 0 NOT NULL,
	`is_guest` TINYINT(1) DEFAULT 0 NOT NULL,
	`deleted` TINYINT(1) DEFAULT 0 NOT NULL,
	`date_add` DATETIME NOT NULL,
	`date_upd` DATETIME NOT NULL,
	PRIMARY KEY (`id_customer`),
	INDEX `customer_email` (`email`),
	INDEX `customer_login` (`email`, `passwd`),
	INDEX `id_customer_passwd` (`id_customer`, `passwd`),
	INDEX `id_gender` (`id_gender`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_customer_group
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_customer_group`;

CREATE TABLE `djland_customer_group`
(
	`id_customer` int(10) unsigned NOT NULL,
	`id_group` int(10) unsigned NOT NULL,
	PRIMARY KEY (`id_customer`,`id_group`),
	INDEX `customer_login` (`id_group`),
	INDEX `id_customer` (`id_customer`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_customer_message
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_customer_message`;

CREATE TABLE `djland_customer_message`
(
	`id_customer_message` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`id_customer_thread` INTEGER,
	`id_employee` int(10) unsigned,
	`message` TEXT NOT NULL,
	`file_name` VARCHAR(18),
	`ip_address` INTEGER,
	`user_agent` VARCHAR(128),
	`date_add` DATETIME NOT NULL,
	PRIMARY KEY (`id_customer_message`),
	INDEX `id_customer_thread` (`id_customer_thread`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_customer_thread
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_customer_thread`;

CREATE TABLE `djland_customer_thread`
(
	`id_customer_thread` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`id_lang` int(10) unsigned NOT NULL,
	`id_contact` int(10) unsigned NOT NULL,
	`id_customer` int(10) unsigned,
	`id_order` int(10) unsigned,
	`id_product` int(10) unsigned,
	`status` enum('open','closed','pending1','pending2') DEFAULT 'open' NOT NULL,
	`email` VARCHAR(128) NOT NULL,
	`token` VARCHAR(12),
	`date_add` DATETIME NOT NULL,
	`date_upd` DATETIME NOT NULL,
	PRIMARY KEY (`id_customer_thread`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_customization
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_customization`;

CREATE TABLE `djland_customization`
(
	`id_customization` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`id_product_attribute` int(10) unsigned DEFAULT 0 NOT NULL,
	`id_cart` int(10) unsigned NOT NULL,
	`id_product` INTEGER(10) NOT NULL,
	`quantity` INTEGER(10) NOT NULL,
	`quantity_refunded` INTEGER DEFAULT 0 NOT NULL,
	`quantity_returned` INTEGER DEFAULT 0 NOT NULL,
	PRIMARY KEY (`id_customization`,`id_cart`,`id_product`),
	INDEX `id_product_attribute` (`id_product_attribute`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_customization_field
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_customization_field`;

CREATE TABLE `djland_customization_field`
(
	`id_customization_field` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`id_product` int(10) unsigned NOT NULL,
	`type` TINYINT(1) NOT NULL,
	`required` TINYINT(1) NOT NULL,
	PRIMARY KEY (`id_customization_field`),
	INDEX `id_product` (`id_product`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_customization_field_lang
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_customization_field_lang`;

CREATE TABLE `djland_customization_field_lang`
(
	`id_customization_field` int(10) unsigned NOT NULL,
	`id_lang` int(10) unsigned NOT NULL,
	`name` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`id_customization_field`,`id_lang`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_customized_data
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_customized_data`;

CREATE TABLE `djland_customized_data`
(
	`id_customization` int(10) unsigned NOT NULL,
	`type` TINYINT(1) NOT NULL,
	`index` INTEGER(3) NOT NULL,
	`value` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`id_customization`,`type`,`index`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_date_range
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_date_range`;

CREATE TABLE `djland_date_range`
(
	`id_date_range` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`time_start` DATETIME NOT NULL,
	`time_end` DATETIME NOT NULL,
	PRIMARY KEY (`id_date_range`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_delivery
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_delivery`;

CREATE TABLE `djland_delivery`
(
	`id_delivery` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`id_carrier` int(10) unsigned NOT NULL,
	`id_range_price` int(10) unsigned,
	`id_range_weight` int(10) unsigned,
	`id_zone` int(10) unsigned NOT NULL,
	`price` DECIMAL(17,2) NOT NULL,
	PRIMARY KEY (`id_delivery`),
	INDEX `id_zone` (`id_zone`),
	INDEX `id_carrier` (`id_carrier`, `id_zone`),
	INDEX `id_range_price` (`id_range_price`),
	INDEX `id_range_weight` (`id_range_weight`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_discount
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_discount`;

CREATE TABLE `djland_discount`
(
	`id_discount` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`id_discount_type` int(10) unsigned NOT NULL,
	`behavior_not_exhausted` TINYINT(3) DEFAULT 1,
	`id_customer` int(10) unsigned NOT NULL,
	`id_group` int(10) unsigned DEFAULT 0 NOT NULL,
	`id_currency` int(10) unsigned DEFAULT 0 NOT NULL,
	`name` VARCHAR(32) NOT NULL,
	`value` DECIMAL(17,2) DEFAULT 0.00 NOT NULL,
	`quantity` int(10) unsigned DEFAULT 0 NOT NULL,
	`quantity_per_user` int(10) unsigned DEFAULT 1 NOT NULL,
	`cumulable` tinyint(1) unsigned DEFAULT 0 NOT NULL,
	`cumulable_reduction` tinyint(1) unsigned DEFAULT 0 NOT NULL,
	`date_from` DATETIME NOT NULL,
	`date_to` DATETIME NOT NULL,
	`minimal` DECIMAL(17,2),
	`active` tinyint(1) unsigned DEFAULT 0 NOT NULL,
	`cart_display` tinyint(1) unsigned DEFAULT 0 NOT NULL,
	`date_add` DATETIME NOT NULL,
	`date_upd` DATETIME NOT NULL,
	PRIMARY KEY (`id_discount`),
	INDEX `discount_name` (`name`),
	INDEX `discount_customer` (`id_customer`),
	INDEX `id_discount_type` (`id_discount_type`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_discount_category
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_discount_category`;

CREATE TABLE `djland_discount_category`
(
	`id_category` int(11) unsigned NOT NULL,
	`id_discount` int(11) unsigned NOT NULL,
	PRIMARY KEY (`id_category`,`id_discount`),
	INDEX `discount` (`id_discount`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_discount_lang
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_discount_lang`;

CREATE TABLE `djland_discount_lang`
(
	`id_discount` int(10) unsigned NOT NULL,
	`id_lang` int(10) unsigned NOT NULL,
	`description` TEXT,
	PRIMARY KEY (`id_discount`,`id_lang`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_discount_type
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_discount_type`;

CREATE TABLE `djland_discount_type`
(
	`id_discount_type` int(10) unsigned NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id_discount_type`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_discount_type_lang
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_discount_type_lang`;

CREATE TABLE `djland_discount_type_lang`
(
	`id_discount_type` int(10) unsigned NOT NULL,
	`id_lang` int(10) unsigned NOT NULL,
	`name` VARCHAR(64) NOT NULL,
	PRIMARY KEY (`id_discount_type`,`id_lang`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_editorial
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_editorial`;

CREATE TABLE `djland_editorial`
(
	`id_editorial` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`body_home_logo_link` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`id_editorial`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_editorial_lang
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_editorial_lang`;

CREATE TABLE `djland_editorial_lang`
(
	`id_editorial` int(10) unsigned NOT NULL,
	`id_lang` int(10) unsigned NOT NULL,
	`body_title` VARCHAR(255) NOT NULL,
	`body_subheading` VARCHAR(255) NOT NULL,
	`body_paragraph` TEXT NOT NULL,
	`body_logo_subheading` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`id_editorial`,`id_lang`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_employee
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_employee`;

CREATE TABLE `djland_employee`
(
	`id_employee` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`id_profile` int(10) unsigned NOT NULL,
	`id_lang` int(10) unsigned DEFAULT 0 NOT NULL,
	`lastname` VARCHAR(32) NOT NULL,
	`firstname` VARCHAR(32) NOT NULL,
	`email` VARCHAR(128) NOT NULL,
	`passwd` VARCHAR(32) NOT NULL,
	`last_passwd_gen` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`stats_date_from` DATE,
	`stats_date_to` DATE,
	`bo_color` VARCHAR(32),
	`bo_theme` VARCHAR(32),
	`bo_uimode` enum('hover','click') DEFAULT 'click',
	`active` tinyint(1) unsigned DEFAULT 0 NOT NULL,
	PRIMARY KEY (`id_employee`),
	INDEX `employee_login` (`email`, `passwd`),
	INDEX `id_employee_passwd` (`id_employee`, `passwd`),
	INDEX `id_profile` (`id_profile`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_feature
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_feature`;

CREATE TABLE `djland_feature`
(
	`id_feature` int(10) unsigned NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id_feature`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_feature_lang
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_feature_lang`;

CREATE TABLE `djland_feature_lang`
(
	`id_feature` int(10) unsigned NOT NULL,
	`id_lang` int(10) unsigned NOT NULL,
	`name` VARCHAR(128),
	PRIMARY KEY (`id_feature`,`id_lang`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_feature_product
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_feature_product`;

CREATE TABLE `djland_feature_product`
(
	`id_feature` int(10) unsigned NOT NULL,
	`id_product` int(10) unsigned NOT NULL,
	`id_feature_value` int(10) unsigned NOT NULL,
	PRIMARY KEY (`id_feature`,`id_product`),
	INDEX `id_feature_value` (`id_feature_value`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_feature_value
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_feature_value`;

CREATE TABLE `djland_feature_value`
(
	`id_feature_value` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`id_feature` int(10) unsigned NOT NULL,
	`custom` tinyint(3) unsigned,
	PRIMARY KEY (`id_feature_value`),
	INDEX `feature` (`id_feature`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_feature_value_lang
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_feature_value_lang`;

CREATE TABLE `djland_feature_value_lang`
(
	`id_feature_value` int(10) unsigned NOT NULL,
	`id_lang` int(10) unsigned NOT NULL,
	`value` VARCHAR(255),
	PRIMARY KEY (`id_feature_value`,`id_lang`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_group
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_group`;

CREATE TABLE `djland_group`
(
	`id_group` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`reduction` DECIMAL(17,2) DEFAULT 0.00 NOT NULL,
	`price_display_method` TINYINT DEFAULT 0 NOT NULL,
	`date_add` DATETIME NOT NULL,
	`date_upd` DATETIME NOT NULL,
	PRIMARY KEY (`id_group`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_group_lang
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_group_lang`;

CREATE TABLE `djland_group_lang`
(
	`id_group` int(10) unsigned NOT NULL,
	`id_lang` int(10) unsigned NOT NULL,
	`name` VARCHAR(32) NOT NULL,
	PRIMARY KEY (`id_group`),
	UNIQUE INDEX `attribute_lang_index` (`id_group`, `id_lang`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_group_reduction
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_group_reduction`;

CREATE TABLE `djland_group_reduction`
(
	`id_group_reduction` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
	`id_group` int(10) unsigned NOT NULL,
	`id_category` int(10) unsigned NOT NULL,
	`reduction` DECIMAL(4,3) NOT NULL,
	PRIMARY KEY (`id_group_reduction`),
	UNIQUE INDEX `id_group` (`id_group`, `id_category`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_guest
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_guest`;

CREATE TABLE `djland_guest`
(
	`id_guest` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`id_operating_system` int(10) unsigned,
	`id_web_browser` int(10) unsigned,
	`id_customer` int(10) unsigned,
	`javascript` TINYINT(1) DEFAULT 0,
	`screen_resolution_x` smallint(5) unsigned,
	`screen_resolution_y` smallint(5) unsigned,
	`screen_color` tinyint(3) unsigned,
	`sun_java` TINYINT(1),
	`adobe_flash` TINYINT(1),
	`adobe_director` TINYINT(1),
	`apple_quicktime` TINYINT(1),
	`real_player` TINYINT(1),
	`windows_media` TINYINT(1),
	`accept_language` VARCHAR(8),
	PRIMARY KEY (`id_guest`),
	INDEX `id_customer` (`id_customer`),
	INDEX `id_operating_system` (`id_operating_system`),
	INDEX `id_web_browser` (`id_web_browser`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_help_access
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_help_access`;

CREATE TABLE `djland_help_access`
(
	`id_help_access` INTEGER NOT NULL AUTO_INCREMENT,
	`label` VARCHAR(45) NOT NULL,
	`version` VARCHAR(8) NOT NULL,
	PRIMARY KEY (`id_help_access`),
	UNIQUE INDEX `label` (`label`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_hook
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_hook`;

CREATE TABLE `djland_hook`
(
	`id_hook` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(64) NOT NULL,
	`title` VARCHAR(64) NOT NULL,
	`description` TEXT,
	`position` TINYINT(1) DEFAULT 1 NOT NULL,
	`live_edit` TINYINT(1) DEFAULT 0 NOT NULL,
	PRIMARY KEY (`id_hook`),
	UNIQUE INDEX `hook_name` (`name`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_hook_module
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_hook_module`;

CREATE TABLE `djland_hook_module`
(
	`id_module` int(10) unsigned NOT NULL,
	`id_hook` int(10) unsigned NOT NULL,
	`position` tinyint(2) unsigned NOT NULL,
	PRIMARY KEY (`id_module`,`id_hook`),
	INDEX `id_hook` (`id_hook`),
	INDEX `id_module` (`id_module`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_hook_module_exceptions
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_hook_module_exceptions`;

CREATE TABLE `djland_hook_module_exceptions`
(
	`id_hook_module_exceptions` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`id_module` int(10) unsigned NOT NULL,
	`id_hook` int(10) unsigned NOT NULL,
	`file_name` VARCHAR(255),
	PRIMARY KEY (`id_hook_module_exceptions`),
	INDEX `id_module` (`id_module`),
	INDEX `id_hook` (`id_hook`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_image
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_image`;

CREATE TABLE `djland_image`
(
	`id_image` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`id_product` int(10) unsigned NOT NULL,
	`position` smallint(2) unsigned DEFAULT 0 NOT NULL,
	`cover` tinyint(1) unsigned DEFAULT 0 NOT NULL,
	PRIMARY KEY (`id_image`),
	UNIQUE INDEX `product_position` (`id_product`, `position`),
	INDEX `image_product` (`id_product`),
	INDEX `id_product_cover` (`id_product`, `cover`),
	CONSTRAINT `djland_image_FK_1`
		FOREIGN KEY (`id_product`)
		REFERENCES `djland_product` (`id_product`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_image_lang
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_image_lang`;

CREATE TABLE `djland_image_lang`
(
	`id_image` int(10) unsigned NOT NULL,
	`id_lang` int(10) unsigned NOT NULL,
	`legend` VARCHAR(128),
	PRIMARY KEY (`id_image`),
	UNIQUE INDEX `image_lang_index` (`id_image`, `id_lang`),
	INDEX `id_image` (`id_image`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_image_type
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_image_type`;

CREATE TABLE `djland_image_type`
(
	`id_image_type` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(16) NOT NULL,
	`width` int(10) unsigned NOT NULL,
	`height` int(10) unsigned NOT NULL,
	`products` TINYINT(1) DEFAULT 1 NOT NULL,
	`categories` TINYINT(1) DEFAULT 1 NOT NULL,
	`manufacturers` TINYINT(1) DEFAULT 1 NOT NULL,
	`suppliers` TINYINT(1) DEFAULT 1 NOT NULL,
	`scenes` TINYINT(1) DEFAULT 1 NOT NULL,
	`stores` TINYINT(1) DEFAULT 1 NOT NULL,
	PRIMARY KEY (`id_image_type`),
	INDEX `image_type_name` (`name`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_import_match
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_import_match`;

CREATE TABLE `djland_import_match`
(
	`id_import_match` INTEGER(10) NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(32) NOT NULL,
	`match` TEXT NOT NULL,
	`skip` INTEGER(2) NOT NULL,
	PRIMARY KEY (`id_import_match`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_lang
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_lang`;

CREATE TABLE `djland_lang`
(
	`id_lang` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(32) NOT NULL,
	`active` tinyint(3) unsigned DEFAULT 0 NOT NULL,
	`iso_code` CHAR(2) NOT NULL,
	`language_code` CHAR(5) NOT NULL,
	`is_rtl` TINYINT(1) DEFAULT 0 NOT NULL,
	PRIMARY KEY (`id_lang`),
	INDEX `lang_iso_code` (`iso_code`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_log
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_log`;

CREATE TABLE `djland_log`
(
	`id_log` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`severity` TINYINT(1) NOT NULL,
	`error_code` INTEGER,
	`message` TEXT NOT NULL,
	`object_type` VARCHAR(32),
	`object_id` int(10) unsigned,
	`date_add` DATETIME NOT NULL,
	`date_upd` DATETIME NOT NULL,
	PRIMARY KEY (`id_log`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_manufacturer
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_manufacturer`;

CREATE TABLE `djland_manufacturer`
(
	`id_manufacturer` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(64) NOT NULL,
	`date_add` DATETIME NOT NULL,
	`date_upd` DATETIME NOT NULL,
	`active` TINYINT(1) DEFAULT 0 NOT NULL,
	PRIMARY KEY (`id_manufacturer`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_manufacturer_lang
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_manufacturer_lang`;

CREATE TABLE `djland_manufacturer_lang`
(
	`id_manufacturer` int(10) unsigned NOT NULL,
	`id_lang` int(10) unsigned NOT NULL,
	`description` TEXT,
	`short_description` VARCHAR(254),
	`meta_title` VARCHAR(128),
	`meta_keywords` VARCHAR(255),
	`meta_description` VARCHAR(255),
	PRIMARY KEY (`id_manufacturer`,`id_lang`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_memcached_servers
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_memcached_servers`;

CREATE TABLE `djland_memcached_servers`
(
	`id_memcached_server` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`ip` VARCHAR(254) NOT NULL,
	`port` int(11) unsigned NOT NULL,
	`weight` int(11) unsigned NOT NULL,
	PRIMARY KEY (`id_memcached_server`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_message
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_message`;

CREATE TABLE `djland_message`
(
	`id_message` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`id_cart` int(10) unsigned,
	`id_customer` int(10) unsigned NOT NULL,
	`id_employee` int(10) unsigned,
	`id_order` int(10) unsigned NOT NULL,
	`message` TEXT NOT NULL,
	`private` tinyint(1) unsigned DEFAULT 1 NOT NULL,
	`date_add` DATETIME NOT NULL,
	PRIMARY KEY (`id_message`),
	INDEX `message_order` (`id_order`),
	INDEX `id_cart` (`id_cart`),
	INDEX `id_customer` (`id_customer`),
	INDEX `id_employee` (`id_employee`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_message_readed
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_message_readed`;

CREATE TABLE `djland_message_readed`
(
	`id_message` int(10) unsigned NOT NULL,
	`id_employee` int(10) unsigned NOT NULL,
	`date_add` DATETIME NOT NULL,
	PRIMARY KEY (`id_message`,`id_employee`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_meta
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_meta`;

CREATE TABLE `djland_meta`
(
	`id_meta` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`page` VARCHAR(64) NOT NULL,
	PRIMARY KEY (`id_meta`),
	INDEX `meta_name` (`page`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_meta_lang
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_meta_lang`;

CREATE TABLE `djland_meta_lang`
(
	`id_meta` int(10) unsigned NOT NULL,
	`id_lang` int(10) unsigned NOT NULL,
	`title` VARCHAR(128),
	`description` VARCHAR(255),
	`keywords` VARCHAR(255),
	`url_rewrite` VARCHAR(254) NOT NULL,
	PRIMARY KEY (`id_meta`,`id_lang`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_module
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_module`;

CREATE TABLE `djland_module`
(
	`id_module` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(64) NOT NULL,
	`active` tinyint(1) unsigned DEFAULT 0 NOT NULL,
	PRIMARY KEY (`id_module`),
	INDEX `name` (`name`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_module_country
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_module_country`;

CREATE TABLE `djland_module_country`
(
	`id_module` int(10) unsigned NOT NULL,
	`id_country` int(10) unsigned NOT NULL,
	PRIMARY KEY (`id_module`,`id_country`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_module_currency
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_module_currency`;

CREATE TABLE `djland_module_currency`
(
	`id_module` int(10) unsigned NOT NULL,
	`id_currency` INTEGER NOT NULL,
	PRIMARY KEY (`id_module`,`id_currency`),
	INDEX `id_module` (`id_module`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_module_group
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_module_group`;

CREATE TABLE `djland_module_group`
(
	`id_module` int(10) unsigned NOT NULL,
	`id_group` int(11) unsigned NOT NULL,
	PRIMARY KEY (`id_module`,`id_group`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_operating_system
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_operating_system`;

CREATE TABLE `djland_operating_system`
(
	`id_operating_system` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(64),
	PRIMARY KEY (`id_operating_system`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_order_detail
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_order_detail`;

CREATE TABLE `djland_order_detail`
(
	`id_order_detail` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`id_order` int(10) unsigned NOT NULL,
	`product_id` int(10) unsigned NOT NULL,
	`product_attribute_id` int(10) unsigned,
	`product_name` VARCHAR(255) NOT NULL,
	`product_quantity` int(10) unsigned DEFAULT 0 NOT NULL,
	`product_quantity_in_stock` INTEGER(10) DEFAULT 0 NOT NULL,
	`product_quantity_refunded` int(10) unsigned DEFAULT 0 NOT NULL,
	`product_quantity_return` int(10) unsigned DEFAULT 0 NOT NULL,
	`product_quantity_reinjected` int(10) unsigned DEFAULT 0 NOT NULL,
	`product_price` DECIMAL(20,6) DEFAULT 0.000000 NOT NULL,
	`reduction_percent` DECIMAL DEFAULT 0.00 NOT NULL,
	`reduction_amount` DECIMAL(20,6) DEFAULT 0.000000 NOT NULL,
	`group_reduction` DECIMAL DEFAULT 0.00 NOT NULL,
	`product_quantity_discount` DECIMAL(20,6) DEFAULT 0.000000 NOT NULL,
	`product_ean13` VARCHAR(13),
	`product_upc` VARCHAR(12),
	`product_reference` VARCHAR(32),
	`product_supplier_reference` VARCHAR(32),
	`product_weight` FLOAT NOT NULL,
	`tax_name` VARCHAR(16) NOT NULL,
	`tax_rate` DECIMAL DEFAULT 0.000 NOT NULL,
	`ecotax` DECIMAL(21,6) DEFAULT 0.000000 NOT NULL,
	`ecotax_tax_rate` DECIMAL(5,3) DEFAULT 0.000 NOT NULL,
	`discount_quantity_applied` TINYINT(1) DEFAULT 0 NOT NULL,
	`download_hash` VARCHAR(255),
	`download_nb` int(10) unsigned DEFAULT 0,
	`download_deadline` DATETIME DEFAULT '0000-00-00 00:00:00',
	PRIMARY KEY (`id_order_detail`),
	INDEX `order_detail_order` (`id_order`),
	INDEX `product_id` (`product_id`),
	INDEX `product_attribute_id` (`product_attribute_id`),
	INDEX `id_order_id_order_detail` (`id_order`, `id_order_detail`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_order_discount
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_order_discount`;

CREATE TABLE `djland_order_discount`
(
	`id_order_discount` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`id_order` int(10) unsigned NOT NULL,
	`id_discount` int(10) unsigned NOT NULL,
	`name` VARCHAR(32) NOT NULL,
	`value` DECIMAL(17,2) DEFAULT 0.00 NOT NULL,
	PRIMARY KEY (`id_order_discount`),
	INDEX `order_discount_order` (`id_order`),
	INDEX `id_discount` (`id_discount`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_order_history
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_order_history`;

CREATE TABLE `djland_order_history`
(
	`id_order_history` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`id_employee` int(10) unsigned NOT NULL,
	`id_order` int(10) unsigned NOT NULL,
	`id_order_state` int(10) unsigned NOT NULL,
	`date_add` DATETIME NOT NULL,
	PRIMARY KEY (`id_order_history`),
	INDEX `order_history_order` (`id_order`),
	INDEX `id_employee` (`id_employee`),
	INDEX `id_order_state` (`id_order_state`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_order_message
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_order_message`;

CREATE TABLE `djland_order_message`
(
	`id_order_message` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`date_add` DATETIME NOT NULL,
	PRIMARY KEY (`id_order_message`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_order_message_lang
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_order_message_lang`;

CREATE TABLE `djland_order_message_lang`
(
	`id_order_message` int(10) unsigned NOT NULL,
	`id_lang` int(10) unsigned NOT NULL,
	`name` VARCHAR(128) NOT NULL,
	`message` TEXT NOT NULL,
	PRIMARY KEY (`id_order_message`,`id_lang`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_order_return
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_order_return`;

CREATE TABLE `djland_order_return`
(
	`id_order_return` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`id_customer` int(10) unsigned NOT NULL,
	`id_order` int(10) unsigned NOT NULL,
	`state` tinyint(1) unsigned DEFAULT 1 NOT NULL,
	`question` TEXT NOT NULL,
	`date_add` DATETIME NOT NULL,
	`date_upd` DATETIME NOT NULL,
	PRIMARY KEY (`id_order_return`),
	INDEX `order_return_customer` (`id_customer`),
	INDEX `id_order` (`id_order`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_order_return_detail
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_order_return_detail`;

CREATE TABLE `djland_order_return_detail`
(
	`id_order_return` int(10) unsigned NOT NULL,
	`id_order_detail` int(10) unsigned NOT NULL,
	`id_customization` int(10) unsigned DEFAULT 0 NOT NULL,
	`product_quantity` int(10) unsigned DEFAULT 0 NOT NULL,
	PRIMARY KEY (`id_order_return`,`id_order_detail`,`id_customization`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_order_return_state
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_order_return_state`;

CREATE TABLE `djland_order_return_state`
(
	`id_order_return_state` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`color` VARCHAR(32),
	PRIMARY KEY (`id_order_return_state`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_order_return_state_lang
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_order_return_state_lang`;

CREATE TABLE `djland_order_return_state_lang`
(
	`id_order_return_state` int(10) unsigned NOT NULL,
	`id_lang` int(10) unsigned NOT NULL,
	`name` VARCHAR(64) NOT NULL,
	PRIMARY KEY (`id_order_return_state`),
	UNIQUE INDEX `order_state_lang_index` (`id_order_return_state`, `id_lang`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_order_slip
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_order_slip`;

CREATE TABLE `djland_order_slip`
(
	`id_order_slip` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`conversion_rate` DECIMAL(13,6) DEFAULT 1.000000 NOT NULL,
	`id_customer` int(10) unsigned NOT NULL,
	`id_order` int(10) unsigned NOT NULL,
	`shipping_cost` tinyint(3) unsigned DEFAULT 0 NOT NULL,
	`date_add` DATETIME NOT NULL,
	`date_upd` DATETIME NOT NULL,
	PRIMARY KEY (`id_order_slip`),
	INDEX `order_slip_customer` (`id_customer`),
	INDEX `id_order` (`id_order`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_order_slip_detail
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_order_slip_detail`;

CREATE TABLE `djland_order_slip_detail`
(
	`id_order_slip` int(10) unsigned NOT NULL,
	`id_order_detail` int(10) unsigned NOT NULL,
	`product_quantity` int(10) unsigned DEFAULT 0 NOT NULL,
	PRIMARY KEY (`id_order_slip`,`id_order_detail`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_order_state
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_order_state`;

CREATE TABLE `djland_order_state`
(
	`id_order_state` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`invoice` tinyint(1) unsigned DEFAULT 0,
	`send_email` tinyint(1) unsigned DEFAULT 0 NOT NULL,
	`color` VARCHAR(32),
	`unremovable` tinyint(1) unsigned NOT NULL,
	`hidden` tinyint(1) unsigned DEFAULT 0 NOT NULL,
	`logable` TINYINT(1) DEFAULT 0 NOT NULL,
	`delivery` tinyint(1) unsigned DEFAULT 0 NOT NULL,
	PRIMARY KEY (`id_order_state`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_order_state_lang
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_order_state_lang`;

CREATE TABLE `djland_order_state_lang`
(
	`id_order_state` int(10) unsigned NOT NULL,
	`id_lang` int(10) unsigned NOT NULL,
	`name` VARCHAR(64) NOT NULL,
	`template` VARCHAR(64) NOT NULL,
	PRIMARY KEY (`id_order_state`),
	UNIQUE INDEX `order_state_lang_index` (`id_order_state`, `id_lang`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_orders
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_orders`;

CREATE TABLE `djland_orders`
(
	`id_order` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`id_carrier` int(10) unsigned NOT NULL,
	`id_lang` int(10) unsigned NOT NULL,
	`id_customer` int(10) unsigned NOT NULL,
	`id_cart` int(10) unsigned NOT NULL,
	`id_currency` int(10) unsigned NOT NULL,
	`id_address_delivery` int(10) unsigned NOT NULL,
	`id_address_invoice` int(10) unsigned NOT NULL,
	`secure_key` VARCHAR(32) DEFAULT '-1' NOT NULL,
	`payment` VARCHAR(255) NOT NULL,
	`conversion_rate` DECIMAL(13,6) DEFAULT 1.000000 NOT NULL,
	`module` VARCHAR(255),
	`recyclable` tinyint(1) unsigned DEFAULT 0 NOT NULL,
	`gift` tinyint(1) unsigned DEFAULT 0 NOT NULL,
	`gift_message` TEXT,
	`shipping_number` VARCHAR(32),
	`total_discounts` DECIMAL(17,2) DEFAULT 0.00 NOT NULL,
	`total_paid` DECIMAL(17,2) DEFAULT 0.00 NOT NULL,
	`total_paid_real` DECIMAL(17,2) DEFAULT 0.00 NOT NULL,
	`total_products` DECIMAL(17,2) DEFAULT 0.00 NOT NULL,
	`total_products_wt` DECIMAL(17,2) DEFAULT 0.00 NOT NULL,
	`total_shipping` DECIMAL(17,2) DEFAULT 0.00 NOT NULL,
	`carrier_tax_rate` DECIMAL DEFAULT 0.000 NOT NULL,
	`total_wrapping` DECIMAL(17,2) DEFAULT 0.00 NOT NULL,
	`invoice_number` int(10) unsigned DEFAULT 0 NOT NULL,
	`delivery_number` int(10) unsigned DEFAULT 0 NOT NULL,
	`invoice_date` DATETIME NOT NULL,
	`delivery_date` DATETIME NOT NULL,
	`valid` int(1) unsigned DEFAULT 0 NOT NULL,
	`date_add` DATETIME NOT NULL,
	`date_upd` DATETIME NOT NULL,
	PRIMARY KEY (`id_order`),
	INDEX `id_customer` (`id_customer`),
	INDEX `id_cart` (`id_cart`),
	INDEX `invoice_number` (`invoice_number`),
	INDEX `id_carrier` (`id_carrier`),
	INDEX `id_lang` (`id_lang`),
	INDEX `id_currency` (`id_currency`),
	INDEX `id_address_delivery` (`id_address_delivery`),
	INDEX `id_address_invoice` (`id_address_invoice`),
	INDEX `date_add` (`date_add`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_pack
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_pack`;

CREATE TABLE `djland_pack`
(
	`id_product_pack` int(10) unsigned NOT NULL,
	`id_product_item` int(10) unsigned NOT NULL,
	`quantity` int(10) unsigned DEFAULT 1 NOT NULL,
	PRIMARY KEY (`id_product_pack`,`id_product_item`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_page
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_page`;

CREATE TABLE `djland_page`
(
	`id_page` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`id_page_type` int(10) unsigned NOT NULL,
	`id_object` int(10) unsigned,
	PRIMARY KEY (`id_page`),
	INDEX `id_page_type` (`id_page_type`),
	INDEX `id_object` (`id_object`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_page_type
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_page_type`;

CREATE TABLE `djland_page_type`
(
	`id_page_type` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`id_page_type`),
	INDEX `name` (`name`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_page_viewed
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_page_viewed`;

CREATE TABLE `djland_page_viewed`
(
	`id_page` int(10) unsigned NOT NULL,
	`id_date_range` int(10) unsigned NOT NULL,
	`counter` int(10) unsigned NOT NULL,
	PRIMARY KEY (`id_page`,`id_date_range`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_pagenotfound
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_pagenotfound`;

CREATE TABLE `djland_pagenotfound`
(
	`id_pagenotfound` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`request_uri` VARCHAR(256) NOT NULL,
	`http_referer` VARCHAR(256) NOT NULL,
	`date_add` DATETIME NOT NULL,
	PRIMARY KEY (`id_pagenotfound`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_payment_cc
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_payment_cc`;

CREATE TABLE `djland_payment_cc`
(
	`id_payment_cc` INTEGER NOT NULL AUTO_INCREMENT,
	`id_order` int(10) unsigned,
	`id_currency` int(10) unsigned NOT NULL,
	`amount` DECIMAL NOT NULL,
	`transaction_id` VARCHAR(254),
	`card_number` VARCHAR(254),
	`card_brand` VARCHAR(254),
	`card_expiration` CHAR(7),
	`card_holder` VARCHAR(254),
	`date_add` DATETIME NOT NULL,
	PRIMARY KEY (`id_payment_cc`),
	INDEX `id_order` (`id_order`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_product
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_product`;

CREATE TABLE `djland_product`
(
	`id_product` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`id_supplier` int(10) unsigned,
	`id_manufacturer` int(10) unsigned,
	`id_tax_rules_group` int(10) unsigned NOT NULL,
	`id_category_default` int(10) unsigned,
	`id_color_default` int(10) unsigned,
	`on_sale` tinyint(1) unsigned DEFAULT 0 NOT NULL,
	`online_only` tinyint(1) unsigned DEFAULT 0 NOT NULL,
	`ean13` VARCHAR(13),
	`upc` VARCHAR(12),
	`ecotax` DECIMAL(17,6) DEFAULT 0.000000 NOT NULL,
	`quantity` INTEGER(10) DEFAULT 0 NOT NULL,
	`minimal_quantity` int(10) unsigned DEFAULT 1 NOT NULL,
	`price` DECIMAL(20,6) DEFAULT 0.000000 NOT NULL,
	`wholesale_price` DECIMAL(20,6) DEFAULT 0.000000 NOT NULL,
	`unity` VARCHAR(255),
	`unit_price_ratio` DECIMAL(20,6) DEFAULT 0.000000 NOT NULL,
	`additional_shipping_cost` DECIMAL(20,2) DEFAULT 0.00 NOT NULL,
	`reference` VARCHAR(32),
	`supplier_reference` VARCHAR(32),
	`location` VARCHAR(64),
	`width` FLOAT DEFAULT 0 NOT NULL,
	`height` FLOAT DEFAULT 0 NOT NULL,
	`depth` FLOAT DEFAULT 0 NOT NULL,
	`weight` FLOAT DEFAULT 0 NOT NULL,
	`out_of_stock` int(10) unsigned DEFAULT 2 NOT NULL,
	`quantity_discount` TINYINT(1) DEFAULT 0,
	`customizable` TINYINT(2) DEFAULT 0 NOT NULL,
	`uploadable_files` TINYINT DEFAULT 0 NOT NULL,
	`text_fields` TINYINT DEFAULT 0 NOT NULL,
	`active` tinyint(1) unsigned DEFAULT 0 NOT NULL,
	`available_for_order` TINYINT(1) DEFAULT 1 NOT NULL,
	`condition` enum('new','used','refurbished') DEFAULT 'new' NOT NULL,
	`show_price` TINYINT(1) DEFAULT 1 NOT NULL,
	`indexed` TINYINT(1) DEFAULT 0 NOT NULL,
	`cache_is_pack` TINYINT(1) DEFAULT 0 NOT NULL,
	`cache_has_attachments` TINYINT(1) DEFAULT 0 NOT NULL,
	`cache_default_attribute` int(10) unsigned,
	`date_add` DATETIME NOT NULL,
	`date_upd` DATETIME NOT NULL,
	PRIMARY KEY (`id_product`),
	INDEX `product_supplier` (`id_supplier`),
	INDEX `product_manufacturer` (`id_manufacturer`),
	INDEX `id_category_default` (`id_category_default`),
	INDEX `id_color_default` (`id_color_default`),
	INDEX `date_add` (`date_add`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_product_attachment
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_product_attachment`;

CREATE TABLE `djland_product_attachment`
(
	`id_product` int(10) unsigned NOT NULL,
	`id_attachment` int(10) unsigned NOT NULL,
	PRIMARY KEY (`id_product`,`id_attachment`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_product_attribute
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_product_attribute`;

CREATE TABLE `djland_product_attribute`
(
	`id_product_attribute` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`id_product` int(10) unsigned NOT NULL,
	`reference` VARCHAR(32),
	`supplier_reference` VARCHAR(32),
	`location` VARCHAR(64),
	`ean13` VARCHAR(13),
	`upc` VARCHAR(12),
	`wholesale_price` DECIMAL(20,6) DEFAULT 0.000000 NOT NULL,
	`price` DECIMAL(20,6) DEFAULT 0.000000 NOT NULL,
	`ecotax` DECIMAL(17,6) DEFAULT 0.000000 NOT NULL,
	`quantity` INTEGER(10) DEFAULT 0 NOT NULL,
	`weight` FLOAT DEFAULT 0 NOT NULL,
	`unit_price_impact` DECIMAL(17,2) DEFAULT 0.00 NOT NULL,
	`default_on` tinyint(1) unsigned DEFAULT 0 NOT NULL,
	`minimal_quantity` int(10) unsigned DEFAULT 1 NOT NULL,
	PRIMARY KEY (`id_product_attribute`),
	INDEX `product_attribute_product` (`id_product`),
	INDEX `reference` (`reference`),
	INDEX `supplier_reference` (`supplier_reference`),
	INDEX `product_default` (`id_product`, `default_on`),
	INDEX `id_product_id_product_attribute` (`id_product_attribute`, `id_product`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_product_attribute_combination
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_product_attribute_combination`;

CREATE TABLE `djland_product_attribute_combination`
(
	`id_attribute` int(10) unsigned NOT NULL,
	`id_product_attribute` int(10) unsigned NOT NULL,
	PRIMARY KEY (`id_attribute`,`id_product_attribute`),
	INDEX `id_product_attribute` (`id_product_attribute`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_product_attribute_image
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_product_attribute_image`;

CREATE TABLE `djland_product_attribute_image`
(
	`id_product_attribute` int(10) unsigned NOT NULL,
	`id_image` int(10) unsigned NOT NULL,
	PRIMARY KEY (`id_product_attribute`,`id_image`),
	INDEX `id_image` (`id_image`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_product_country_tax
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_product_country_tax`;

CREATE TABLE `djland_product_country_tax`
(
	`id_product` INTEGER NOT NULL,
	`id_country` INTEGER NOT NULL,
	`id_tax` INTEGER NOT NULL,
	PRIMARY KEY (`id_product`),
	UNIQUE INDEX `id_product` (`id_product`, `id_country`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_product_download
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_product_download`;

CREATE TABLE `djland_product_download`
(
	`id_product_download` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`id_product` int(10) unsigned NOT NULL,
	`display_filename` VARCHAR(255),
	`physically_filename` VARCHAR(255),
	`date_deposit` DATETIME NOT NULL,
	`date_expiration` DATETIME,
	`nb_days_accessible` int(10) unsigned,
	`nb_downloadable` int(10) unsigned DEFAULT 1,
	`active` tinyint(1) unsigned DEFAULT 1 NOT NULL,
	PRIMARY KEY (`id_product_download`),
	INDEX `product_active` (`id_product`, `active`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_product_group_reduction_cache
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_product_group_reduction_cache`;

CREATE TABLE `djland_product_group_reduction_cache`
(
	`id_product` int(10) unsigned NOT NULL,
	`id_group` int(10) unsigned NOT NULL,
	`reduction` DECIMAL(4,3) NOT NULL,
	PRIMARY KEY (`id_product`,`id_group`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_product_lang
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_product_lang`;

CREATE TABLE `djland_product_lang`
(
	`id_product` int(10) unsigned NOT NULL,
	`id_lang` int(10) unsigned NOT NULL,
	`description` TEXT,
	`description_short` TEXT,
	`link_rewrite` VARCHAR(128) NOT NULL,
	`meta_description` VARCHAR(255),
	`meta_keywords` VARCHAR(255),
	`meta_title` VARCHAR(128),
	`name` VARCHAR(128) NOT NULL,
	`available_now` VARCHAR(255),
	`available_later` VARCHAR(255),
	PRIMARY KEY (`id_product`,`id_lang`),
	UNIQUE INDEX `product_lang_index` (`id_product`, `id_lang`),
	INDEX `id_lang` (`id_lang`),
	INDEX `name` (`name`),
	CONSTRAINT `djland_product_lang_FK_1`
		FOREIGN KEY (`id_product`)
		REFERENCES `djland_product` (`id_product`),
	CONSTRAINT `djland_product_lang_FK_2`
		FOREIGN KEY (`id_lang`)
		REFERENCES `djland_lang` (`id_lang`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_product_sale
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_product_sale`;

CREATE TABLE `djland_product_sale`
(
	`id_product` int(10) unsigned NOT NULL,
	`quantity` int(10) unsigned DEFAULT 0 NOT NULL,
	`sale_nbr` int(10) unsigned DEFAULT 0 NOT NULL,
	`date_upd` DATE NOT NULL,
	PRIMARY KEY (`id_product`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_product_tag
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_product_tag`;

CREATE TABLE `djland_product_tag`
(
	`id_product` int(10) unsigned NOT NULL,
	`id_tag` int(10) unsigned NOT NULL,
	PRIMARY KEY (`id_product`,`id_tag`),
	INDEX `id_tag` (`id_tag`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_profile
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_profile`;

CREATE TABLE `djland_profile`
(
	`id_profile` int(10) unsigned NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id_profile`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_profile_lang
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_profile_lang`;

CREATE TABLE `djland_profile_lang`
(
	`id_lang` int(10) unsigned NOT NULL,
	`id_profile` int(10) unsigned NOT NULL,
	`name` VARCHAR(128) NOT NULL,
	PRIMARY KEY (`id_lang`,`id_profile`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_quick_access
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_quick_access`;

CREATE TABLE `djland_quick_access`
(
	`id_quick_access` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`new_window` TINYINT(1) DEFAULT 0 NOT NULL,
	`link` VARCHAR(128) NOT NULL,
	PRIMARY KEY (`id_quick_access`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_quick_access_lang
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_quick_access_lang`;

CREATE TABLE `djland_quick_access_lang`
(
	`id_quick_access` int(10) unsigned NOT NULL,
	`id_lang` int(10) unsigned NOT NULL,
	`name` VARCHAR(32) NOT NULL,
	PRIMARY KEY (`id_quick_access`,`id_lang`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_range_price
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_range_price`;

CREATE TABLE `djland_range_price`
(
	`id_range_price` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`id_carrier` int(10) unsigned NOT NULL,
	`delimiter1` DECIMAL(20,6) NOT NULL,
	`delimiter2` DECIMAL(20,6) NOT NULL,
	PRIMARY KEY (`id_range_price`),
	UNIQUE INDEX `id_carrier` (`id_carrier`, `delimiter1`, `delimiter2`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_range_weight
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_range_weight`;

CREATE TABLE `djland_range_weight`
(
	`id_range_weight` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`id_carrier` int(10) unsigned NOT NULL,
	`delimiter1` DECIMAL(20,6) NOT NULL,
	`delimiter2` DECIMAL(20,6) NOT NULL,
	PRIMARY KEY (`id_range_weight`),
	UNIQUE INDEX `id_carrier` (`id_carrier`, `delimiter1`, `delimiter2`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_referrer
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_referrer`;

CREATE TABLE `djland_referrer`
(
	`id_referrer` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(64) NOT NULL,
	`passwd` VARCHAR(32),
	`http_referer_regexp` VARCHAR(64),
	`http_referer_like` VARCHAR(64),
	`request_uri_regexp` VARCHAR(64),
	`request_uri_like` VARCHAR(64),
	`http_referer_regexp_not` VARCHAR(64),
	`http_referer_like_not` VARCHAR(64),
	`request_uri_regexp_not` VARCHAR(64),
	`request_uri_like_not` VARCHAR(64),
	`base_fee` DECIMAL(5,2) DEFAULT 0.00 NOT NULL,
	`percent_fee` DECIMAL(5,2) DEFAULT 0.00 NOT NULL,
	`click_fee` DECIMAL(5,2) DEFAULT 0.00 NOT NULL,
	`cache_visitors` INTEGER,
	`cache_visits` INTEGER,
	`cache_pages` INTEGER,
	`cache_registrations` INTEGER,
	`cache_orders` INTEGER,
	`cache_sales` DECIMAL(17,2),
	`cache_reg_rate` DECIMAL(5,4),
	`cache_order_rate` DECIMAL(5,4),
	`date_add` DATETIME NOT NULL,
	PRIMARY KEY (`id_referrer`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_referrer_cache
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_referrer_cache`;

CREATE TABLE `djland_referrer_cache`
(
	`id_connections_source` int(11) unsigned NOT NULL,
	`id_referrer` int(11) unsigned NOT NULL,
	PRIMARY KEY (`id_connections_source`,`id_referrer`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_required_field
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_required_field`;

CREATE TABLE `djland_required_field`
(
	`id_required_field` INTEGER NOT NULL AUTO_INCREMENT,
	`object_name` VARCHAR(32) NOT NULL,
	`field_name` VARCHAR(32) NOT NULL,
	PRIMARY KEY (`id_required_field`),
	INDEX `object_name` (`object_name`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_scene
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_scene`;

CREATE TABLE `djland_scene`
(
	`id_scene` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`active` TINYINT(1) DEFAULT 1 NOT NULL,
	PRIMARY KEY (`id_scene`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_scene_category
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_scene_category`;

CREATE TABLE `djland_scene_category`
(
	`id_scene` int(10) unsigned NOT NULL,
	`id_category` int(10) unsigned NOT NULL,
	PRIMARY KEY (`id_scene`,`id_category`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_scene_lang
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_scene_lang`;

CREATE TABLE `djland_scene_lang`
(
	`id_scene` int(10) unsigned NOT NULL,
	`id_lang` int(10) unsigned NOT NULL,
	`name` VARCHAR(100) NOT NULL,
	PRIMARY KEY (`id_scene`,`id_lang`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_scene_products
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_scene_products`;

CREATE TABLE `djland_scene_products`
(
	`id_scene` int(10) unsigned NOT NULL,
	`id_product` int(10) unsigned NOT NULL,
	`x_axis` INTEGER(4) NOT NULL,
	`y_axis` INTEGER(4) NOT NULL,
	`zone_width` INTEGER(3) NOT NULL,
	`zone_height` INTEGER(3) NOT NULL,
	PRIMARY KEY (`id_scene`,`id_product`,`x_axis`,`y_axis`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_search_engine
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_search_engine`;

CREATE TABLE `djland_search_engine`
(
	`id_search_engine` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`server` VARCHAR(64) NOT NULL,
	`getvar` VARCHAR(16) NOT NULL,
	PRIMARY KEY (`id_search_engine`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_search_index
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_search_index`;

CREATE TABLE `djland_search_index`
(
	`id_product` int(11) unsigned NOT NULL,
	`id_word` int(11) unsigned NOT NULL,
	`weight` smallint(4) unsigned DEFAULT 1 NOT NULL,
	PRIMARY KEY (`id_product`,`id_word`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_search_word
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_search_word`;

CREATE TABLE `djland_search_word`
(
	`id_word` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`id_lang` int(10) unsigned NOT NULL,
	`word` VARCHAR(15) NOT NULL,
	PRIMARY KEY (`id_word`),
	UNIQUE INDEX `id_lang` (`id_lang`, `word`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_sekeyword
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_sekeyword`;

CREATE TABLE `djland_sekeyword`
(
	`id_sekeyword` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`keyword` VARCHAR(256) NOT NULL,
	`date_add` DATETIME NOT NULL,
	PRIMARY KEY (`id_sekeyword`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_specific_price
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_specific_price`;

CREATE TABLE `djland_specific_price`
(
	`id_specific_price` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`id_product` int(10) unsigned NOT NULL,
	`id_shop` tinyint(3) unsigned NOT NULL,
	`id_currency` int(10) unsigned NOT NULL,
	`id_country` int(10) unsigned NOT NULL,
	`id_group` int(10) unsigned NOT NULL,
	`price` DECIMAL(20,6) NOT NULL,
	`from_quantity` smallint(5) unsigned NOT NULL,
	`reduction` DECIMAL(20,6) NOT NULL,
	`reduction_type` enum('amount','percentage') NOT NULL,
	`from` DATETIME NOT NULL,
	`to` DATETIME NOT NULL,
	PRIMARY KEY (`id_specific_price`),
	INDEX `id_product` (`id_product`, `id_shop`, `id_currency`, `id_country`, `id_group`, `from_quantity`, `from`, `to`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_specific_price_priority
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_specific_price_priority`;

CREATE TABLE `djland_specific_price_priority`
(
	`id_specific_price_priority` INTEGER NOT NULL AUTO_INCREMENT,
	`id_product` INTEGER NOT NULL,
	`priority` VARCHAR(80) NOT NULL,
	PRIMARY KEY (`id_specific_price_priority`,`id_product`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_state
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_state`;

CREATE TABLE `djland_state`
(
	`id_state` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`id_country` int(11) unsigned NOT NULL,
	`id_zone` int(11) unsigned NOT NULL,
	`name` VARCHAR(64) NOT NULL,
	`iso_code` CHAR(4) NOT NULL,
	`tax_behavior` SMALLINT(1) DEFAULT 0 NOT NULL,
	`active` TINYINT(1) DEFAULT 0 NOT NULL,
	PRIMARY KEY (`id_state`),
	INDEX `id_country` (`id_country`),
	INDEX `id_zone` (`id_zone`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_statssearch
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_statssearch`;

CREATE TABLE `djland_statssearch`
(
	`id_statssearch` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`keywords` VARCHAR(255) NOT NULL,
	`results` INTEGER(6) DEFAULT 0 NOT NULL,
	`date_add` DATETIME NOT NULL,
	PRIMARY KEY (`id_statssearch`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_stock_mvt
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_stock_mvt`;

CREATE TABLE `djland_stock_mvt`
(
	`id_stock_mvt` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`id_product` int(11) unsigned,
	`id_product_attribute` int(11) unsigned,
	`id_order` int(11) unsigned,
	`id_stock_mvt_reason` int(11) unsigned NOT NULL,
	`id_employee` int(11) unsigned NOT NULL,
	`quantity` INTEGER NOT NULL,
	`date_add` DATETIME NOT NULL,
	`date_upd` DATETIME NOT NULL,
	PRIMARY KEY (`id_stock_mvt`),
	INDEX `id_order` (`id_order`),
	INDEX `id_product` (`id_product`),
	INDEX `id_product_attribute` (`id_product_attribute`),
	INDEX `id_stock_mvt_reason` (`id_stock_mvt_reason`),
	CONSTRAINT `djland_stock_mvt_FK_1`
		FOREIGN KEY (`id_product`)
		REFERENCES `djland_product` (`id_product`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_stock_mvt_reason
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_stock_mvt_reason`;

CREATE TABLE `djland_stock_mvt_reason`
(
	`id_stock_mvt_reason` INTEGER NOT NULL AUTO_INCREMENT,
	`sign` TINYINT(1) DEFAULT 1 NOT NULL,
	`date_add` DATETIME NOT NULL,
	`date_upd` DATETIME NOT NULL,
	PRIMARY KEY (`id_stock_mvt_reason`,`sign`),
	CONSTRAINT `djland_stock_mvt_reason_FK_1`
		FOREIGN KEY (`id_stock_mvt_reason`)
		REFERENCES `djland_stock_mvt` (`id_stock_mvt_reason`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_stock_mvt_reason_lang
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_stock_mvt_reason_lang`;

CREATE TABLE `djland_stock_mvt_reason_lang`
(
	`id_stock_mvt_reason` INTEGER NOT NULL,
	`id_lang` INTEGER NOT NULL,
	`name` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`id_stock_mvt_reason`,`id_lang`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_store
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_store`;

CREATE TABLE `djland_store`
(
	`id_store` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`id_country` int(10) unsigned NOT NULL,
	`id_state` int(10) unsigned,
	`name` VARCHAR(128) NOT NULL,
	`address1` VARCHAR(128) NOT NULL,
	`address2` VARCHAR(128),
	`city` VARCHAR(64) NOT NULL,
	`postcode` VARCHAR(12) NOT NULL,
	`latitude` FLOAT(10,6),
	`longitude` FLOAT(10,6),
	`hours` VARCHAR(254),
	`phone` VARCHAR(16),
	`fax` VARCHAR(16),
	`email` VARCHAR(128),
	`note` TEXT,
	`active` tinyint(1) unsigned DEFAULT 0 NOT NULL,
	`date_add` DATETIME NOT NULL,
	`date_upd` DATETIME NOT NULL,
	PRIMARY KEY (`id_store`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_subdomain
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_subdomain`;

CREATE TABLE `djland_subdomain`
(
	`id_subdomain` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(16) NOT NULL,
	PRIMARY KEY (`id_subdomain`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_supplier
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_supplier`;

CREATE TABLE `djland_supplier`
(
	`id_supplier` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(64) NOT NULL,
	`date_add` DATETIME NOT NULL,
	`date_upd` DATETIME NOT NULL,
	`active` TINYINT(1) DEFAULT 0 NOT NULL,
	PRIMARY KEY (`id_supplier`),
	CONSTRAINT `djland_supplier_FK_1`
		FOREIGN KEY (`id_supplier`)
		REFERENCES `djland_product` (`id_supplier`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_supplier_lang
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_supplier_lang`;

CREATE TABLE `djland_supplier_lang`
(
	`id_supplier` int(10) unsigned NOT NULL,
	`id_lang` int(10) unsigned NOT NULL,
	`description` TEXT,
	`meta_title` VARCHAR(128),
	`meta_keywords` VARCHAR(255),
	`meta_description` VARCHAR(255),
	PRIMARY KEY (`id_supplier`,`id_lang`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_tab
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_tab`;

CREATE TABLE `djland_tab`
(
	`id_tab` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`id_parent` INTEGER NOT NULL,
	`class_name` VARCHAR(64) NOT NULL,
	`module` VARCHAR(64),
	`position` int(10) unsigned NOT NULL,
	PRIMARY KEY (`id_tab`),
	INDEX `class_name` (`class_name`),
	INDEX `id_parent` (`id_parent`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_tab_lang
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_tab_lang`;

CREATE TABLE `djland_tab_lang`
(
	`id_tab` int(10) unsigned NOT NULL,
	`id_lang` int(10) unsigned NOT NULL,
	`name` VARCHAR(32),
	PRIMARY KEY (`id_tab`,`id_lang`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_tag
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_tag`;

CREATE TABLE `djland_tag`
(
	`id_tag` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`id_lang` int(10) unsigned NOT NULL,
	`name` VARCHAR(32) NOT NULL,
	PRIMARY KEY (`id_tag`),
	INDEX `tag_name` (`name`),
	INDEX `id_lang` (`id_lang`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_tax
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_tax`;

CREATE TABLE `djland_tax`
(
	`id_tax` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`rate` DECIMAL NOT NULL,
	`active` tinyint(1) unsigned DEFAULT 1 NOT NULL,
	PRIMARY KEY (`id_tax`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_tax_lang
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_tax_lang`;

CREATE TABLE `djland_tax_lang`
(
	`id_tax` int(10) unsigned NOT NULL,
	`id_lang` int(10) unsigned NOT NULL,
	`name` VARCHAR(32) NOT NULL,
	PRIMARY KEY (`id_tax`),
	UNIQUE INDEX `tax_lang_index` (`id_tax`, `id_lang`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_tax_rule
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_tax_rule`;

CREATE TABLE `djland_tax_rule`
(
	`id_tax_rule` INTEGER NOT NULL AUTO_INCREMENT,
	`id_tax_rules_group` INTEGER NOT NULL,
	`id_country` INTEGER NOT NULL,
	`id_state` INTEGER NOT NULL,
	`id_county` INTEGER NOT NULL,
	`id_tax` INTEGER NOT NULL,
	`state_behavior` INTEGER NOT NULL,
	`county_behavior` INTEGER NOT NULL,
	PRIMARY KEY (`id_tax_rule`),
	UNIQUE INDEX `tax_rule` (`id_tax_rules_group`, `id_country`, `id_state`, `id_county`),
	INDEX `id_tax_rules_group` (`id_tax_rules_group`),
	INDEX `id_tax` (`id_tax`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_tax_rules_group
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_tax_rules_group`;

CREATE TABLE `djland_tax_rules_group`
(
	`id_tax_rules_group` INTEGER NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(50) NOT NULL,
	`active` INTEGER NOT NULL,
	PRIMARY KEY (`id_tax_rules_group`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_timezone
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_timezone`;

CREATE TABLE `djland_timezone`
(
	`id_timezone` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(32) NOT NULL,
	PRIMARY KEY (`id_timezone`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_web_browser
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_web_browser`;

CREATE TABLE `djland_web_browser`
(
	`id_web_browser` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(64),
	PRIMARY KEY (`id_web_browser`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_webservice_account
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_webservice_account`;

CREATE TABLE `djland_webservice_account`
(
	`id_webservice_account` INTEGER NOT NULL AUTO_INCREMENT,
	`key` VARCHAR(32) NOT NULL,
	`description` TEXT,
	`class_name` VARCHAR(50) DEFAULT 'WebserviceRequest' NOT NULL,
	`is_module` TINYINT(2) DEFAULT 0 NOT NULL,
	`module_name` VARCHAR(50),
	`active` TINYINT(2) NOT NULL,
	PRIMARY KEY (`id_webservice_account`),
	INDEX `key` (`key`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_webservice_permission
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_webservice_permission`;

CREATE TABLE `djland_webservice_permission`
(
	`id_webservice_permission` INTEGER NOT NULL AUTO_INCREMENT,
	`resource` VARCHAR(50) NOT NULL,
	`method` enum('GET','POST','PUT','DELETE','HEAD') NOT NULL,
	`id_webservice_account` INTEGER NOT NULL,
	PRIMARY KEY (`id_webservice_permission`),
	UNIQUE INDEX `resource_2` (`resource`, `method`, `id_webservice_account`),
	INDEX `resource` (`resource`),
	INDEX `method` (`method`),
	INDEX `id_webservice_account` (`id_webservice_account`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- djland_zone
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `djland_zone`;

CREATE TABLE `djland_zone`
(
	`id_zone` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(64) NOT NULL,
	`active` tinyint(1) unsigned DEFAULT 0 NOT NULL,
	PRIMARY KEY (`id_zone`)
) ENGINE=MyISAM;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
