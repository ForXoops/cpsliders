# SQL Dump for complus sliders module
# PhpMyAdmin Version: 4.0.4
# http://www.phpmyadmin.net
#
# Host: localhost
# Generated on: Tue Jun 01, 2021 to 09:31:30
# Server version: 5.7.31
# PHP Version: 7.3.21

#
# Structure table for `cpsliders_sliders`
#

CREATE TABLE `cpsliders_sliders` (
  `slider_id` INT(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `slider_title` VARCHAR(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`slider_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

#
# Structure table for `cpsliders_elements`
#

CREATE TABLE `cpsliders_elements` (
  `element_id` INT(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `element_title` VARCHAR(255) NOT NULL DEFAULT '',
  `element_description` VARCHAR(255) NOT NULL DEFAULT '',
  `element_img` VARCHAR(255) NOT NULL DEFAULT '',
  `element_url` VARCHAR(255) NOT NULL DEFAULT '',
  `element_order` INT(6) NOT NULL DEFAULT '1',
  `element_visible` INT(1) DEFAULT '0',
  `element_slider_id` INT(8) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`element_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;