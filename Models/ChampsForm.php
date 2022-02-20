<?php

namespace Models;


class ChampsForm
{

  // fonction pour nettoyer et sécurer les champs input
  public static function  cleanInput($input)
  {
    strip_tags($input);
    htmlentities($input);
    stripslashes($input);
    trim($input);
    return $input;
  }
}
