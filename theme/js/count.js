// const counters = document.querySelectorAll('.count');
// counters.forEach(counter => {
//     const update = () => {
//         const target = +counter.getAttribute('data-target');
//         const count = +counter.innerText;
//         const increment = target / 10000;

//         if (count < target) {
//             counter.innerText = Math.ceil(count + increment);
//             setTimeout(update, 60);
//         } else {
//             counter.innerText = target;
//         }
//     };

//     update();
// });