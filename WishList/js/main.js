// Listen for form Submit
document.getElementById('myForm').addEventListener('submit', saveBookmark);

// Save Bookmark
function saveBookmark(e) {
  // Get form values
  var itemName = document.getElementById('itemName').value;
  var siteUrl = document.getElementById('siteUrl').value;
  var imageUrl = document.getElementById('imageUrl').value;

  if (!validateForm(itemName, siteUrl, imageUrl)) {
    return false;
  }

  var bookmark = {
    name: itemName,
    url: siteUrl,
    image: imageUrl,
  };

  // Test if bookmarks is null
  if (localStorage.getItem('bookmarks') === null) {

    // init array
    var bookmarks = [];

    // Add to array
    bookmarks.push(bookmark);

    // Set to localStorage
    localStorage.setItem('bookmarks', JSON.stringify(bookmarks));
  } else {

    // Get Bookmarks from localStorage
    var bookmarks = JSON.parse(localStorage.getItem('bookmarks'));

    // Add bookmark to array
    bookmarks.push(bookmark);

    //Re-Set back to localStorage
    localStorage.setItem('bookmarks', JSON.stringify(bookmarks));
  }

  // Clear form
  document.getElementById('myForm').reset();

  // Re-fetch bookmarks
  fetchBookmarks();

  // Prevent form from submitting
  e.preventDefault();
}

// Delete bookmarks
function deleteBookmark(url) {
  // Get bookmarks from localStorage
  var bookmarks = JSON.parse(localStorage.getItem('bookmarks'));

  // Loop through the bookmarksResults
  for (var i = 0; i < bookmarks.length; i++) {
    if (bookmarks[i].url == url) {
      //remove from array
      bookmarks.splice(i, 1);
    }
  }

  // Re-set back to localStorage
  localStorage.setItem('bookmarks', JSON.stringify(bookmarks));

  //re-fetch bookmarks
  fetchBookmarks();
}

// Fetch Bookmarks
function fetchBookmarks() {
  // Get Bookmarks from localStorage
  var bookmarks = JSON.parse(localStorage.getItem('bookmarks'));

  // Get output id
  var bookmarksResults = document.getElementById('bookmarksResults');

  // Build output
  bookmarksResults.innerHTML = '';
  for (var i = 0; i < bookmarks.length; i++) {
    var name = bookmarks[i].name;
    var url = bookmarks[i].url;
    var image = bookmarks[i].image;

    bookmarksResults.innerHTML += '<div class="well">' +
      '<h3><a target="_blank" href="' + addhttp(url) + '">' + name + '</a>' +
      ' <a target="_blank" href="' + addhttp(url) + '"><img width=100% src="' + image + '"></a> ' +
      ' <a class="btn btn-default" target="_blank" href="' + addhttp(url) + '">Visit</a> ' +
      ' <a onclick="deleteBookmark(\'' + url + '\')" class="btn btn-danger" href="#">Delete</a> ' +
      '</h3>' +
      '</div>';
  }
}

// Validate form
function validateForm(itemName, siteUrl, imageUrl) {
  if (!itemName || !siteUrl || !imageUrl) {
    alert('Please fill in the form');
    return false;
  }

  var expression = /[-a-zA-Z0-9@:%_\+.~#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&//=]*)?/gi;
  var regex = new RegExp(expression);

  if (String(!siteUrl).match(regex)) {
    alert('Please use a valid URL');
    return false;
  }

  return true;
}

function addhttp(url) {
  if (!/^(?:f|ht)tps?\:\/\//.test(url)) {
    url = "http://" + url;
  }
  return url;
}
