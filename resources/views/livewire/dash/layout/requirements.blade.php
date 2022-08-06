<div class="mt-5">
  <style media="screen">
.se-wrapper-inner.se-wrapper-wysiwyg.sun-editor-editable {
  text-align: left;
}
</style>
  <link href="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/css/suneditor.min.css" rel="stylesheet">
  <form action="/requirements/{{$category_id}}" method="post"  class="p-3 relative rounded-lg shadow-md w-full">
    @csrf
    <div class="flex flex-col">
  </div>
  <select name="reqtype" class="form-input text-wrap px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pr-10">
    <option value="Tourist">Tourist Visa</option>
    <option value="Business">Business Visa</option>
    <option value="Medical">Medical Visa</option>
  </select>
  <textarea name="reqbody" id="bodyContent" style="display:none;"></textarea>
  <textarea id="editor_classic" style="display:none;"></textarea>
  <button  type="button" class="active:bg-yellow-700 bg-yellow-500 border border-transparent cursor-pointer duration-150 ease-in-out focus:border-yellow-700 focus:outline-none focus:shadow-outline-yellow font-medium hover:bg-yellow-600 inline-flex justify-center leading-5 my-1.5 px-4 py-2 rounded-md text-sm text-white transition w-full" onclick="sunEditorMyFunction()">Update Content</button>
<input id="asdasasd" style="display:none;" type="submit" value="POST" class="active:bg-indigo-700 bg-indigo-500 border border-transparent cursor-pointer duration-150 ease-in-out focus:border-indigo-700 focus:outline-none focus:shadow-outline-indigo font-medium hover:bg-indigo-600 inline-flex justify-center leading-5 my-1.5 px-4 py-2 rounded-md text-sm text-white transition w-full">
  </form>
  <script src="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/suneditor.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/codemirror@5.49.0/lib/codemirror.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/codemirror@5.49.0/mode/htmlmixed/htmlmixed.js"></script>
<script src="https://cdn.jsdelivr.net/npm/codemirror@5.49.0/mode/css/css.js"></script>
<script src="https://cdn.jsdelivr.net/npm/katex@0.11.1/dist/katex.min.js"></script>
<script>
  var editor =  SUNEDITOR.create('editor_classic', {
    display: 'block',
    width: '100%',
    height: 'auto',
    imageFileInput: false,
    popupDisplay: 'full',
    charCounter: true,
    charCounterLabel: 'Characters :',
    buttonList: [
      // default
      ['undo', 'redo'],
      ['font', 'fontSize', 'formatBlock'],
      ['paragraphStyle', 'blockquote'],
      ['bold', 'underline', 'italic', 'strike'],
      ['fontColor', 'hiliteColor', 'textStyle'],
      ['removeFormat'],
      ['outdent', 'indent'],
      ['align', 'horizontalRule', 'list', 'lineHeight'],
      ['table','math'],
      ['fullScreen', 'showBlocks', 'codeView'],
      ['preview', 'print','image'],
      // (min-width: 1546)
      ['%1546', [
        ['undo', 'redo'],
        ['font', 'fontSize', 'formatBlock'],
        ['paragraphStyle', 'blockquote'],
        ['bold', 'underline', 'italic', 'strike'],
        ['fontColor', 'hiliteColor', 'textStyle'],
        ['removeFormat'],
        ['outdent', 'indent'],
        ['align', 'horizontalRule', 'list', 'lineHeight'],
        ['table','math'],
        ['fullScreen', 'showBlocks', 'codeView'],
        ['-right', ':i-More Misc-default.more_vertical', 'preview', 'print','image']
        ]],
        // (min-width: 1455)
        ['%1455', [
        ['undo', 'redo'],
        ['font', 'fontSize', 'formatBlock'],
        ['paragraphStyle', 'blockquote'],
        ['bold', 'underline', 'italic', 'strike'],
        ['fontColor', 'hiliteColor', 'textStyle'],
        ['removeFormat'],
        ['outdent', 'indent'],
        ['align', 'horizontalRule', 'list', 'lineHeight'],
        ['table', 'math'],
        ['-right', ':i-More Misc-default.more_vertical', 'fullScreen', 'showBlocks', 'codeView', 'preview', 'print','image']
        ]],
        // (min-width: 1326)
        ['%1326', [
        ['undo', 'redo'],
        ['font', 'fontSize', 'formatBlock'],
        ['paragraphStyle', 'blockquote'],
        ['bold', 'underline', 'italic', 'strike'],
        ['fontColor', 'hiliteColor', 'textStyle'],
        ['removeFormat'],
        ['outdent', 'indent'],
        ['align', 'horizontalRule', 'list', 'lineHeight'],
        ['-right', ':i-More Misc-default.more_vertical', 'fullScreen', 'showBlocks', 'codeView', 'preview', 'print','image'],
        ['-right', ':r-More Rich-default.more_plus', 'table', 'math']
        ]],
        // (min-width: 1123)
        ['%1123', [
        ['undo', 'redo'],
        [':p-More Paragraph-default.more_paragraph', 'font', 'fontSize', 'formatBlock', 'paragraphStyle', 'blockquote'],
        ['bold', 'underline', 'italic', 'strike'],
        ['fontColor', 'hiliteColor', 'textStyle'],
        ['removeFormat'],
        ['outdent', 'indent'],
        ['align', 'horizontalRule', 'list', 'lineHeight'],
        ['-right', ':i-More Misc-default.more_vertical', 'fullScreen', 'showBlocks', 'codeView', 'preview', 'print','image'],
        ['-right', ':r-More Rich-default.more_plus', 'table', 'math']
        ]],
        // (min-width: 817)
        ['%817', [
        ['undo', 'redo'],
        [':p-More Paragraph-default.more_paragraph', 'font', 'fontSize', 'formatBlock', 'paragraphStyle', 'blockquote'],
        ['bold', 'underline', 'italic', 'strike'],
        [':t-More Text-default.more_text', 'fontColor', 'hiliteColor', 'textStyle'],
        ['removeFormat'],
        ['outdent', 'indent'],
        ['align', 'horizontalRule', 'list', 'lineHeight'],
        ['-right', ':i-More Misc-default.more_vertical', 'fullScreen', 'showBlocks', 'codeView', 'preview', 'print','image'],
        ['-right', ':r-More Rich-default.more_plus', 'table', 'math']
        ]],
        // (min-width: 673)
        ['%673', [
        ['undo', 'redo'],
        [':p-More Paragraph-default.more_paragraph', 'font', 'fontSize', 'formatBlock', 'paragraphStyle', 'blockquote'],
        [':t-More Text-default.more_text', 'bold', 'underline', 'italic', 'strike', 'fontColor', 'hiliteColor', 'textStyle'],
        ['removeFormat'],
        ['outdent', 'indent'],
        ['align', 'horizontalRule', 'list', 'lineHeight'],
        [':r-More Rich-default.more_plus', 'table', 'math'],
        ['-right', ':i-More Misc-default.more_vertical', 'fullScreen', 'showBlocks', 'codeView', 'preview', 'print','image']
        ]],
        // (min-width: 525)
        ['%525', [
        ['undo', 'redo'],
        [':p-More Paragraph-default.more_paragraph', 'font', 'fontSize', 'formatBlock', 'paragraphStyle', 'blockquote'],
        [':t-More Text-default.more_text', 'bold', 'underline', 'italic', 'strike', 'fontColor', 'hiliteColor', 'textStyle'],
        ['removeFormat'],
        ['outdent', 'indent'],
        [':e-More Line-default.more_horizontal', 'align', 'horizontalRule', 'list', 'lineHeight'],
        [':r-More Rich-default.more_plus', 'table', 'math'],
        ['-right', ':i-More Misc-default.more_vertical', 'fullScreen', 'showBlocks', 'codeView', 'preview', 'print','image']
        ]],
        // (min-width: 420)
        ['%420', [
        ['undo', 'redo'],
        [':p-More Paragraph-default.more_paragraph', 'font', 'fontSize', 'formatBlock', 'paragraphStyle', 'blockquote'],
        [':t-More Text-default.more_text', 'bold', 'underline', 'italic', 'strike', 'fontColor', 'hiliteColor', 'textStyle', 'removeFormat'],
        [':e-More Line-default.more_horizontal', 'outdent', 'indent', 'align', 'horizontalRule', 'list', 'lineHeight'],
        [':r-More Rich-default.more_plus', 'table', 'math'],
        ['-right', ':i-More Misc-default.more_vertical', 'fullScreen', 'showBlocks', 'codeView', 'preview', 'print','image']
        ]]
        ],
        placeholder: 'Start typing something...',
        value: '<p><br></p><p><br></p><p><br></p><p><br></p><p><br></p>',
        codeMirror: CodeMirror,
        katex: katex
      });
      function sunEditorMyFunction(){
  document.getElementById('bodyContent').innerHTML = editor.getContents();
  document.getElementById('asdasasd').style.display = 'block';
  event.preventDefault();
}
setInterval(function(){
  if (editor.getContents() != document.getElementById('bodyContent').value) {
    document.getElementById('asdasasd').style.display = 'none';
  } }, 3000);
    </script>

</div>
