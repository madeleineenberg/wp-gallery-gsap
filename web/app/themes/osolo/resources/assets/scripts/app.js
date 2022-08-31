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
import submissions from './custom/submissions';
import rotatingText from './custom/rotatingText';
import imageReveal from './custom/image-reveal';
import heroStart from './custom/heroStart';

$(() => {
  customCursor();
  hoverEffekt();
  gallery();
  animateText();
  header();
  locomotiveScroll();
  socialLinks();
  submissions();
  rotatingText();
  imageReveal();
  heroStart();
});
