    google.load('search', '1', {language : 'fr'});
    google.setOnLoadCallback(function() {
      var customSearchControl = new google.search.CustomSearchControl('013570994209401189891:kygvfqr_vtg');
      customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
      var options = new google.search.DrawOptions();
      options.enableSearchboxOnly("rechercher.php");
      customSearchControl.draw('cse-search-form', options);
    }, true);
  
    function parseQueryFromUrl () {
      var queryParamName = "q";
      var search = window.location.search.substr(1);
      var parts = search.split('&');
      for (var i = 0; i < parts.length; i++) {
        var keyvaluepair = parts[i].split('=');
        if (decodeURIComponent(keyvaluepair[0]) == queryParamName) {
          return decodeURIComponent(keyvaluepair[1].replace(/\+/g, ' '));
        }
      }
      return '';
    }

    google.load('search', '1', {language : 'fr'});
    google.setOnLoadCallback(function() {
      var customSearchControl = new google.search.CustomSearchControl('013570994209401189891:kygvfqr_vtg');
      customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
      customSearchControl.draw('cse');
      var queryFromUrl = parseQueryFromUrl();
      if (queryFromUrl) {
        customSearchControl.execute(queryFromUrl);
      }
    }, true);

