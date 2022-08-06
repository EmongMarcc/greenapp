<div>
    <div class="w-full flex h-full min-h-screen bg-gray-800" :class="{ 'overflow-hidden': isSideMenuOpen }">
    <livewire:dash.page.sidetoggle />
      <div class="w-full">
            <div class="flex flex-col flex-1 w-full overflow-y-auto">
                <main class="">
                    <div class="bg-gray-100 rounded-3xl border-4 border-green-400 flex mb-4 mx-4 pb-10">
                        <div class="rounded-3xl w-full">
                          <div class="bg-white p-4 shadow-lg rounded-lg">
                              <h1 class="font-bold text-base">Group of Countries in 1 VISA</h1>
                              <div class="mt-4">
                                  <div class="flex flex-col">
                                      <div class="-my-2 overflow-x-auto">
                                          <div class="py-2 align-middle inline-block min-w-full">
                                              <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-white">
                                                  <table class="min-w-full divide-y divide-gray-200">
                                                      <thead>
                                                          <tr>
                                                              <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                  <div class="flex cursor-pointer">
                                                                      <span class="mr-2">id</span>
                                                                  </div>
                                                              </th>
                                                              <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                  <div class="flex cursor-pointer">
                                                                      <span class="mr-2">Offers</span>
                                                                  </div>
                                                              </th>
                                                              <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                  <div class="flex cursor-pointer">
                                                                      <span class="mr-2">COUNTRY</span>
                                                                  </div>
                                                              </th>
                                                              <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                  <div class="flex cursor-pointer">
                                                                      <span class="mr-2">ACTION</span>
                                                                  </div>
                                                              </th>
                                                          </tr>
                                                      </thead>
                                                      <tbody class="bg-white divide-y divide-gray-200">
                                                          <?php foreach ($touroffers as $tour): ?>
                                                          <tr>
                                                              <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                  <p>{{$tour->id}}</p>
                                                              </td>
                                                              <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                  <p>{{$tour->title}}</p>
                                                              </td>
                                                              <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                  <p>{{$tour->countryId}}</p>
                                                              </td>
                                                              <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <div class="flex space-x-4">
                                                                  <form action="{{url('deleteTours/'.$tour->id)}}" method="post">
                                                                  @csrf
                                                                    <button type="submit" class="text-red-500 hover:text-red-600">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1 ml-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                                    </svg>
                                                                    </button>
                                                                  </form>
                                                                </div>
                                                              </td>
                                                          </tr>
                                                        <?php endforeach; ?>
                                                      </tbody>
                                                  </table>
                                                  <style media="screen">
                                                .se-wrapper-inner.se-wrapper-wysiwyg.sun-editor-editable {
                                                  text-align: left;
                                                }
                                                </style>
                                                  <link href="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/css/suneditor.min.css" rel="stylesheet">
                                                  <form action="/offerposts" method="post"  class="p-3 relative rounded-lg shadow-md w-full" enctype="multipart/form-data">
                                                    @csrf
                                                    <h1 class="text-3xl sm:text-6xl text-green-400 text-center font-black">News </h1>
                                                    <div class="flex flex-col">
                                                  </div>
                                                    <input type="text" name="title" placeholder="Header" class="form-input px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pr-10">
                                                    <input type="text" name="tour_img" placeholder="tour url" class="form-input px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pr-10">
                                                    <input type="text" name="keywords" placeholder="keywords" class="form-input px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pr-10">
                                                    <textarea name="description" id="bodyContent" style="display:none;"></textarea>
                                                    <textarea id="editor_classic" style="display:none;"></textarea>
                                                    <input name="json_include[flight]" class="form-input px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pr-10" placeholder="flight">
                                                    <input name="json_include[hotel]" class="form-input px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pr-10" placeholder="hotel">
                                                    <input name="json_include[travelInsurance]" class="form-input px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pr-10" placeholder="travelInsurance">
                                                    <input name="json_include[cityTours]" class="form-input px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pr-10" placeholder="cityTours">
                                                    <input name="json_include[transfer]" class="form-input px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pr-10" placeholder="transfer">
                                                    <label for="Sitelink">Sitelink</label>
                                                    <input type="text" name="offer_sitelink" placeholder="tourpack" class="form-input px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pr-10">
                                                    <label for="DateStart">Date Start</label>
                                                    <input id="DateStart" type="date" name="datestart" class="form-input px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pr-10">
                                                    <label for="DateEnd">Date End</label>
                                                    <input id="DateEnd" type="date" name="dateend" class="form-input px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pr-10">
                                                    <label for="DatePublish">Date Publish</label>
                                                    <input id="DatePublish" type="date" name="datepublish" class="form-input px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pr-10">
                                                        <select name="countryId" class="form-input px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pr-10" name="">
                                                          <option>Select Country</option>
                                                          <?php foreach ($countryblogs as $blogs): ?>
                                                            <option  value="{{$blogs->category}}">{{$blogs->title}}</option>
                                                          <?php endforeach; ?>
                                                        </select>
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
                    </div>
                </main>
            </div>
        </div>
    </div>
</div>
