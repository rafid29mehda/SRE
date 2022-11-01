const hudai = document.querySelectorAll('.hudai_1')

const guard_id = document.querySelector("#id");
const guard_name = document.querySelector("#name");

const len = hudai.length;


for(let i=0; i<len; i++){
    hudai[i].addEventListener('click',()=>{
        // console.log(hudai[i]);
        let x = hudai[i].previousElementSibling;
        guard_name.value = x.textContent.trim();
        guard_id.value = parseInt(x.previousElementSibling.textContent);
    });
}