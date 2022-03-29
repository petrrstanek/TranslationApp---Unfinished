const uniq = require('uniq');
const translated = require('./db_words.js');

console.log(translated.word.length);

let wrongWords = [];
let compare = ['vyvolat', 'přihrát'];
const btnNext = document.querySelector('.btnNext');
const btnEnter = document.querySelector('.btnEnter');
const space = document.querySelector('.engSpace');
const input = document.getElementById('input');
const eval = document.querySelector('.eval');

let counter = 0;
btnNext.addEventListener('click', feeder, false);

function feeder() {
  counter++;
  translatedWord = translated.word[counter];
  space.innerText = translated.word[counter];

  if (counter === translated.word.length) {
    space.innerHTML = 'complete';
    console.log('object');
  }
  return translatedWord;
}

btnEnter.addEventListener('click', (e) => {
  if (input.value === compare[counter]) {
    console.log('Hooray!!!!');
    input.value = '';
    eval.innerText = '✅ Correct';
    counter++;
    space.innerText = translated.word[counter];
  } else {
    wrongWords.push(translated.word[counter]);
    counter++;
    space.innerText = translated.word[counter];
    eval.innerText = '❌ Wrong!';
    console.log(wrongWords);
  }
});
