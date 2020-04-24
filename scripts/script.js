document.addEventListener('DOMContentLoaded', function () {
  var elems = document.querySelectorAll('.dropdown-trigger');
  var instances = M.Dropdown.init(elems);

  var elems = document.querySelectorAll('.sidenav');
  var instances = M.Sidenav.init(elems);

  var el = document.querySelectorAll('.tabs');
  var instance = M.Tabs.init(el);

  var elems = document.querySelectorAll('.parallax');
  var instances = M.Parallax.init(elems);

  var elems = document.querySelectorAll('.datepicker');
  var instances = M.Datepicker.init(elems);
  
});
