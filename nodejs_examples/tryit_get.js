var http = require('http');
var url = require('url');

http.createServer(function (req, res) {
  res.writeHead(200, {'Content-Type': 'text/html'});
  var qobj = url.parse(req.url, true).query;
  var txt = qobj.name;   // assume x is querystring parameter
  res.end("The value is: " + txt);
}).listen(8080);
