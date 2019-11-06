ALTER TABLE `gossip_relationship` ADD `profile_auth` INT(1) NOT NULL COMMENT 'Authenticate = 1 ; Dispute = -1 ,Unsure = 0' AFTER `accept`;
ALTER TABLE `gossip_relationship` CHANGE `profile_auth` `profile_auth` INT(1) NULL COMMENT 'Authenticate = 1 ; Dispute = -1 ,Unsure = 0';
ALTER TABLE `gossip_relationship` CHANGE `accept` `accept` INT(1) NULL COMMENT 'accept = 1 , Dispute = 0';