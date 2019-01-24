document.addEventListener("DOMContentLoaded", function() {

    var suggestions = document.getElementById("suggestions");
    var form = document.getElementById("search-form");
    var search = document.getElementById("search");
    var searchBtn = document.getElementById("searchBtn");
    

    function suggestionsList(items) {
        var output = "";
        for (i = 0; i < items.length; i++) {
            output+="<li class='list-group-item'>";
            output+="<a href='auto_index.php?q=" + items[i] + "'>";
            output+= items[i];
            output+="</a>";
            output+="</li>";
        }
        return output;
    }

    function showSuggestions(json) {
        var li_list = suggestionsList(json);
        suggestions.innerHTML = li_list;
        suggestions.style.display = "block";
    }

    function AjaxSuggestions() {
        var q = search.value;

        if (q.length < 2) {
            suggestions.style.display = "none";
            return;
        }

        var xhr = new XMLHttpRequest();
        xhr.open("GET", "autosuggest.php?q=" + q, true);
        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var result = xhr.responseText;
                console.log("Result " + result);
                var json = JSON.parse(result);
                showSuggestions(json);
            }//if
        }// xhr.onreadystatechange
        xhr.send();
    }//function AjaxSuggestions() 

//use input which is every key
   search.addEventListener("input", AjaxSuggestions);
   searchBtn.addEventListener("submit", AjaxSuggestions);
}); //PAGE LOADED