/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/SQLTemplate.sql to edit this template
 */
/**
 * Author:  brijrajsingh
 * Created: 14-Oct-2023
 */

CREATE TABLE IF NOT EXISTS `fast2sms_api_log` 
(`id` INT NOT NULL AUTO_INCREMENT , `mobile` VARCHAR(15) NULL , `sent_otp` VARCHAR(8) NULL ,'
`is_verified` TINYINT(3)  DEFAULT 0 , `shop_id` INT(11) NULL DEFAULT 0 , `ip_address` VARCHAR(30) NULL , '
`user_agent` VARCHAR(100) NULL , `api_response` LONGTEXT NULL , `error` VARCHAR(255) NULL , '
`created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,`verified_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP'
 , PRIMARY KEY (`id`)) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8;