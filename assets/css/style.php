<?php
    header('Content-type: text/css')
?>
/*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
html {
  line-height: 1.15;
  -webkit-text-size-adjust: 100%;
}

body {
  margin: 0;
}

main {
  display: block;
}

h1 {
  font-size: 2em;
  margin: 0.67em 0;
}

hr {
  -webkit-box-sizing: content-box;
          box-sizing: content-box;
  height: 0;
  overflow: visible;
}

pre {
  font-family: monospace, monospace;
  font-size: 1em;
}

a {
  background-color: transparent;
}

abbr[title] {
  border-bottom: none;
  text-decoration: underline;
  -webkit-text-decoration: underline dotted;
          text-decoration: underline dotted;
}

b,
strong {
  font-weight: bolder;
}

code,
kbd,
samp {
  font-family: monospace, monospace;
  font-size: 1em;
}

small {
  font-size: 80%;
}

sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}

sub {
  bottom: -0.25em;
}

sup {
  top: -0.5em;
}

img {
  border-style: none;
}
button,
input,
optgroup,
select,
textarea {
  font-family: inherit;
  font-size: 100%;
  line-height: 1.15;
  margin: 0;
}

button,
input {
  overflow: visible;
}

button,
select {
  text-transform: none;
}

button,
[type="button"],
[type="reset"],
[type="submit"] {
  -webkit-appearance: button;
}

button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
  border-style: none;
  padding: 0;
}

button:-moz-focusring,
[type="button"]:-moz-focusring,
[type="reset"]:-moz-focusring,
[type="submit"]:-moz-focusring {
  outline: 1px dotted ButtonText;
}

fieldset {
  padding: 0.35em 0.75em 0.625em;
}

legend {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  color: inherit;
  display: table;
  max-width: 100%;
  padding: 0;
  white-space: normal;
}

progress {
  vertical-align: baseline;
}

textarea {
  overflow: auto;
}

[type="checkbox"],
[type="radio"] {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  padding: 0;
}

[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
  height: auto;
}

[type="search"] {
  -webkit-appearance: textfield;
  outline-offset: -2px;
}

[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}

::-webkit-file-upload-button {
  -webkit-appearance: button;
  font: inherit;
}

details {
  display: block;
}

summary {
  display: list-item;
}

template {
  display: none;
}

[hidden] {
  display: none;
}
/* http://meyerweb.com/eric/tools/css/reset/ v5.0.1 | 20191019 License: none (public domain) */
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, menu, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed,
figure, figcaption, footer, header, hgroup,
main, menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}

article, aside, details, figcaption, figure,
footer, header, hgroup, main, menu, nav, section {
	display: block;
}

*[hidden] {
    display: none;
}
body {
	line-height: 1;
}
menu, ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}
@-webkit-keyframes infiniteRotation {
  from {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg); }
  to {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg); } }
@keyframes infiniteRotation {
  from {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg); }
  to {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg); } }

*,
*::before,
*::after {
  margin: 0;
  padding: 0;
  -webkit-box-sizing: inherit;
          box-sizing: inherit; }

html {
  scroll-behavior: smooth;
  position: relative;
  overflow-x: hidden; }

body {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  position: relative;
  overflow-x: hidden; }

::-moz-selection {
  background-color: transparent;
  color: #fff; }

::selection {
  background-color: transparent;
  color: #fff; }

@font-face {
  font-family: "New York-1";
  src: url(../../medias/fonts/newyork/NewYork.otf); }

@font-face {
  font-family: "New York-2";
  src: url(../../medias/fonts/new_york_3/new-york.otf); }

@font-face {
  font-family: "Berlin";
  src: url(../../medias/fonts/berlin-collection/berlin-collection.ttf); }

@font-face {
  font-family: "vladfedotovv-monument";
  src: url(../../medias/fonts/vladfedotovv-monument/Monument-nRxzJ.otf); }

@font-face {
  font-family: "viktoria-duo";
  src: url(../../medias/fonts/viktoria-duo/viktoria-serif.otf); }

::-webkit-scrollbar {
  width: 4px;
  z-index: -1; }
  ::-webkit-scrollbar.hidden {
    width: 0 !important; }
  ::-webkit-scrollbar-thumb {
    background: var(--color-thumb);
    height: 10px; }
  ::-webkit-scrollbar-track {
    background-color: var(--color-quaternary); }

html {
  font-size: 62.5%; }

body {
  font-family: "New York-1", 'Times New Roman', Times, serif; }

.header-box {
  position: relative;
  z-index: 1;
  text-align: center;
  height: 15%;
  margin-top: 1.5rem; }
  .header-box h2 {
    font-size: 3rem;
    position: absolute;
    display: inline-block;
    position: relative; }
    .header-box h2::before {
      content: "";
      background-image: url(../../../medias/svgs/divider-1.svg);
      background-size: cover;
      background-position: center;
      position: absolute;
      bottom: -3.7rem;
      left: 50%;
      -webkit-transform: translateX(-50%);
              transform: translateX(-50%);
      width: 18.4rem;
      height: 5rem; }

.background {
  height: 100vh;
  width: 100%;
  position: absolute; }
  .background__color {
    position: absolute; }
    .background__color--1 {
      background-color: #fab5a2;
      height: 30rem;
      width: 80%;
      right: 0rem;
      top: -8rem; }
    .background__color--2 {
      background-color: #F8F7E3;
      height: 50rem;
      width: 50rem;
      left: 5rem;
      bottom: -30rem; }
    .background__color--3 {
      background-color: #f0ccee;
      height: 50rem;
      width: 50rem;
      right: -10rem;
      bottom: -25rem; }
    .background__color--4 {
      background-color: #d6eff3;
      display: none;
      height: 30rem;
      width: 30rem;
      left: 20rem;
      bottom: 17rem; }
    .background__color--5 {
      background-color: #fab5a2;
      height: 25rem;
      width: 25rem;
      left: -15rem;
      bottom: 17rem; }
  .background__blur {
    -webkit-backdrop-filter: blur(120px);
            backdrop-filter: blur(120px);
    height: 100vh;
    width: 100%;
    position: absolute;
    z-index: 1; }

html[current-theme='dark'] * {
  -webkit-transition-timing-function: ease-out;
          transition-timing-function: ease-out;
  -webkit-transition-duration: .2s;
          transition-duration: .2s; }

html[current-theme='light'] * {
  -webkit-transition-timing-function: ease-out;
          transition-timing-function: ease-out;
  -webkit-transition-duration: .2s;
          transition-duration: .2s;
  -webkit-transition-property: color, background-color, border, -webkit-transform;
  transition-property: color, background-color, border, -webkit-transform;
  transition-property: color, background-color, border, transform;
  transition-property: color, background-color, border, transform, -webkit-transform; }

.exercise-5 {
  background-color: #f2e2ff;
  height: 100vh;
  position: relative;
  overflow: hidden;
  height: 100vh;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: start;
      -ms-flex-pack: start;
          justify-content: flex-start;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center; }
  .exercise-5__content-box {
    height: 85%;
    width: 85%;
    position: relative;
    z-index: 1;
    position: absolute;
    bottom: 0;
    right: 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: space-evenly;
        -ms-flex-pack: space-evenly;
            justify-content: space-evenly;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center; }
  .exercise-5__inputNumber {
    display: inline;
    font-size: 8rem;
    background-color: #000;
    border-radius: 4px;
    color: #FFF;
    text-align: center;
    width: 20%;
    -webkit-box-flex: 0;
        -ms-flex: none;
            flex: none;
    border: none;
    outline: none; }
  .exercise-5__multiplication-table {
    border: 2px solid black;
    border-radius: 3px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    justify-self: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    font-size: 3rem;
    font-weight: 1000;
    text-align: right; }
    .exercise-5__multiplication-table .row {
      width: 100%;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      justify-self: center;
      -webkit-box-align: center;
          -ms-flex-align: center;
              align-items: center; }
      .exercise-5__multiplication-table .row:not(:nth-of-type(10)) {
        border-bottom: 3px solid black; }
      .exercise-5__multiplication-table .row * {
        text-align: center;
        width: 80px; }

.intro {
  background-color: #f2e2ff;
  height: 100vh;
  position: relative;
  overflow: hidden;
  display: none; }
  .intro__content-box {
    height: 100vh;
    width: 100%;
    position: relative;
    z-index: 1;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center; }
    .intro__content-box::before, .intro__content-box::after {
      content: "";
      background-color: #000;
      border-radius: 999px;
      position: absolute;
      top: 50%;
      -webkit-transform: translate(-50%, -50%);
              transform: translate(-50%, -50%);
      width: 1px;
      height: 84%; }
    .intro__content-box::before {
      left: 18px; }
    .intro__content-box::after {
      right: 18px; }
  .intro__row {
    width: 100%; }
    .intro__row--top {
      margin-top: 1.3rem;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: justify;
          -ms-flex-pack: justify;
              justify-content: space-between; }
      .intro__row--top * {
        text-align: center;
        width: 33.334%; }
    .intro__row--center {
      margin-top: -10rem; }
  .intro__tarefa {
    font-size: 2rem;
    text-transform: uppercase; }
  .intro__date {
    font-size: 2rem; }
  .intro__header {
    text-align: center;
    width: 100%; }
  .intro__heading {
    font-size: 8rem;
    font-weight: 100;
    letter-spacing: 3px;
    position: relative; }
  .intro__subheading {
    font-size: 3rem;
    font-weight: 10;
    letter-spacing: 3px;
    -webkit-transform: translateY(5px);
            transform: translateY(5px); }
  .intro__button-box {
    text-align: center; }
  .intro__button {
    background-color: black;
    border-radius: 999px;
    border: 1px solid black;
    cursor: pointer;
    font-size: 2rem;
    height: 6rem;
    width: 28rem;
    position: relative;
    overflow: hidden;
    -webkit-transform: translateY(100px);
            transform: translateY(100px);
    -webkit-transition: .3s linear;
    transition: .3s linear; }
    .intro__button:hover .intro__button-text {
      position: relative;
      top: -50px; }
    .intro__button::before {
      content: "";
      background-color: #fff;
      border-radius: 999px;
      position: absolute;
      top: 50%;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
              transform: translate(-50%, -50%);
      opacity: 0;
      height: 100%;
      width: 80%;
      -webkit-transition: 0.7s cubic-bezier(0.215, 0.61, 0.355, 1);
      transition: 0.7s cubic-bezier(0.215, 0.61, 0.355, 1);
      z-index: -1; }
    .intro__button:hover::before {
      opacity: 1;
      height: 100%;
      width: 100%;
      z-index: -1; }
  .intro__button-text {
    position: relative;
    top: 0;
    color: #fff;
    letter-spacing: 1px;
    font-family: "New York-1", 'Times New Roman', Times, serif;
    -webkit-transition: 0.7s cubic-bezier(0.215, 0.61, 0.355, 1);
    transition: 0.7s cubic-bezier(0.215, 0.61, 0.355, 1); }
    .intro__button-text::before {
      content: "Explorar";
      color: black;
      letter-spacing: 1px;
      position: absolute;
      left: 50%;
      bottom: -50px;
      -webkit-transform: translateX(-50%);
              transform: translateX(-50%); }
  .intro__pw-box {
    -webkit-animation: infiniteRotation 25s linear infinite;
            animation: infiniteRotation 25s linear infinite;
    position: absolute;
    bottom: 14.3rem;
    right: 22rem;
    -webkit-transform: rotate(-25deg);
            transform: rotate(-25deg);
    z-index: -1; }
  .intro__pw {
    font-size: 2rem;
    -webkit-user-select: none;
       -moz-user-select: none;
        -ms-user-select: none;
            user-select: none; }
    .intro__pw span {
      position: absolute;
      top: -100px;
      display: inline-block;
      -webkit-transform-origin: 0 100px;
              transform-origin: 0 100px;
      font-weight: 100; }

.menu {
  background-color: #f2e2ff;
  height: 100vh;
  position: relative;
  overflow: hidden; }
  .menu__header {
    position: relative;
    z-index: 1;
    text-align: center;
    height: 15%;
    margin-top: 1.5rem; }
  .menu__heading {
    font-size: 3rem; }
  .menu__divider {
    width: 18.4rem;
    position: relative;
    top: -34px; }
  .menu__content-box {
    position: relative;
    z-index: 1;
    height: 85%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center; }
  .menu__exercises-box {
    height: 100%;
    width: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    -ms-flex-pack: distribute;
        justify-content: space-around;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center; }
  .menu__exercises-row {
    height: 50%;
    width: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center; }
    .menu__exercises-row--1 {
      -ms-flex-pack: distribute;
          justify-content: space-around; }
    .menu__exercises-row--2 {
      -ms-flex-pack: distribute;
          justify-content: space-around; }
    .menu__exercises-row--3 {
      -webkit-box-pack: space-evenly;
          -ms-flex-pack: space-evenly;
              justify-content: space-evenly; }
  .menu__exercise, .menu__exercise:link, .menu__exercise:visited {
    padding: 3rem 7rem;
    -webkit-transform: skew(12deg);
            transform: skew(12deg);
    position: relative;
    color: black;
    font-size: 1.5rem;
    font-weight: 1000;
    text-transform: uppercase;
    text-decoration: none;
    -webkit-transition: 0.7s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    transition: 0.7s cubic-bezier(0.68, -0.55, 0.265, 1.55); }
    .menu__exercise:hover, .menu__exercise:link:hover, .menu__exercise:visited:hover {
      background-color: #000;
      color: white;
      -webkit-transform: skew(0deg);
              transform: skew(0deg); }
    .menu__exercise:hover .menu__exercise__border, .menu__exercise:link:hover .menu__exercise__border, .menu__exercise:visited:hover .menu__exercise__border {
      -webkit-transform: translateX(0);
              transform: translateX(0); }
  .menu__exercise__border {
    background-color: #000;
    display: inline-block;
    position: absolute;
    -webkit-transition: 0.7s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    transition: 0.7s cubic-bezier(0.68, -0.55, 0.265, 1.55); }
    .menu__exercise__border--1 {
      height: 1px;
      width: 100%;
      top: 0;
      left: 0;
      -webkit-transform: translateX(-6px);
              transform: translateX(-6px); }
    .menu__exercise__border--2 {
      height: 100%;
      width: 1px;
      right: 0;
      top: 0;
      -webkit-transform: translateY(-6px);
              transform: translateY(-6px); }
    .menu__exercise__border--3 {
      height: 1px;
      width: 100%;
      bottom: 0;
      left: 0;
      -webkit-transform: translateX(6px);
              transform: translateX(6px); }
    .menu__exercise__border--4 {
      height: 100%;
      width: 1px;
      top: 0;
      left: 0;
      -webkit-transform: translateY(6px);
              transform: translateY(6px); }