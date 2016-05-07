window.onload = function () {
    var bibleList = document.getElementById('bible-list');

    var OldTestamentBooksLen = OldTestBooks.length;
    var NewTestamentBooksLen = NewTestBooksBooks.length;

    for (var i = 0; i < OldTestamentBooksLen; i++) {
        var book = OldTestBooks[i];

        var a = document.createElement('a');
        a.innerHTML = book;
        a.setAttribute('role', 'button');
        a.className = 'btn btn-default';

        bibleList.appendChild(a);

        $(a).click(function() {
            getData(this.innerHTML);
        });

    }

    function getData(book) {
        $.ajax({
            url:'http://getbible.net/json',
            dataType: 'jsonp',
            data: 'p=' + book + '&v=kjv',
            jsonp: 'getbible'
        }).done(function(x) {
            var txt = '<link rel="stylesheet" href="css/fmc.css" type="text/css" />';
            txt +='<script type="text/javascript" src="js/jquery-1.12.2.min.js"></script>';

            txt += '<h1>' + book + '</h1>';

            if (x.book) {
                var chapters = Object.keys(x.book);

                chapters.forEach(function(chapter_nr, idx) {
                    var chapter = x.book[chapter_nr];

                    if (chapter.chapter) {
                        var verses = Object.keys(chapter.chapter);

                        verses.forEach(function(verse_nr) {
                            var verse = chapter.chapter[verse_nr];
                            txt += "<div class='book book_" + book + "' id='verse_" + book + "-" + chapter_nr + "-" + verse_nr + "'>" + chapter_nr + ":" + verse_nr + " " + verse.verse + "</div>";
                        });
                    }
                });
            }

            var win = window.open();
            win.document.write(txt);

            var books = win.window.$('.book');
            var current = 0;

            win.window.$(win).on('keydown', function(e) {
                books.removeClass('active');

                var book = books[current];
                $(book).addClass('active');

                if (e.keyCode === 87) { // W
                    if (current == 0) {
                        return;
                    }

                    current--;
                } else if (e.keyCode === 83) { // S
                    if (current == books.length - 1) {
                        return;
                    }

                    current++;
                }
            });

        } ).fail(function(err) {
            console.log(err);
        });
    }
}
