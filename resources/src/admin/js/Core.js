import initComponents from './components/_initComponents';

class Core {
  constructor() {
    Core.run();
  }

  static run() {
    initComponents();
  }
}

const ready = (fn) => {
  if (document.attachEvent
    ? document.readyState === 'complete'
    : document.readyState !== 'loading'
  ) {
    fn();
  } else {
    document.addEventListener('DOMContentLoaded', fn);
  }
};

ready(() => {
  new Core();
});
