-- MySQL dump 10.13  Distrib 5.7.9, for linux-glibc2.5 (x86_64)
--
-- Host: 192.168.1.192    Database: soluship_migration_data
-- ------------------------------------------------------
-- Server version	5.6.40-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `activities`
--

DROP TABLE IF EXISTS `activities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activities` (
  `activity_uuid` varchar(32) NOT NULL DEFAULT '',
  `id` int(11) NOT NULL,
  `activity_type` enum('ORDER','PICKUP','CHARGE','CUSTOMER','INVOICE','API','DEFAULT') NOT NULL DEFAULT 'DEFAULT',
  `activity` varchar(255) NOT NULL,
  `activity_reason` varchar(255) DEFAULT NULL,
  `created_by` varchar(32) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`activity_uuid`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `address_checklists`
--

DROP TABLE IF EXISTS `address_checklists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `address_checklists` (
  `address_checklist_uuid` varchar(32) NOT NULL,
  `id` int(11) NOT NULL,
  `address_id` int(11) NOT NULL,
  `address_uuid` varchar(32) DEFAULT NULL,
  `commercial_business` tinyint(1) NOT NULL DEFAULT '0',
  `description` varchar(50) DEFAULT NULL,
  `dock_level` tinyint(1) NOT NULL DEFAULT '0',
  `floor_no` int(11) NOT NULL DEFAULT '-1',
  `is_inside_pickup` tinyint(1) NOT NULL DEFAULT '0',
  `is_pallet_jack` tinyint(1) NOT NULL DEFAULT '0',
  `is_pickup_or_deliver` tinyint(1) NOT NULL DEFAULT '0',
  `is_power_tailgate` tinyint(1) NOT NULL DEFAULT '0',
  `is_prior_to_pickup` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` varchar(32) NOT NULL,
  `updated_by` varchar(32) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`address_checklist_uuid`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `addresses`
--

DROP TABLE IF EXISTS `addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `addresses` (
  `address_uuid` varchar(32) NOT NULL,
  `address_id` int(11) NOT NULL,
  `abbreviation_name` varchar(255) DEFAULT NULL,
  `address1` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `postal_code` varchar(10) DEFAULT NULL,
  `province_code` varchar(5) DEFAULT NULL,
  `country_code` varchar(5) DEFAULT NULL,
  `open_time` varchar(5) DEFAULT '00:00',
  `close_time` varchar(5) NOT NULL DEFAULT '00:00',
  `broker_code` varchar(10) NOT NULL DEFAULT 'CN',
  `contact_name` varchar(100) DEFAULT NULL,
  `customer_id` int(11) NOT NULL DEFAULT '0',
  `distribution_name` varchar(100) DEFAULT NULL,
  `email_address` varchar(100) DEFAULT NULL,
  `fax_no` varchar(100) DEFAULT NULL,
  `is_default_from` tinyint(1) NOT NULL DEFAULT '0',
  `is_residential` tinyint(1) NOT NULL DEFAULT '0',
  `is_send_notification` tinyint(1) NOT NULL DEFAULT '0',
  `mobile_no` varchar(20) DEFAULT NULL,
  `phone_ext` varchar(10) DEFAULT NULL,
  `phone_no` varchar(20) DEFAULT NULL,
  `tax_id` varchar(45) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `created_by` varchar(32) NOT NULL,
  `updated_by` varchar(32) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`address_uuid`),
  UNIQUE KEY `address_id_UNIQUE` (`address_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `business_appearances`
--

DROP TABLE IF EXISTS `business_appearances`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `business_appearances` (
  `business_appearance_uuid` varchar(32) NOT NULL,
  `id` int(11) NOT NULL,
  `business_id` int(11) NOT NULL DEFAULT '0',
  `business_uuid` varchar(32) DEFAULT NULL,
  `arrow_color` varchar(45) DEFAULT NULL,
  `back_ground_image` blob,
  `back_ground_image_path` varchar(250) DEFAULT NULL,
  `bar_first_color` varchar(45) DEFAULT NULL,
  `bar_second_color` varchar(45) DEFAULT NULL,
  `button_color` varchar(45) DEFAULT NULL,
  `css_text` longtext,
  `email_header` blob,
  `email_image` blob,
  `email_image_path` varchar(450) DEFAULT NULL,
  `error_message` varchar(200) DEFAULT NULL,
  `favourite_icon` blob,
  `favourite_icon_path` varchar(250) DEFAULT NULL,
  `footer_color` varchar(45) DEFAULT NULL,
  `footer_font_color` varchar(45) DEFAULT NULL,
  `footer1` varchar(120) DEFAULT NULL,
  `footer2` varchar(120) DEFAULT NULL,
  `grid_header_color` varchar(45) DEFAULT NULL,
  `invoice_image` blob,
  `invoice_image_path` varchar(250) DEFAULT NULL,
  `logo_file_name` varchar(45) DEFAULT NULL,
  `logo_hires_file_name` varchar(45) DEFAULT NULL,
  `logo_image` blob,
  `logo_image_path` varchar(250) DEFAULT NULL,
  `logo_url` varchar(300) DEFAULT NULL,
  `logout_url` varchar(200) DEFAULT NULL,
  `menu_color` varchar(45) DEFAULT NULL,
  `menu_hover_color` varchar(45) DEFAULT NULL,
  `package_image` blob,
  `package_image_path` varchar(250) DEFAULT NULL,
  `signup_jsp` varchar(500) DEFAULT NULL,
  `is_status_color` tinyint(1) NOT NULL DEFAULT '0',
  `support_url` varchar(200) DEFAULT NULL,
  `terms_url` varchar(200) DEFAULT NULL,
  `created_by` varchar(32) NOT NULL,
  `updated_by` varchar(32) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`business_appearance_uuid`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `business_contacts`
--

DROP TABLE IF EXISTS `business_contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `business_contacts` (
  `business_contact_uuid` varchar(32) NOT NULL,
  `business_id` int(11) NOT NULL DEFAULT '0',
  `business_uuid` varchar(32) NOT NULL,
  `business_abbreviation` varchar(100) DEFAULT NULL,
  `admin_email` varchar(100) DEFAULT NULL,
  `ar_ctc` text,
  `ar_email` varchar(100) DEFAULT NULL,
  `ar_phone` varchar(20) DEFAULT NULL,
  `business_contact_url` varchar(255) DEFAULT NULL,
  `feedback_email_id` varchar(100) DEFAULT NULL,
  `finance_email` varchar(100) DEFAULT NULL,
  `ltl_ctc` text,
  `ltl_email` varchar(100) DEFAULT NULL,
  `ltl_phone` varchar(20) DEFAULT NULL,
  `quick_start_url` varchar(255) DEFAULT NULL,
  `send_cancel_purolator_freight_email` varchar(100) DEFAULT NULL,
  `warehouse_email` varchar(100) DEFAULT NULL,
  `created_by` varchar(32) NOT NULL,
  `updated_by` varchar(32) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`business_contact_uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `business_mail_templates`
--

DROP TABLE IF EXISTS `business_mail_templates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `business_mail_templates` (
  `business_email_uuid` varchar(32) NOT NULL,
  `business_id` int(11) NOT NULL DEFAULT '0',
  `business_uuid` varchar(32) NOT NULL,
  `email_type` varchar(60) DEFAULT NULL,
  `locale` varchar(45) DEFAULT NULL,
  `msg_id` varchar(255) DEFAULT NULL,
  `created_by` varchar(32) NOT NULL,
  `updated_by` varchar(32) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`business_email_uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `business_report_paths`
--

DROP TABLE IF EXISTS `business_report_paths`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `business_report_paths` (
  `business_report_path_uuid` varchar(32) NOT NULL,
  `business_id` int(11) NOT NULL DEFAULT '0',
  `business_uuid` varchar(32) NOT NULL,
  `contact_path` varchar(200) DEFAULT NULL,
  `edi_invoice_document_path` varchar(200) NOT NULL DEFAULT '/home/soluship/EDI/InvoiceDocument',
  `feedback_path` varchar(200) DEFAULT NULL,
  `report_pathinvoice` varchar(200) DEFAULT NULL,
  `ship_doc_path` varchar(200) DEFAULT NULL,
  `created_by` varchar(32) NOT NULL,
  `updated_by` varchar(32) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`business_report_path_uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `businesses`
--

DROP TABLE IF EXISTS `businesses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `businesses` (
  `business_uuid` varchar(32) NOT NULL,
  `business_id` int(11) NOT NULL,
  `business_name` varchar(100) NOT NULL,
  `business_level` enum('ROOT','PARTNER','NATION','BRANCH') NOT NULL DEFAULT 'ROOT',
  `address_id` int(11) NOT NULL DEFAULT '0',
  `address_uuid` varchar(32) NOT NULL,
  `business_carrier_id` int(11) NOT NULL DEFAULT '0',
  `business_customer_id` int(11) NOT NULL DEFAULT '0',
  `chat_role` int(1) NOT NULL DEFAULT '0',
  `custom_markup` int(11) NOT NULL DEFAULT '0',
  `default_credit_limit` double(10,2) NOT NULL DEFAULT '0.00',
  `default_currency` varchar(50) NOT NULL DEFAULT 'CAD',
  `default_hold_terms` int(11) NOT NULL DEFAULT '720',
  `default_net_terms` int(11) NOT NULL DEFAULT '0',
  `default_remit_address_level` smallint(1) NOT NULL DEFAULT '0',
  `header_key` varchar(50) DEFAULT NULL,
  `invoice_level` varchar(50) DEFAULT 'SYSTEM',
  `invoice_theme` int(11) NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_copy_markup` tinyint(1) NOT NULL DEFAULT '0',
  `is_default_payment_type_level` tinyint(1) NOT NULL DEFAULT '0',
  `is_request_quote` tinyint(1) NOT NULL DEFAULT '0',
  `is_store_cc` tinyint(1) NOT NULL DEFAULT '0',
  `markup_type` int(11) NOT NULL DEFAULT '0',
  `master_carrier_name` varchar(50) DEFAULT NULL,
  `non_zero_rate` int(11) NOT NULL DEFAULT '0',
  `parent_business_id` int(11) NOT NULL DEFAULT '0',
  `parent_customer_id` int(11) NOT NULL DEFAULT '0',
  `parent_markup_business_id` int(11) NOT NULL DEFAULT '0',
  `short_code` varchar(100) DEFAULT NULL,
  `smtp_configuration` varchar(255) NOT NULL DEFAULT '{"smtp_host":"",\n"smtp_username":"",\n"smtp_password":"",\n"smtp_port":""}',
  `sub_domain` varchar(200) DEFAULT NULL,
  `system_name` varchar(100) DEFAULT NULL,
  `tax_info` varchar(100) DEFAULT NULL,
  `time_zone` varchar(100) DEFAULT NULL,
  `us_address_id` int(11) NOT NULL DEFAULT '0',
  `zero_rate` int(11) NOT NULL DEFAULT '0',
  `created_by` varchar(32) NOT NULL,
  `updated_by` varchar(32) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`business_uuid`),
  UNIQUE KEY `business_id_UNIQUE` (`business_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `charge_statuses`
--

DROP TABLE IF EXISTS `charge_statuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `charge_statuses` (
  `charge_status_uuid` varchar(32) NOT NULL,
  `charge_status_id` int(11) NOT NULL,
  `charge_status_name` varchar(45) DEFAULT NULL,
  `created_by` varchar(32) NOT NULL,
  `updated_by` varchar(32) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`charge_status_uuid`),
  UNIQUE KEY `charge_status_id_UNIQUE` (`charge_status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `charges`
--

DROP TABLE IF EXISTS `charges`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `charges` (
  `charge_uuid` varchar(32) NOT NULL,
  `charge_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL DEFAULT '0',
  `order_uuid` varchar(32) NOT NULL,
  `calculate_tax` int(11) NOT NULL DEFAULT '0',
  `cancelled_invoice_number` varchar(50) DEFAULT NULL,
  `cancelled_invoice_order` varchar(5) NOT NULL DEFAULT 'NO',
  `carrier_id` int(11) NOT NULL DEFAULT '0',
  `carrier_name` varchar(50) DEFAULT NULL,
  `charge` double(10,2) NOT NULL DEFAULT '0.00',
  `charge_code` varchar(50) DEFAULT NULL,
  `charge_code_level_2` varchar(50) DEFAULT NULL,
  `charge_currency` int(11) NOT NULL DEFAULT '0',
  `charge_group_id` int(11) NOT NULL DEFAULT '0',
  `charge_name` varchar(255) DEFAULT NULL,
  `charge_object` text,
  `is_tax` tinyint(1) NOT NULL DEFAULT '0',
  `cost` double(10,2) NOT NULL DEFAULT '0.00',
  `cost_currency` int(11) NOT NULL DEFAULT '0',
  `discount_amount` double(10,2) NOT NULL DEFAULT '0.00',
  `edi_invoice_number` varchar(50) DEFAULT NULL,
  `exchange_rate` double(10,2) NOT NULL DEFAULT '0.00',
  `leg_charge_id` int(11) NOT NULL DEFAULT '0',
  `leg_order_id` int(11) NOT NULL DEFAULT '0',
  `line_no` int(11) NOT NULL DEFAULT '0',
  `quote_charge_id` int(11) NOT NULL DEFAULT '0',
  `service` varchar(255) DEFAULT NULL,
  `is_status_id` tinyint(1) NOT NULL DEFAULT '0',
  `is_sync_to_master` tinyint(1) NOT NULL DEFAULT '0',
  `tariff` double(10,2) NOT NULL DEFAULT '0.00',
  `is_charge_type` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` varchar(32) NOT NULL,
  `updated_by` varchar(32) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`charge_uuid`),
  UNIQUE KEY `charge_id_UNIQUE` (`charge_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `customer_preferences`
--

DROP TABLE IF EXISTS `customer_preferences`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer_preferences` (
  `customer_preference_uuid` varchar(32) NOT NULL,
  `customer_id` int(11) NOT NULL DEFAULT '0',
  `is_auto_pickup` tinyint(1) NOT NULL DEFAULT '0',
  `is_auto_focus` tinyint(1) NOT NULL DEFAULT '0',
  `is_custom_broker` tinyint(1) NOT NULL DEFAULT '0',
  `is_dhlecom_active_status` tinyint(1) NOT NULL DEFAULT '0',
  `is_disable_grouping` tinyint(1) NOT NULL DEFAULT '0',
  `is_enable_dash` tinyint(1) NOT NULL DEFAULT '0',
  `is_freight_terms` tinyint(1) NOT NULL DEFAULT '1',
  `ftp_hostname` varchar(50) DEFAULT NULL,
  `ftp_password` varchar(50) DEFAULT NULL,
  `ftp_port` int(11) NOT NULL DEFAULT '0',
  `ftp_username` varchar(50) DEFAULT NULL,
  `invoice_short_code` varchar(50) DEFAULT NULL,
  `is_business_customer` tinyint(1) NOT NULL DEFAULT '0',
  `is_disable_viewShipment` tinyint(1) NOT NULL DEFAULT '0',
  `is_ecomm_leg` tinyint(1) NOT NULL DEFAULT '0',
  `is_ftp_printenable` tinyint(1) NOT NULL DEFAULT '0',
  `is_quickbooks_enable` tinyint(1) NOT NULL DEFAULT '0',
  `is_drop_off` tinyint(1) NOT NULL DEFAULT '0',
  `last_name` varchar(50) DEFAULT NULL,
  `is_ltl_mail` tinyint(1) NOT NULL DEFAULT '0',
  `is_phone_number_validation` tinyint(1) NOT NULL DEFAULT '1',
  `primary_warehouse` int(11) NOT NULL DEFAULT '0',
  `is_tax_exempt` tinyint(1) NOT NULL DEFAULT '0',
  `is_test_account` tinyint(1) NOT NULL DEFAULT '0',
  `is_warehouse_customer` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` varchar(32) NOT NULL,
  `updated_by` varchar(32) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`customer_preference_uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `customer_uuid` varchar(32) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(32) DEFAULT NULL,
  `account_number` varchar(20) DEFAULT NULL,
  `active` enum('ACTIVE','DEACTIVE') NOT NULL DEFAULT 'ACTIVE',
  `address_id` int(11) NOT NULL DEFAULT '0',
  `address_uuid` varchar(32) NOT NULL,
  `ap_contact_name` varchar(100) DEFAULT NULL,
  `ap_phone` varchar(20) DEFAULT NULL,
  `api_username` varchar(50) DEFAULT NULL,
  `api_password` varchar(50) DEFAULT NULL,
  `available_credit` double(10,2) NOT NULL DEFAULT '0.00',
  `branch` varchar(50) DEFAULT NULL,
  `business_id` int(11) NOT NULL DEFAULT '0',
  `business_uuid` varchar(32) DEFAULT NULL,
  `is_chb_customer` tinyint(1) NOT NULL DEFAULT '0',
  `credit_limit` double(10,2) NOT NULL DEFAULT '0.00',
  `is_credit_card_functionality` tinyint(1) NOT NULL DEFAULT '0',
  `default_currency` varchar(25) DEFAULT NULL,
  `hold_terms` int(11) NOT NULL DEFAULT '720',
  `invoice_email` varchar(255) DEFAULT NULL,
  `job_position` varchar(45) DEFAULT NULL,
  `is_known_customer` tinyint(1) NOT NULL DEFAULT '0',
  `monthly_spend` double(10,2) NOT NULL DEFAULT '0.00',
  `odoo_lead_contact_token` varchar(45) DEFAULT NULL,
  `odoo_lead_id` int(11) NOT NULL DEFAULT '0',
  `odoo_lead_token` varchar(45) DEFAULT NULL,
  `odoo_status_id` int(11) NOT NULL DEFAULT '0',
  `is_override_cc_terms` tinyint(1) NOT NULL DEFAULT '0',
  `payable_days` int(11) NOT NULL DEFAULT '0',
  `payment_gateway_id` int(11) NOT NULL DEFAULT '0',
  `payment_type` int(11) NOT NULL DEFAULT '1',
  `is_show_ref` tinyint(1) NOT NULL DEFAULT '0',
  `status` varchar(50) NOT NULL DEFAULT 'PROSPECT',
  `time_zone` varchar(255) DEFAULT NULL,
  `total_credit_used` double(10,2) NOT NULL DEFAULT '0.00',
  `unpaid_invoice_amount` double(10,2) NOT NULL DEFAULT '0.00',
  `unpaid_invoice_count` int(11) NOT NULL DEFAULT '0',
  `unpaid_shipping_amount` double(10,2) NOT NULL DEFAULT '0.00',
  `created_by` varchar(32) NOT NULL,
  `updated_by` varchar(32) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`customer_uuid`),
  UNIQUE KEY `customer_id_UNIQUE` (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `customs_invoice_products`
--

DROP TABLE IF EXISTS `customs_invoice_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customs_invoice_products` (
  `customs_invoice_product_uuid` varchar(32) NOT NULL,
  `order_id` int(11) NOT NULL DEFAULT '0',
  `order_uuid` varchar(45) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_uuid` varchar(32) NOT NULL,
  `customs_invoice_id` int(11) DEFAULT NULL,
  `product_desc` varchar(100) DEFAULT NULL,
  `product_hc` varchar(50) DEFAULT NULL,
  `product_country_origin` varchar(50) DEFAULT NULL,
  `product_quantity` int(11) NOT NULL DEFAULT '0',
  `product_unit_price` double(10,2) NOT NULL DEFAULT '0.00',
  `product_weight` int(11) NOT NULL DEFAULT '0',
  `product_weight_CI` double(10,2) NOT NULL DEFAULT '0.00',
  `product_ttl_weight_CI` double(10,2) NOT NULL DEFAULT '0.00',
  `created_by` varchar(32) NOT NULL,
  `updated_by` varchar(32) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`customs_invoice_product_uuid`),
  UNIQUE KEY `product_id_UNIQUE` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `customs_invoices`
--

DROP TABLE IF EXISTS `customs_invoices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customs_invoices` (
  `customs_invoice_uuid` varchar(32) NOT NULL,
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL DEFAULT '0',
  `order_uuid` varchar(45) NOT NULL,
  `bill_to` varchar(50) DEFAULT NULL,
  `bill_to_account_num` varchar(50) DEFAULT NULL,
  `bill_to_address_id` int(11) NOT NULL DEFAULT '0',
  `broker_address_id` int(11) NOT NULL DEFAULT '0',
  `buyer_id` int(11) NOT NULL DEFAULT '0',
  `export_data` varchar(50) DEFAULT NULL,
  `export_data_name` varchar(50) DEFAULT NULL,
  `inco_terms` varchar(255) DEFAULT NULL,
  `is_plt_shipment` tinyint(1) NOT NULL DEFAULT '0',
  `reference_num` varchar(100) DEFAULT NULL,
  `tax_id` varchar(50) DEFAULT NULL,
  `total_value` double(10,2) NOT NULL DEFAULT '0.00',
  `total_weight` int(11) NOT NULL DEFAULT '0',
  `value_currency` varchar(50) DEFAULT NULL,
  `created_by` varchar(32) NOT NULL,
  `updated_by` varchar(32) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `customs_invoicescol` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`customs_invoice_uuid`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `documents`
--

DROP TABLE IF EXISTS `documents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `documents` (
  `document_uuid` varchar(32) NOT NULL,
  `document_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL DEFAULT '0',
  `order_uuid` varchar(45) NOT NULL,
  `document_name` varchar(255) DEFAULT NULL,
  `document_type` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `file_name` varchar(50) DEFAULT NULL,
  `file_path` varchar(200) DEFAULT NULL,
  `is_private` tinyint(1) NOT NULL DEFAULT '0',
  `is_public` tinyint(1) NOT NULL DEFAULT '0',
  `master_leg_visibility` varchar(10) DEFAULT NULL,
  `upload_by` varchar(100) DEFAULT NULL,
  `upload_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(32) NOT NULL,
  `updated_by` varchar(32) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`document_uuid`),
  UNIQUE KEY `document_id_UNIQUE` (`document_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `order_addresses`
--

DROP TABLE IF EXISTS `order_addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_addresses` (
  `order_address_uuid` varchar(32) NOT NULL,
  `order_id` int(11) NOT NULL DEFAULT '0',
  `order_uuid` varchar(45) NOT NULL,
  `abbreviation_name` varchar(255) DEFAULT NULL,
  `address_type` enum('SF','ST') DEFAULT NULL,
  `address1` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `postal_code` varchar(10) DEFAULT NULL,
  `province_code` varchar(5) DEFAULT NULL,
  `country_code` varchar(5) DEFAULT NULL,
  `open_time` varchar(5) NOT NULL DEFAULT '00:00',
  `close_time` varchar(5) NOT NULL DEFAULT '00:00',
  `contact_name` varchar(100) DEFAULT NULL,
  `email_address` varchar(100) DEFAULT NULL,
  `fax_no` varchar(20) DEFAULT NULL,
  `from_attention` varchar(100) DEFAULT NULL,
  `to_attention` varchar(100) DEFAULT NULL,
  `from_instruction` varchar(255) DEFAULT NULL,
  `to_instruction` varchar(255) DEFAULT NULL,
  `is_notify_recipient` tinyint(1) NOT NULL DEFAULT '0',
  `is_send_notification` tinyint(1) NOT NULL DEFAULT '0',
  `phone_no` varchar(20) DEFAULT NULL,
  `created_by` varchar(32) DEFAULT NULL,
  `updated_by` varchar(32) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`order_address_uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `order_billing_statuses`
--

DROP TABLE IF EXISTS `order_billing_statuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_billing_statuses` (
  `billing_status_uuid` varchar(32) NOT NULL,
  `billing_status_id` int(11) NOT NULL,
  `billing_status_name` varchar(255) DEFAULT NULL,
  `created_by` varchar(32) NOT NULL,
  `updated_by` varchar(32) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`billing_status_uuid`),
  UNIQUE KEY `billing_status_id_UNIQUE` (`billing_status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `order_markup_history`
--

DROP TABLE IF EXISTS `order_markup_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_markup_history` (
  `order_markup_history_uuid` varchar(32) NOT NULL,
  `order_id` int(11) NOT NULL DEFAULT '0',
  `order_uuid` varchar(32) NOT NULL,
  `is_order_markup` tinyint(1) NOT NULL DEFAULT '0',
  `fuel_percent` double(10,2) NOT NULL DEFAULT '0.00',
  `mark_flat` double(10,2) NOT NULL DEFAULT '0.00',
  `mark_percent` double(10,2) NOT NULL DEFAULT '0.00',
  `mark_type` int(1) NOT NULL DEFAULT '0',
  `created_by` varchar(32) NOT NULL,
  `updated_by` varchar(32) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`order_markup_history_uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `order_statuses`
--

DROP TABLE IF EXISTS `order_statuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_statuses` (
  `order_status_uuid` varchar(32) NOT NULL,
  `order_status_id` int(11) NOT NULL,
  `order_status_name` varchar(255) DEFAULT NULL,
  `order_editable` enum('TRUE','FALSE') NOT NULL DEFAULT 'FALSE',
  `is_cancel_visibility` tinyint(1) NOT NULL DEFAULT '1',
  `is_edit_package_visibility` tinyint(1) NOT NULL DEFAULT '1',
  `created_by` varchar(32) NOT NULL,
  `updated_by` varchar(32) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`order_status_uuid`),
  UNIQUE KEY `order_status_id_UNIQUE` (`order_status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `order_uuid` varchar(32) NOT NULL,
  `order_id` int(11) NOT NULL,
  `order_num` varchar(45) DEFAULT NULL,
  `customer_id` int(11) NOT NULL DEFAULT '0',
  `customer_uuid` varchar(45) NOT NULL,
  `actual_cost` double(10,2) NOT NULL DEFAULT '0.00',
  `actual_charge` double(10,2) NOT NULL DEFAULT '0.00',
  `batch_id` varchar(30) DEFAULT NULL,
  `billed_charge` double(10,2) NOT NULL DEFAULT '0.00',
  `billed_cost` double(10,2) NOT NULL DEFAULT '0.00',
  `billed_weight` double(10,2) NOT NULL DEFAULT '0.00',
  `billed_weight_uom` varchar(10) DEFAULT NULL,
  `billing_account` varchar(45) DEFAULT NULL,
  `is_billing_status_id` tinyint(1) NOT NULL DEFAULT '0',
  `billing_status_name` varchar(50) DEFAULT NULL,
  `billing_type` enum('SOLUSHIP ACCT','COLLECT','THIRD PARTY') NOT NULL DEFAULT 'SOLUSHIP ACCT',
  `business_id` int(11) NOT NULL DEFAULT '0',
  `business_uuid` varchar(32) NOT NULL,
  `cod_currency` varchar(50) DEFAULT NULL,
  `cod_value` double(10,2) NOT NULL DEFAULT '0.00',
  `is_docs_only` tinyint(1) NOT NULL DEFAULT '0',
  `dutiable_value` double(10,2) NOT NULL DEFAULT '0.00',
  `from_zone` varchar(30) DEFAULT NULL,
  `to_zone` varchar(30) DEFAULT NULL,
  `invoice_note` varchar(255) DEFAULT NULL,
  `loomis_label_id` int(11) NOT NULL DEFAULT '0',
  `manifest_num` varchar(45) DEFAULT NULL,
  `master_carrier_id` int(11) NOT NULL DEFAULT '0',
  `master_carrier_name` varchar(100) DEFAULT NULL,
  `master_service_id` int(11) NOT NULL DEFAULT '0',
  `master_service_name` varchar(100) DEFAULT NULL,
  `slave_carrier_id` int(11) NOT NULL DEFAULT '0',
  `slave_carrier_name` varchar(100) DEFAULT NULL,
  `slave_service_id` int(11) NOT NULL DEFAULT '0',
  `slave_service_name` varchar(100) DEFAULT NULL,
  `master_tracking_num` varchar(255) DEFAULT NULL,
  `order_currency` varchar(10) DEFAULT NULL,
  `order_status_id` int(11) NOT NULL DEFAULT '0',
  `order_status_name` varchar(50) DEFAULT NULL,
  `package_type_id` int(11) NOT NULL DEFAULT '0',
  `pickup_confirmation_number` varchar(100) DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT '0',
  `quote_cost` double(10,2) NOT NULL DEFAULT '0.00',
  `quote_total` double(10,2) NOT NULL DEFAULT '0.00',
  `quoted_weight` double(10,2) NOT NULL DEFAULT '0.00',
  `quoted_weight_uom` varchar(10) DEFAULT NULL,
  `ref_code` varchar(45) DEFAULT NULL,
  `reference_code` varchar(255) DEFAULT NULL,
  `reference_code_name` varchar(255) DEFAULT NULL,
  `reference1` varchar(255) DEFAULT NULL,
  `reference1_name` varchar(255) DEFAULT NULL,
  `reference2` varchar(255) DEFAULT NULL,
  `reference2_name` varchar(255) DEFAULT NULL,
  `refunded_amount` double(10,2) NOT NULL DEFAULT '0.00',
  `scheduled_ship_date` date DEFAULT NULL,
  `signature_required` int(11) NOT NULL DEFAULT '0',
  `tracking_url` text,
  `unit_of_measure_id` int(11) NOT NULL DEFAULT '0',
  `created_by` varchar(32) NOT NULL,
  `updated_by` varchar(32) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`order_uuid`),
  UNIQUE KEY `order_id_UNIQUE` (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `package_types`
--

DROP TABLE IF EXISTS `package_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `package_types` (
  `package_type_uuid` varchar(32) NOT NULL,
  `package_type_id` int(11) NOT NULL,
  `package_type_name` varchar(255) DEFAULT NULL,
  `package_type` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_by` varchar(32) NOT NULL,
  `updated_by` varchar(32) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`package_type_uuid`),
  UNIQUE KEY `package_type_id_UNIQUE` (`package_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `packages`
--

DROP TABLE IF EXISTS `packages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `packages` (
  `package_uuid` varchar(32) NOT NULL,
  `package_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL DEFAULT '0',
  `order_uuid` varchar(45) NOT NULL,
  `actual_package_type` varchar(50) DEFAULT NULL,
  `billed_weight` double(10,2) NOT NULL DEFAULT '0.00',
  `carrier_length` double(10,2) NOT NULL DEFAULT '0.00',
  `carrier_width` double(10,2) NOT NULL DEFAULT '0.00',
  `carrier_height` double(10,2) NOT NULL DEFAULT '0.00',
  `carrier_weight` double(10,2) NOT NULL DEFAULT '0.00',
  `cod_label` mediumblob,
  `cod_value` double(10,2) NOT NULL DEFAULT '0.00',
  `description` varchar(255) DEFAULT NULL,
  `dimmed_string` varchar(50) DEFAULT NULL,
  `freight_class` varchar(255) DEFAULT NULL,
  `length` double(10,2) NOT NULL DEFAULT '0.00',
  `width` double(10,2) NOT NULL DEFAULT '0.00',
  `height` double(10,2) NOT NULL DEFAULT '0.00',
  `weight` double(10,2) NOT NULL DEFAULT '0.00',
  `insurance_amount` double(10,2) NOT NULL DEFAULT '0.00',
  `label` mediumblob,
  `leg_order_id` int(11) NOT NULL DEFAULT '0',
  `link_to_package` int(11) NOT NULL DEFAULT '0',
  `package_level` int(11) NOT NULL DEFAULT '0',
  `package_type` varchar(255) DEFAULT NULL,
  `reference1` varchar(50) DEFAULT NULL,
  `reference2` varchar(50) DEFAULT NULL,
  `reference3` varchar(50) DEFAULT NULL,
  `service_destination_string` varchar(255) DEFAULT NULL,
  `tracking_number` varchar(255) DEFAULT NULL,
  `weight_uom` varchar(10) DEFAULT NULL,
  `created_by` varchar(32) NOT NULL,
  `updated_by` varchar(32) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`package_uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `pickup_statuses`
--

DROP TABLE IF EXISTS `pickup_statuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pickup_statuses` (
  `pickup_status_uuid` varchar(32) NOT NULL,
  `pickup_status_id` int(11) DEFAULT NULL,
  `pickup_status_name` varchar(45) DEFAULT NULL,
  `created_by` varchar(32) DEFAULT NULL,
  `updated_by` varchar(32) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`pickup_status_uuid`),
  UNIQUE KEY `pickup_status_id_UNIQUE` (`pickup_status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `pickups`
--

DROP TABLE IF EXISTS `pickups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pickups` (
  `pickup_uuid` varchar(32) NOT NULL,
  `pickup_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL DEFAULT '0',
  `order_uuid` varchar(45) NOT NULL,
  `address_id` int(11) DEFAULT NULL,
  `address_uuid` varchar(45) NOT NULL,
  `business_id` int(11) NOT NULL DEFAULT '0',
  `business_uuid` varchar(32) NOT NULL,
  `pickupscol` varchar(32) DEFAULT NULL,
  `carrier_id` int(11) NOT NULL DEFAULT '0',
  `carrier_reference` varchar(50) DEFAULT NULL,
  `customer_id` int(11) NOT NULL DEFAULT '0',
  `customer_uuid` varchar(32) NOT NULL,
  `ready_hour` varchar(5) NOT NULL DEFAULT '00:00',
  `ready_min` varchar(5) NOT NULL DEFAULT '00:00',
  `close_hour` varchar(5) NOT NULL DEFAULT '00:00',
  `close_min` varchar(5) NOT NULL DEFAULT '00:00',
  `confirmation_num` varchar(50) DEFAULT NULL,
  `destination_country_code` varchar(10) DEFAULT NULL,
  `instructions` varchar(100) DEFAULT NULL,
  `is_overweight` tinyint(1) NOT NULL DEFAULT '0',
  `location` varchar(50) DEFAULT NULL,
  `package_type_id` int(11) NOT NULL DEFAULT '0',
  `pickup_date` date NOT NULL,
  `pickup_status_id` int(11) NOT NULL DEFAULT '0',
  `quantity` int(11) DEFAULT NULL,
  `reference` varchar(50) DEFAULT NULL,
  `service_id` int(11) NOT NULL DEFAULT '0',
  `total_weight` double(10,2) NOT NULL DEFAULT '0.00',
  `tracking_num` varchar(50) DEFAULT NULL,
  `created_by` varchar(32) NOT NULL,
  `updated_by` varchar(32) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`pickup_uuid`),
  UNIQUE KEY `pickup_id_UNIQUE` (`pickup_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `product_uuid` varchar(32) NOT NULL,
  `product_id` int(11) NOT NULL,
  `back_order_count` int(11) NOT NULL DEFAULT '0',
  `customer_id` int(11) NOT NULL DEFAULT '0',
  `customer_uuid` varchar(32) NOT NULL,
  `harmonized_code` varchar(30) DEFAULT NULL,
  `length` double(10,2) NOT NULL DEFAULT '0.00',
  `width` double(10,2) NOT NULL DEFAULT '0.00',
  `height` double(10,2) NOT NULL DEFAULT '0.00',
  `weight` double(10,2) NOT NULL DEFAULT '0.00',
  `weight_unit` varchar(10) DEFAULT NULL,
  `in_queue_count` int(11) NOT NULL DEFAULT '0',
  `location_count` int(11) NOT NULL DEFAULT '0',
  `origin_country` varchar(12) DEFAULT NULL,
  `primary_location_id` int(11) NOT NULL DEFAULT '0',
  `product_code` varchar(20) DEFAULT NULL,
  `product_description` text,
  `product_line_id` int(11) NOT NULL DEFAULT '0',
  `product_name` varchar(50) DEFAULT NULL,
  `quarantine_count` int(11) NOT NULL DEFAULT '0',
  `reference1` varchar(45) DEFAULT NULL,
  `reference1_name` varchar(45) DEFAULT NULL,
  `sku_id` varchar(45) DEFAULT NULL,
  `total_count` int(11) NOT NULL DEFAULT '0',
  `unit_cost` double(10,2) NOT NULL DEFAULT '0.00',
  `unit_price` double(10,2) NOT NULL DEFAULT '0.00',
  `unit_of_measure_id` int(11) NOT NULL DEFAULT '0',
  `wip_count` int(11) NOT NULL DEFAULT '0',
  `created_by` varchar(32) NOT NULL,
  `updated_by` varchar(32) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`product_uuid`),
  UNIQUE KEY `product_id_UNIQUE` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `shipping_labels`
--

DROP TABLE IF EXISTS `shipping_labels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shipping_labels` (
  `shipping_label_uuid` varchar(32) NOT NULL,
  `shipping_label_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL DEFAULT '0',
  `order_uuid` varchar(32) NOT NULL,
  `bol_label_path` varchar(255) DEFAULT NULL,
  `customs_label_path` varchar(255) DEFAULT NULL,
  `html` mediumblob,
  `label` mediumblob,
  `label_type` varchar(10) DEFAULT NULL,
  `is_label_updated` tinyint(1) NOT NULL DEFAULT '0',
  `original_label` mediumblob,
  `shipping_label_path` varchar(255) DEFAULT NULL,
  `summary_label_path` varchar(255) DEFAULT NULL,
  `tracking_number` varchar(255) DEFAULT NULL,
  `created_by` varchar(32) NOT NULL,
  `updated_by` varchar(32) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`shipping_label_uuid`),
  UNIQUE KEY `shipping_label_id_UNIQUE` (`shipping_label_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `unit_of_measures`
--

DROP TABLE IF EXISTS `unit_of_measures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `unit_of_measures` (
  `unit_of_measure_uuid` varchar(32) NOT NULL,
  `unit_of_measure_id` int(5) NOT NULL,
  `unit_of_measure_name` varchar(255) DEFAULT NULL,
  `created_by` varchar(32) NOT NULL,
  `updated_by` varchar(32) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`unit_of_measure_uuid`),
  UNIQUE KEY `unit_of_measure_id_UNIQUE` (`unit_of_measure_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `users_info`
--

DROP TABLE IF EXISTS `users_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_info` (
  `user_info_uuid` varchar(32) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `customer_id` int(11) NOT NULL DEFAULT '0',
  `customer_uuid` varchar(32) NOT NULL,
  `business_id` int(11) NOT NULL DEFAULT '0',
  `business_uuid` varchar(32) NOT NULL,
  `user_role` varchar(50) DEFAULT NULL,
  `user_status` enum('ACTIVE','DEACTIVE') NOT NULL DEFAULT 'ACTIVE',
  `last_login` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `locale` varchar(10) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `remember_token` varchar(32) DEFAULT NULL,
  `session_timeout` int(3) NOT NULL DEFAULT '30',
  `user_email` varchar(100) DEFAULT NULL,
  `created_by` varchar(32) NOT NULL,
  `updated_by` varchar(32) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_info_uuid`),
  UNIQUE KEY `user_name_UNIQUE` (`user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `users_preference`
--

DROP TABLE IF EXISTS `users_preference`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_preference` (
  `user_preference_uuid` varchar(32) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `inbound_schedule_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_auto_fright` tinyint(1) NOT NULL DEFAULT '0',
  `is_auto_pickup` tinyint(1) NOT NULL DEFAULT '0',
  `is_chat_panel` tinyint(1) NOT NULL DEFAULT '0',
  `is_cloud_print` tinyint(1) NOT NULL DEFAULT '0',
  `is_disable_view_shipment` tinyint(1) NOT NULL DEFAULT '0',
  `is_inbound_notification` tinyint(1) NOT NULL DEFAULT '0',
  `is_label_auto_print` tinyint(1) NOT NULL DEFAULT '0',
  `is_summary_lable` tinyint(1) NOT NULL DEFAULT '0',
  `is_CHB` tinyint(1) NOT NULL DEFAULT '0',
  `is_FPA` tinyint(1) NOT NULL DEFAULT '0',
  `is_FWD` tinyint(1) NOT NULL DEFAULT '0',
  `is_LTL` tinyint(1) NOT NULL DEFAULT '0',
  `is_SPD` tinyint(1) NOT NULL DEFAULT '0',
  `number_of_customs` smallint(1) NOT NULL DEFAULT '1',
  `number_of_label` smallint(1) NOT NULL DEFAULT '1',
  `unit_of_measure` enum('1','2') NOT NULL DEFAULT '1',
  `created_by` varchar(32) NOT NULL,
  `updated_by` varchar(32) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_preference_uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-23 18:18:38
