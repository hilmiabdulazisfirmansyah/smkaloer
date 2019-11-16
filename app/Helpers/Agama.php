<?php

function agama($id){
   switch ($id) {
      case 1:
      return "Islam";
      break;

      case 2:
      return "Kristen";
      break;

      case 3:
      return "Katholik";
      break;

      case 4:
      return "Hindu";
      break;

      case 5:
      return "Budha";
      break;

      case 6:
      return "Kong Hu Chu";
      break;

      case 7:
      return "Kepercayaan kpd Tuhan YME";
      break;
      
      default:
      return "Lainnya";
      break;
   }
}