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
import locomotiveScroll from './custom/locomotiveScroll';
import socialLinks from './custom/socialLinks';

$(() => {
  customCursor();
  hoverEffekt();
  gallery();
  animateText();
  header();
  locomotiveScroll();
  socialLinks();
});
