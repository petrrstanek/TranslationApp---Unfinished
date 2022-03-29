const words = [
  'invoke',
  'regardless',
  'braces',
  'parentheses',
  'denotes',
  'statement',
  // 'although',
  // 'intended ',
  // 'habit',
  // 'ancestry',
  // 'cause',
  // 'execute',
  // 'foundational',
  // 'curious',
  // 'however',
  // 'certainly',
  // 'adapt',
  // 'coprehensive',
  // 'related',
  // 'instead',
  // 'delighten',
  // 'provide',
  // 'evaluation',
  // 'apparently',
  // 'flew'
];

const btnNext = document.querySelector('.next');
const btnEnter = document.querySelector('.enter');
const space = document.querySelector('.eng-space');
const amount = document.querySelector('.amount');

let counter = -1;
let balance = words.length;
// btnNext.addEventListener('click', feeder, false);
// btnEnter.addEventListener('click', feeder, false);

// function feeder() {
//   counter++;
//   for (let i = 0; i < words.length; i++) {
//     space.value = words[counter];
//   }

//   balance--;
//   if (balance > 0) {
//     amount.innerHTML = `${words.length}/${balance}`;
//   } else {
//     amount.innerHTML = `
// 	${words.length}/ konec testu
// 	`;
//     space.value = 'complete';
//   }
// }
