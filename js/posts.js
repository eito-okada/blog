var options = {
    valueNames: ['name', 'date'],
    page: 9,
    pagination: true
};

var userList = new List('articles', options);

$('.search').attr('placeholder', 'Search ' +  $('.post').length +  ' articles...');