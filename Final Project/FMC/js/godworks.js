window.onload = function () {
    var bibleListOld = document.getElementById('bible-list-old');
    var bibleListNew = document.getElementById('bible-list-new');

    var OldTestamentBooksLen = OldTestBooks.length;
    var NewTestamentBooksLen = NewTestBooks.length;

    for (var i = 0; i < OldTestamentBooksLen; i++) {
        var book = OldTestBooks[i];

        var a = document.createElement('a');
        a.innerHTML = book;
        a.setAttribute('role', 'button');
        a.className = 'btn btn-default';

        bibleListOld.appendChild(a);

        $(a).click(function() {
            getData(this.innerHTML);
        });

    }
    for (var i = 0; i < NewTestamentBooksLen; i++) {
        var book = NewTestBooks[i];

        var a = document.createElement('a');
        a.innerHTML = book;
        a.setAttribute('role', 'button');
        a.className = 'btn btn-default';

        bibleListNew.appendChild(a);

        $(a).click(function() {
            getData(this.innerHTML);
        });

    }

    $('#search-btn').click(function() {
        var value = $('#search-txt').val();
        getData(value);
    });

    /* What's going on here??????????
    * TODO:
    * form validation with custom search box for specific passages*/
    function getData(book) {
        $.ajax({
            url:'http://getbible.net/json',
            dataType: 'jsonp',
            data: 'p=' + book + '&v=kjv',
            jsonp: 'getbible'
        }).done(function(x) {
            var txt = '<link rel="stylesheet" href="css/godworks.css" type="text/css">';
            txt +='<script type="text/javascript" src="js/jquery-1.12.2.min.js"></script>';

            txt += '<h1>' + book + '</h1>';

            var win = window.open();
            win.document.write(txt);
            win.document.close();

            window.setTimeout( function() {
                // Book objects have chapters in each key
                if (x.book) {
                    var chapters = Object.keys(x.book);

                    chapters.forEach(function(chapter_nr, idx) {
                        var chapter = x.book[chapter_nr];

                        if (chapter.chapter) {
                            var verses = Object.keys(chapter.chapter);

                            verses.forEach(function(verse_nr) {
                                var verse = chapter.chapter[verse_nr];

                                var div = document.createElement('div');
                                div.innerHTML = chapter.chapter_nr + ":" + verse.verse_nr + " " + verse.verse;
                                div.className = 'book book_' + book;
                                div.id="verse_" + book + "-" + chapter.chapter_nr + "-" + verse.verse_nr;

                                win.document.body.appendChild(div);

                                //txt += "<div class='book book_" + book + "' id='verse_" + book + "-" + chapter_nr + "-" + verse_nr + "'>" + chapter_nr + ":" + verse_nr + " " + verse.verse + "</div>";
                            });
                        }
                    });
                }

                // Chapter objects have verses in each key
                if (x.chapter) {
                    var verses = Object.keys(x.chapter);

                    verses.forEach(function(verse_nr) {
                        var verse = x.chapter[verse_nr];

                        var div = document.createElement('div');
                        div.innerHTML = x.chapter_nr + ":" + verse_nr + " " + verse.verse;
                        div.className = 'book book_' + x.book_name;
                        div.id="verse_" + book + "-" + x.chapter_nr + "-" + verse_nr;

                        win.document.body.appendChild(div);

                        //txt += "<div class='book book_" + book + "' id='verse_" + book + "-" + chapter_nr + "-" + verse_nr + "'>" + chapter_nr + ":" + verse_nr + " " + verse.verse + "</div>";
                    });

                }

                //win.document.close();

                var books = win.window.$('.book');
                var current = -1;

                win.window.$(win).on('keydown', function(e) {
                    books.removeClass('active');

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
                    } else if (e.keyCode === 27) {
                        books.removeClass('active');
                        return;
                    }

                    var book = books[current];
                    $(book).addClass('active');
                });
            }, 1000);

        } ).fail(function(err) {
            console.log(err);
        });
    }
}
