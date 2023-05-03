'use strict';

const toggleFunc = (elem) => {
  elem.classList.toggle("active");
}

const dropItemList = document.querySelectorAll('.drop-item');
// const dropItemDesc = document.querySelector('.drop-item__desc');

dropItemList.forEach(o => {
  o.addEventListener('click', function() {
    toggleFunc(o);
  });
});