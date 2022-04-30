/**
 * External Dependencies
 */
import 'jquery';
import 'bootstrap';
import customCursor from './custom/customCursor';
import hoverEffekt from './custom/hoverEffekt';
import gallery from './custom/gallery';
import animateText from './custom/animateText';
import header from './custom/header';

$(() => {
  customCursor();
  hoverEffekt();
  gallery();
  animateText();
  header();
});
