function makeAnchor(url, link){
    var openTag = '&lta href="http://';
    var middleTag = '"&gt';
    var closingTag ='&lt/a&gt';
    document.getElementById('08rez').innerHTML = openTag + url + middleTag + link + closingTag;
    document.getElementById('08pav').innerHTML = '<a href="http://' + url + '">' + link + '</a>';
}
