const http = require('http');
const fs = require('fs');
const port = 3000;

const server = http.createServer(function(req, res)
{
    console.log(req.url);
    if(req.url.indexOf(".html") !== -1)
    {
        content_type = 'text/html';
        writePage(res, req.url, content_type);
    }
    else if(req.url.indexOf(".css") !== -1) 
    {
        content_type = 'text/css';
        writePage(res, req.url, content_type);
    }
    else if(req.url.indexOf(".png") !== -1)
    {
        content_type = 'image/png';
        writePage(res, req.url, content_type);
    }
});

function writePage(res, file, content_type)
{
    fs.readFile(file.substring(1), function(error,data){
        if(error)
        {
            res.writeHead(404);
            res.write('Error: File Not Found');
        }
        else
        {
            res.writeHead(200, {'Content-Type': content_type});
            res.write(data);
        }
        res.end();
    });
}

server.listen(port, function(error)
{
    if(error)
    {
        console.log('Something went wrong', error);
    }
    else
    {
        console.log('Server is listening on port ' + port);
    }
});