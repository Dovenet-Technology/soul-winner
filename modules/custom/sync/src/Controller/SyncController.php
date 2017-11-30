<?php
/**
 *@file
 *contains \Drupal\sync\Controller\SyncController.
 *
 */

 namespace Drupal\sync\Controller;

 use Drupal\Core\Controller\ControllerBase;

 class SyncController extends ControllerBase{
     public function content(){
         return array(
             #type => 'markup',
             #markup => t('Hello World'),
         );
     }
 }