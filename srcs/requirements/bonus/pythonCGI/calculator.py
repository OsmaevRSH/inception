#!/usr/bin/python3

print('Content-type: text/html\n')

import cgi
form = cgi.FieldStorage()
html = """
<html>
<head><title>Calculate</title></head>
<body>
<p> {content}</p>
</body>
</html>"""

one=int(form.getfirst('one',0))
two=int(form.getfirst('two',0))
total = int(one+two)
print(html.format(content = 'The total is:' + str(total) ))
