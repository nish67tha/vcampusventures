<!DOCTYPE html>
<html>
<head>
    <title>Virtual Lab</title>

    <style>
        body {
            font-family: Arial;
            background: #f4f7fb;
            padding: 20px;
        }

        .lab-container {
            max-width: 1000px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
        }

        select, button {
            padding: 10px;
            margin: 10px 0;
        }

        textarea {
            width: 100%;
            height: 200px;
            padding: 10px;
            font-family: monospace;
        }

        iframe {
            width: 100%;
            height: 200px;
            border: 1px solid #ccc;
            margin-top: 10px;
        }

        pre {
            background: #000;
            color: #0f0;
            padding: 10px;
            margin-top: 10px;
        }
    </style>
</head>

<body>

<div class="lab-container">

    <h2>Virtual Lab (HTML + PHP)</h2>

    <select id="language">
        <option value="html">HTML</option>
        <option value="php">PHP</option>
    </select>

    <textarea id="code"><h1>Hello World</h1></textarea>

    <button onclick="runCode()">Run Code</button>

    <!-- HTML Output -->
    <iframe id="htmlOutput"></iframe>

    <!-- PHP Output -->
    <pre id="phpOutput"></pre>

</div>

<script>
function runCode() {
    let code = document.getElementById("code").value;
    let lang = document.getElementById("language").value;

    // HTML
    if (lang === "html") {
        let iframe = document.getElementById("htmlOutput");
        let doc = iframe.contentDocument || iframe.contentWindow.document;

        doc.open();
        doc.write(code);
        doc.close();

        document.getElementById("phpOutput").innerText = "";
    }

    // PHP
    if (lang === "php") {
        fetch("<?php echo base_url('lab/run_php'); ?>", {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            body: "code=" + encodeURIComponent(code)
        })
        .then(res => res.text())
        .then(data => {
            document.getElementById("phpOutput").innerText = data;
        });
    }
}
</script>

</body>
</html>