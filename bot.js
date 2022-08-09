// ==UserScript==
// @name         Bot
// @namespace    http://tampermonkey.net/
// @version      0.1
// @description  Bot for Bing
// @author       Kormakova Ksenia
// @match        https://www.bing.com/*
// @icon         data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==
// @grant        none
// ==/UserScript==

let keyword = "10 самых популярных шрифтов от Google";
let button = document.getElementById("search_icon");
let links = document.links;

if (button !== null){
    document.getElementById("sb_form_q").value = keyword;
    button.click();
} else {
    for (let i = 0; i < links.length; i++) {
    if (links[i].href.indexOf("napli.ru") !== -1){
        let link = links[i];
        console.log("Нашел строку " + link);
        link.click();
        break;
        }
    }
}
