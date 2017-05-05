<!doctype html>
<head>
<script src="lib/codemirror.js"></script>
<link rel="stylesheet" href="lib/codemirror.css">
<script src="mode/javascript/javascript.js"></script>

<style>
body {
	background-color: #eee;
}
</style>
</head>
<body>
<section id=demo>
  <h2>SAMPLE PAGE GUVI INTERNSHIP</h2>

  <form style="position: relative; margin-top: .5em;">
 Select Language <select id="demolist" onchange="document.location = this.options[this.selectedIndex].value;">
    <option value="#">Other demos...</option>
    <option value="demo/complete.html">Autocompletion</option>
    <option value="demo/folding.html">Code folding</option>
    <option value="demo/theme.html">Themes</option>
    <option value="mode/htmlmixed/index.html">Mixed language modes</option>
    <option value="demo/bidi.html">Bi-directional text</option>
    <option value="demo/variableheight.html">Variable font sizes</option>
    <option value="demo/search.html">Search interface</option>
    <option value="demo/vim.html">Vim bindings</option>
    <option value="demo/emacs.html">Emacs bindings</option>
    <option value="demo/sublime.html">Sublime Text bindings</option>
    <option value="demo/tern.html">Tern integration</option>
    <option value="demo/merge.html">Merge/diff interface</option>
    <option value="demo/fullscreen.html">Full-screen editor</option>
    <option value="demo/simplescrollbars.html">Custom scrollbars</option>
  </select></form>
 </section>  </br>
<textarea rows="4" cols="50" name="codesnippet_editable" id="codesnippet_editable"></textarea>
<button onclick="operation()">Click me!!!</button>
</br>
<textarea rows="4" cols="50" name="codesnippet_editable1" id="codesnippet_editable1"></textarea>
<script>

var editor = CodeMirror.fromTextArea(document.getElementById("codesnippet_editable"), {
    lineNumbers: true,
    matchBrackets: true,
    mode: "text/x-csrc"
  });
var editor1 = CodeMirror.fromTextArea(document.getElementById("codesnippet_editable1"), {
    lineNumbers: true,
    matchBrackets: true,
    mode: "text/x-csrc"
  });
function operation()
{
alert("Text Inside Code Mirror 2");
editor1.setValue(editor.getValue());
	
}
</script>
</body>
</html>