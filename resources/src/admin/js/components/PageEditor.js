import suneditor from 'suneditor'
import plugins from 'suneditor/src/plugins'

export default class PageEditor {

  constructor() {
    if (this.setVars()) {
      this.initEditor();
    }
  }

  setVars() {
    this.selectors = {
      'editor': '[js-page-editor]',
    };

    this.editorEl = document.querySelector(this.selectors.editor);

    if (!this.editorEl) return false;

    return true;
  }

  initEditor() {
    this.editor = suneditor.create(this.editorEl, {
      plugins: plugins,
      buttonList: [
          ['fontSize', 'formatBlock'],
          ['bold', 'underline', 'italic', 'strike', 'subscript', 'superscript'],
          ['fontColor', 'hiliteColor'],
          ['removeFormat'],
          ['indent', 'outdent'],
          ['align', 'horizontalRule', 'list', 'table'],
          ['link', 'image', 'video'],
          ['fullScreen', 'showBlocks', 'codeView'],
      ],
      height : 400,
      resizingBar: false,
      stickyToolbar: 65,
    });
  }
}
