//from chatGPT

let editor = CodeMirror.fromTextArea(document.getElementById('code'), {
    lineNumbers: true,
    mode: 'javascript',
    autoSelect: true

});

//editor.setOption("indentUnit", 4);