<?php
 if (!defined('ABSPATH')) exit; $vendorDir = dirname(dirname(__FILE__)); $baseDir = dirname($vendorDir); return array( 'MailPoet\\Test\\SplitTests\\' => array($baseDir . '/tests/SplitTests'), 'MailPoet\\Test\\DataGenerator\\' => array($baseDir . '/tests/DataGenerator'), 'MailPoet\\Test\\DataFactories\\' => array($baseDir . '/tests/DataFactories'), 'MailPoet\\' => array($baseDir . '/lib'), 'MailPoetVendor\\' => array($baseDir . '/vendor-prefixed'), 'MailPoetTasks\\Release\\' => array($baseDir . '/tasks/release'), 'MailPoetGenerated\\' => array($baseDir . '/generated'), 'Html2Text\\' => array($vendorDir . '/soundasleep/html2text/src'), 'Cron\\' => array($vendorDir . '/mtdowling/cron-expression/src/Cron'), ); 