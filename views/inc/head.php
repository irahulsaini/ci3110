<?php defined('BASEPATH') or exit('No direct access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <?php
    if(!empty($title)){
      echo '<title>'.$title.'</title>';
    }
  ?>

  <?php
    if(!empty($description)){
      echo '<meta name="description" content="'.$description.'"/>';
    }
  ?>

  <?php
    if(!empty($canonical)){
      echo '<link rel="canonical" href="'.$canonical.'"/>';
    }
  ?>
  <link rel="stylesheet" href="<?php echo template_url('assets/css/bootstrap.min.css');?>"/>
  <link rel="stylesheet" href="<?php echo template_url('assets/css/font-awesome.min.css');?>"/>
  <link rel="stylesheet" href="<?php echo template_url('assets/css/style.css');?>"/>
</head>