
//------- MENU (NAVBAR) SET
var toggleStat = false;
var toggle = function (x) {
    x.classList.toggle("change");
    var getSidebar = document.querySelector('.side-bar');
    var getSidebarLink = document.querySelector('.side-bar a');

    if (toggleStat === false) {
        getSidebar.style.visibility = 'visible';
        for (var i = 0; i < getSidebarLink.length; i++) {
            getSidebarLink[i].style.opacity = '1';
        }
        toggleStat = true;
    }
    else if (toggleStat === true) {
        getSidebar.style.visibility = 'hidden';
        for (var i = 0; i < getSidebarLink.length; i++) {
            getSidebarLink[i].style.opacity = '0';
        }
        toggleStat = false;
    }
}

//------landing-HOME-TYPEWRITER EFFECT

// var i = 0;
// var logo = function typeWriter() {
//     let txt = 'Afifah Rahma K';
//     if (i < txt.length) {
//         document.getElementById('landing-effect').innerHTML += txt[i];
//         i++;
//         setTimeout(typeWriter, 10);
//     }
// }
// logo()


var line = document.getElementById("slogan")
var txts = ['a coder', 'a content creator', 'a fullstack developer', 'also an IT instructor'];
var speed = 50

async function typewriter(txt) {
    for (let i = 0; i < txt.length; i++) {
        line.innerHTML += txt[i];
        await delay(speed)
    }
}

async function reverseTypewriter(txt) {
    for (let i = txt.length; i > 0; i--) {
        line.innerHTML = line.innerHTML.slice(0, -1)
        await delay(speed)
    }
}

async function writeLoop() {
    for (let i = 0; i < txts.length; i++) {
        await typewriter(txts[i])
        await delay(1000)
        await reverseTypewriter(txts[i])
        await delay(300)
    }
    writeLoop()
}

function delay(ms) {
    return new Promise((resolve) => { setTimeout(() => { resolve() }, ms) })
}

writeLoop()


//------GALLERY-SLIDESHOW 