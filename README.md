# CI-FIle-Browser-Awesome
Simple plugin file browser for codeigniter with jQuery
<h1>Install</h1>
1. <b>application/controllers/file.php</b><br>
<pre>// Tentukan dulu URL path direktori yang akan di scan. Example: http://ibacor.com/download/file
private $dirpath = "http://your-domain.com/public_file";</pre><br>
2. <b>asset/js/fba.js</b><br>
<pre>// Setting: Base_URL/Controllers_name
var baseurl = 'http://your-domain.com/file';</pre><br>
3. <b>application/views/file.php</b><br>
<pre>
# Include Font Awesome
&lt;link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"&gt;
</pre>
<pre>
# Include jQuery
&lt;script src="//code.jquery.com/jquery-2.1.1.min.js"&gt;&lt;/script&gt;
</pre>
<pre>    
# Include fba.js
&lt;script src="&lt;?php echo base_url(); ?&gt;asset/js/fba.js"&gt;&lt;/script&gt;
</pre>
<pre>    
# Custom Style
&lt;link type="text/css" rel="stylesheet" href="&lt;?php echo base_url(); ?&gt;asset/css/fba.css" /&gt;
</pre>
<pre>    
# Include libraries codemirror
&lt;script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/4.3.0/codemirror.min.js"&gt;&lt;/script&gt; <br>
&lt;script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/4.3.0/mode/xml/xml.min.js"&gt;&lt;/script&gt; <br>
&lt;script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/4.3.0/mode/javascript/javascript.min.js"&gt;&lt;/script&gt; <br>
&lt;script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/4.3.0/mode/css/css.min.js"&gt;&lt;/script&gt; <br>
&lt;script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/4.3.0/mode/htmlmixed/htmlmixed.min.js"&gt;&lt;/script&gt; <br>
&lt;script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/4.3.0/addon/dialog/dialog.min.js"&gt;&lt;/script&gt; <br>
&lt;script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/4.3.0/addon/search/searchcursor.min.js"&gt;&lt;/script&gt; <br>
&lt;script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/4.3.0/addon/search/search.min.js"&gt;&lt;/script&gt; <br>
&lt;link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/4.3.0/codemirror.min.css"&gt; <br>
&lt;link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/4.3.0/addon/dialog/dialog.min.css"&gt; <br>
&lt;link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/4.3.0/theme/monokai.min.css"&gt;
</pre>
<pre>
&lt;!-- Display File Browser Awesome --&gt;
&lt;div class="ibc_fba"&gt;&lt;/div&gt;
&lt;!-- Read File --&gt;
&lt;div id="ibc_fba_file"&gt;&lt;/div&gt;
</pre>
<h1><a href ="http://ibacor.com/file" target="_BLANK">DEMO</a></h1>
