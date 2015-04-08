<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 5.0 Transitional//EN">

<html>
<head>
	<title>Untitled</title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" /> 
	<link href="styles.css" rel="stylesheet" type= "text/css" >
	<link href='http://fonts.googleapis.com/css?family=Lora:400,400italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
</head>
<body>
    <div id = "topbar" >
        <a id="title">Untitled</a>
        <ul id="toolbar">
            <div class="group">
                <li class="element"> <a class="ql-bold"><b>B</b></a></li>
                <li class="element"> <a class="ql-italic"><i>I</i></a></li>
                <li class="element"> <a class="ql-strike"><strike>S</strike></a></li>
                <li class="element"> <a class="ql-underline"><u>U</u></a></li>
            </div>
            <div class="separator"></div> 
            
            <div class="group">
                <li class="element"> <a>Paragraph</a></li>
            </div>  
            <div class="separator"></div>            
            
            <div class="group">
                <li class="element"> <a>&bull;_</a></li>
                <li class="element"> <a>1._</a></li>
            </div>
            <div class="separator"></div>            
                        
            <div class="group">
                <li class="element"> <a>Math</a></li>
                <li class="element"> <a>Img</a></li>
            </div>
        </ul>
    </div>
	
    <div class= "container" id="editor" >
        <h1>Heading</h1>
        <p>This is a test.</p>
    </div>
    
    <!-- IMPORT EVERY MODULE OF IPIETER DOCS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdn.quilljs.com/0.19.10/quill.js"></script>
    <script>
        var editor = new Quill('#editor');
        editor.addModule('toolbar', { container: '#toolbar' });
    </script>
    <script src="docs/base.js"></script>
    
</body>
</html>
  