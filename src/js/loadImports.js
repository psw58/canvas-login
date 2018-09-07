(function ($) {
    // start load imports
    function supportsImports() {
        return 'import' in document.createElement('link');
      }
      
    if (supportsImports()) {
        var link = document.querySelector('link[rel="import"]');
        // Grab DOM from warning.html's document.
        var content = link.import;
        var el = content.querySelector('body');   
        var target = document.getElementById('spotlight');
        target.appendChild(el.cloneNode(true));                     
    }else {
        console.log('import not supported use pollyfill');
        document.addEventListener('WebComponentsReady', function(e) {
            var view = document.querySelector('link[rel="import"]');
            var content = view.import;
            var el = content.querySelector('body');
            var target = document.getElementById('spotlight');
            target.appendChild(el.cloneNode(true));                     
          });        
    }
    
})(jQuery);
