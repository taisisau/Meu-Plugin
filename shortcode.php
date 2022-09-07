<?php
/**
*
*Este arquivo contém o shortcode.
*
*/
'add_shortcode'('simple_contact_form', 'myContactFormRender');
function myContactFormRender() {
  ob_start();
  'myContactForm'();
  return ob_get_clean();
}


