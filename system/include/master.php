<?php
if (!AppConfig::get('is_master')) {
  die('-1');
}