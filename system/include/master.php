<?php
if (!AppConfig::get('config/is_master')) {
  die('-1');
}