<?php
// Ouverture balise form
  // Définir une action
function openForm($action = "#")
{
  return "<form method='POST' action='". $action . "'>";
}

// Fermeture balise form
function closeTag($tag)
{
  return "</" . $tag . ">";
}
/*
  $type = string
  $name = string
  $value = string
  $label = string
*/

function createElement($title, $responses)
{

  $html = "<fieldset>";
  $html .= "<h4>" . $title . "</h4>";
  $html .= "<div>";
  foreach ($responses as $key => $value) {
    $html .= "<input type='" . $value['type'] . "' name='" . $value['name'] . "' id='" . $value['id'] . "' value='" . $value['value'] . "'/>" ;
    $html .= "<label for='" . $value['id'] . "'>" . $value['content'] . "</label>" ;
  }
  $html .= "</div>";
  $html .= "</fieldset>";
  return $html;

}



// Mise en place input avec un label
function createInputB($type, $name, $id, $value = "", $for, $label)
{
  return "<input type='" . $type . "' name='" . $name . "' id='" . $id . "' value='" . $value . "'><label for='" . $for . "'>" . $label . "</label>";
}

function createInput($type, $name, $value = "", $label)
{
  return "<label>" . $label . "</label><input type='" . $type . "' name='" . $name . "' value='" . $value . "'>";
}

function createInputText($type, $name, $id, $placeholder)
{
  return "<input type='" . $type . "' name='" . $name . "' id='" . $id . "' placeholder='" . $placeholder . "'>";
}

// Mise en place d'un select
function createSelect($name, $label, $options)
{
  $html = "<label>" . $label . "</label>";
  $html .= "<select>'" . $name . "'>";
  foreach ($options as $key => $value)
  {
    $html .= "<option value ='" . $value['value'] . "'>" . $value['content'] . "</option>";
  }
  $html .= "</select>";
  return $html;
}

// Génerer bouton submit
function createSubmit($value, $class)
{
  return "<input type='submit' value='" . $value . "' class='" . $class . "'>";
}

function openH3($value)
{
  return "<h3>" . $value . "</h3>";
}
