let showNavbar = (toggleId, navId, bodyId, headerId) => {

    let toggle = document.getElementById(toggleId),
        nav = document.getElementById(navId),
        bodypd = document.getElementById(bodyId),
        headerpd = document.getElementById(headerId)

    if (toggle && nav && bodypd && headerpd) {

        toggle.addEventListener('click', ()=> {

            nav.classList.toggle('show')

            toggle.classList.toggle('bi-x')

            bodypd.classList.toggle('body-pd')

            headerpd.classList.toggle('body-pd')

        })
    }

}

showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

let linkColor = document.querySelectorAll('.nav_link')

function colorLink() {

    if (linkColor) {

        linkColor.forEach(l => l.classList.remove('active'))
        this.classList.add('active')

    }

}

linkColor.forEach(l=> l.addEventListener('click', colorLink))