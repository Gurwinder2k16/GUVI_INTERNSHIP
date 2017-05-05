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
 Select Language <select id="demolist" onchange="select_code(this.options[this.selectedIndex].value)">
    <option value="1">C</option>
    <option value="2">C++</option>
    <option value="3">JAVA</option>
    <option value="4">Objective C</option>
    <option value="5">Scala</option>
    <option value="6">Kotlin</option>
    <option value="7">Cylon</option>
  </select></form>
 </section>  </br>
<textarea rows="4" cols="50" name="codesnippet_editable" id="codesnippet_editable">
import com.demo.util.MyType;
import com.demo.util.MyInterface;

public enum Enum {
  VAL1, VAL2, VAL3
}

public class Class<T, V> implements MyInterface {
  public static final MyType<T, V> member;
  
  private class InnerClass {
    public int zero() {
      return 0;
    }
  }

  @Override
  public MyType method() {
    return member;
  }

  public void method2(MyType<T, V> value) {
    method();
    value.method3();
    member = value;
  }
}
</textarea>
<button onclick="operation()">Click me!!!</button>
</br>

<script>

var editor = CodeMirror.fromTextArea(document.getElementById("codesnippet_editable"), {
    lineNumbers: true,
    matchBrackets: true,
    mode: "text/x-java"
  });
function select_code(opt)
{    if(opt.value=="C")
	{
	 var editor = CodeMirror.fromTextArea(document.getElementById("codesnippet_editable"), {
        lineNumbers: true,
        matchBrackets: true,
        mode: "text/x-csrc"
	});}
	else if(opt.value=="C++"){
      var editor = CodeMirror.fromTextArea(document.getElementById("codesnippet_editable"), {
        lineNumbers: true,
        matchBrackets: true,
        mode: "text/x-c++src"
	});}
	else if(opt.value=="JAVA"){
      var editor= CodeMirror.fromTextArea(document.getElementById("codesnippet_editable"), {
        lineNumbers: true,
        matchBrackets: true,
        mode: "text/x-java"
	});}
	else if(opt.value=="Objective C"){
      var editor= CodeMirror.fromTextArea(document.getElementById("codesnippet_editable"), {
        lineNumbers: true,
        matchBrackets: true,
        mode: "text/x-objectivec"
	});}
	else if(opt.value=="Scala"){
      var editor = CodeMirror.fromTextArea(document.getElementById("codesnippet_editable"), {
        lineNumbers: true,
        matchBrackets: true,
        mode: "text/x-scala"
	});}
	else if(opt.value=="Kotlin"){
      var editor= CodeMirror.fromTextArea(document.getElementById("codesnippet_editable"), {
          lineNumbers: true,
          matchBrackets: true,
          mode: "text/x-kotlin"
	});}
	else if(opt.value=="Cylon"){
      var editor= CodeMirror.fromTextArea(document.getElementById("codesnippet_editable"), {
          lineNumbers: true,
          matchBrackets: true,
          mode: "text/x-ceylon"
	});}
}  
function operation()
{
alert(editor.getValue());
	
}
</script>
</body>
</html>