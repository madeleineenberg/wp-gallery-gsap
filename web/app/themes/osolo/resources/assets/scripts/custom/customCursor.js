import Cursor from 'custom-cursor';

export default function () {
  new Cursor({
    count: 2,
    targets: [
      'a',
      '.navigation-title',
      '.menu-open',
      '.menu-close',
      '.gallery-title',
      '.split-child',
    ],
  });
}
