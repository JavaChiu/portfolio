function changeQuote() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      //this.responseText;
      var responseQuote = JSON.parse(this.responseText);
      document.getElementById("quote").innerHTML = responseQuote[0].content;      
      document.getElementById("citation").innerHTML = responseQuote[0].title;
    }
  };
  var url = "https://quotesondesign.com/wp-json/posts?filter[orderby]=rand&filter[posts_per_page]=1&_=" + new Date().getTime();
  xhttp.open("GET", url, true);
  xhttp.send();
}
