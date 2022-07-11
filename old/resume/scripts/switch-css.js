function toggleTheme() {
    var theme = document.getElementsByTagName('link')[3];

    if (theme.getAttribute('href') == '../stylesheets/main.css') {
        theme.setAttribute('href', '../stylesheets/pink.css');
    } else {
        theme.setAttribute('href', '../stylesheets/main.css');
    }
}